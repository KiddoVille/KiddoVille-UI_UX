<?php

    namespace Controller;

    use App\Helpers\SidebarHelper;
    use App\Helpers\ChildHelper;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Controller;

use DateTime;

    defined('ROOTPATH') or exit('Access denied');

    class Payment{
        use MainController;
        public function index(){
            $session = new \Core\Session;
            $session->check_login();

            $data = [];
            $SidebarHelper = new SidebarHelper();
            $data = $SidebarHelper->store_sidebar();

            $session->set("Location" , 'Parent/Payments');

            $data = $data + $this->store_states();
            $data['graph'] = $this->graph();
            $this->view('Parent/payment',$data);
        }

        public function graph() {
            $PaymentModal = new \Modal\Payment;
            $Childhelper = new ChildHelper();
        
            $children = $Childhelper->store_child();
            $childPayments = []; // This will store all payments
        
            foreach ($children as $child) {
                $Day = new DateTime();
                $Day->modify('first day of last month'); // Start from the previous month
        
                for ($i = 0; $i < 3; $i++) { // Loop for the last 3 months
                    $formattedDate = $Day->format('Y-m-01'); // Format as YYYY-MM-01
        
                    // Fetch payments for the current child and month
                    $payments = $PaymentModal->where_norder([
                        'ChildID' => $child->ChildID,
                        'Month' => $formattedDate
                    ]);
        
                    // Store in array
                    $childPayments[$child->First_Name][$formattedDate] = $payments;
        
                    // Move to the previous month
                    $Day->modify('-1 month');
                }
            }
        
            // Convert to Chart.js format
            $chartData = [
                'labels' => [], // To store months
                'datasets' => [] // To store children's data
            ];
        
            if (!empty($childPayments)) {
                // Get all unique months
                $months = [];
                foreach ($childPayments as $childName => $monthsData) {
                    foreach ($monthsData as $month => $payments) {
                        if (!in_array($month, $months)) {
                            $months[] = $month;
                        }
                    }
                }
        
                // Sort months in ascending order
                sort($months);
                $chartData['labels'] = array_map(function ($month) {
                    return date('F', strtotime($month)); // Convert "YYYY-MM-01" to "January"
                }, $months);
        
                // Generate datasets dynamically
                $colors = [
                    'rgba(255, 99, 132, 0.6)',  // Red
                    'rgba(54, 162, 235, 0.6)',  // Blue
                    'rgba(255, 206, 86, 0.6)',  // Yellow
                    'rgba(75, 192, 192, 0.6)',  // Teal
                    'rgba(153, 102, 255, 0.6)'  // Purple
                ];
        
                $i = 0;
                foreach ($childPayments as $childName => $monthsData) {
                    $childData = [];
        
                    foreach ($months as $month) {
                        $amount = 0;
                        if (!empty($monthsData[$month])) {
                            foreach ($monthsData[$month] as $payment) {
                                $amount += $payment->Amount; // Sum all payments for the month
                            }
                        }
                        $childData[] = $amount;
                    }
        
                    $chartData['datasets'][] = [
                        'label' => $childName,
                        'data' => $childData,
                        'backgroundColor' => $colors[$i % count($colors)],
                        'borderColor' => str_replace('0.6', '1', $colors[$i % count($colors)]),
                        'borderWidth' => 1
                    ];
        
                    $i++;
                }
            }
        
            return (json_encode($chartData));
        }        

        private function store_states(){
            $data = [];
            $PaymentsModal = new \Modal\Payment;

            $ChildHelper = new ChildHelper();
            $children = $ChildHelper->store_child();

            $allPayments = [];
            foreach ($children as $child) {
                // Fetch all payments for each child
                $childPayments = $PaymentsModal->where_order_desc(["ChildID" => $child->ChildID], [], "DateTime");
                if(!empty($childPayments)){
                    $allPayments = array_merge($allPayments, $childPayments);
                }
            }
            
            // Find the most recent month
            $latestMonth = null;
            $groupedPayments = [];
            
            foreach ($allPayments as $payment) {
                $paymentDate = new \DateTime($payment->DateTime);
                $monthYear = $paymentDate->format("Y-m"); // Format as YYYY-MM
            
                if ($latestMonth === null) {
                    $latestMonth = $monthYear; // Set first month as latest
                }
            
                // Group payments only for the most recent month
                if ($monthYear === $latestMonth) {
                    if (!isset($groupedPayments[$monthYear])) {
                        $groupedPayments[$monthYear] = 0;
                    }
                    $groupedPayments[$monthYear] += $payment->Amount;
                }
            }
            
            // Get the total for the latest month
            $totalAmountPaid = $groupedPayments[$latestMonth] ?? 0;
            $data['totalAmountPaid'] = $totalAmountPaid;
            return $data;
        }

        public  function store_history(){
            header('Content-Type: application/json');
            $requestData = json_decode(file_get_contents("php://input"), true);
        
            $date = $requestData['date'];
            if ($date === null) {
                $date = null;
            }
        
            $childname = $requestData['child'];
            if ($childname === null || $childname === 'All' ) {
                $childname = 'All';
            }
    
            $mode = $requestData['mode'];
            if ($mode === null || $mode === 'All') {
                $mode = 'All';
            }

            $data = [];
            $PaymentsModal = new \Modal\Payment;

            $ChildHelper = new ChildHelper();
            $children = $ChildHelper->store_child();

            $Payments = [];

            foreach ($children as $child) {
                if ($childname !== 'All' && $child->First_Name !== $childname) {
                    continue; // Skip if the child's First_Name doesn't match
                }

                $childPayments = $PaymentsModal->where_order_desc(["ChildID" => $child->ChildID], [], "DateTime");
                foreach ($childPayments as $pay){
                    $pay->ChildName = $child->First_Name;
                    $dateTime = new \DateTime($pay->DateTime);
                    $pay->Date = $dateTime->format('Y-m-d');
                    $pay->Time = $dateTime->format('H:i:s');

                    if ($date !== null && $pay->Date !== $date) {
                        continue; // Skip if the date does not match
                    }
        
                    // Apply the status filter
                    if ($mode !== 'All' && $pay->Mode !== $mode) {
                        continue; // Skip if the status does not match
                    }

                    $Payments[] = $pay;
                }
            }
            if (empty($Payments)){
                echo json_encode(['success' => false, 'message' => 'No reservations found for the selected filters']);
            } else {
                echo json_encode(['success' => true, 'data' => $Payments]);
            }
        }

        public function setchildsession(){
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            header('Content-Type: application/json');
            $request = json_decode(file_get_contents('php://input'), true);
            $response = [];
        
            $session = new \Core\Session;
            if (isset($request['ChildID'])) {
                $session->set('CHILDID', $request['ChildID']);
                $response = ['success' => true, 'message' => 'Child session removed.'];
            } else {
                $response = ['success' => false, 'message' => 'No child session to remove.'];
            }
    
            echo json_encode($response);
            exit();
        }

        public function Logout(){
            $session = new \core\Session();
            $session->logout();

            echo json_encode(["success" => true]);
            exit;
        }
    }
?>