<?php

    namespace Controller;
    use App\Helpers\SidebarHelper;

    defined('ROOTPATH') or exit('Access denied');

    class Payment{
        use MainController;
        public function index(){

            $session = new \Core\Session;
            $session->check_login();
            $session->check_child();
            $ChildID = $session->get("CHILDID");
    
            $data = ['hi'];
            $SidebarHelper = new SidebarHelper();
            $data = $SidebarHelper->store_sidebar();
    
            $ChildModal = new \Modal\Child;
            $select = $ChildModal->first(['ChildID' => $ChildID]);
            $data['child_id'] = $ChildID;
    
            if (!empty($select)) {
                $data2 = $this->selectedchild($select);
                $data = $data + $data2;
            }
    
            $session->set("Location" , 'Child/Payment');

            $data =$data + $this->store_states();
            $data['graph'] = $this->graph();
            $this->view('Child/Payment', $data);
        }

        private function store($children, $pre){
            $data = [];

            // Retrieve the parent's profile image
            $parentImage = getProfileImageUrl($pre[0]->Username);
            $data['parent'] = [
                'fullname' => $pre[0]->First_Name . ' ' . $pre[0]->Last_Name,
                'image' => !empty($parentImage) ? $parentImage : null,
            ];

            // Retrieve each child's profile image and details
            foreach ($children as $index => $child) {
                $childImage = getProfileImageUrl($pre[0]->Username, $child->First_Name);
                $data['children'][$index] = [
                    'name' => $child->First_Name,
                    'image' => !empty($childImage) ? $childImage : null,
                ];
            }

            return $data;
        }

        public function graph() {
            $PaymentModal = new \Modal\Payment;
            $session = new \core\Session;
            $ChildModal = new \Modal\Child;
        
            $ChildID = $session->get("CHILDID");
            $child = $ChildModal->first(["ChildID" => $ChildID]);
        
            $childPayments = [];
            $Day = new \DateTime();
            $Day->modify('first day of last month'); // Start from the previous month
        
            for ($i = 0; $i < 3; $i++) { // Loop for the last 3 months (same as parent)
                $formattedDate = $Day->format('Y-m-01'); // Format as YYYY-MM-01
        
                // Fetch payments for the child and month
                $payments = $PaymentModal->where_norder([
                    'ChildID' => $ChildID,
                    'Month' => $formattedDate
                ]);
        
                // Store in array
                $childPayments[$formattedDate] = $payments;
        
                // Move to the previous month
                $Day->modify('-1 month');
            }
        
            // Convert to Chart.js format for line chart (monthly mapping)
            $chartData = [
                'labels' => [],
                'datasets' => []
            ];
        
            if (!empty($childPayments)) {
                // Get all unique months
                $months = array_keys($childPayments);
                sort($months);
                $chartData['labels'] = array_map(function ($month) {
                    return date('F', strtotime($month)); // Convert "YYYY-MM-01" to "January"
                }, $months);
        
                $incomeData = [];
        
                foreach ($months as $month) {
                    $amount = 0;
                    if (!empty($childPayments[$month])) {
                        foreach ($childPayments[$month] as $payment) {
                            $amount += $payment->Amount; // Sum all payments for the month
                        }
                    }
                    $incomeData[] = $amount;
                }
        
                $chartData['datasets'][] = [
                    'label' => 'Fees in LKR',
                    'data' => $incomeData,
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgb(72, 151, 207)',
                    'borderWidth' => 1
                ];
            }
        
            return json_encode($chartData);
        }
        

        private function selectedchild($selectedchild){
            $data = [];

            // Retrieve the specific child's profile image and details

            $imageData = $selectedchild->Image;
            $imageType = $selectedchild->ImageType;  // Get the image MIME type from the database

            // If image data is available, construct the Base64 string using the correct MIME type
            $base64Image = (!empty($imageData) && is_string($imageData))
                ? 'data:' . $imageType . ';base64,' . base64_encode($imageData)
                : null;

            $data['selectedchildren'] = [
                'fullname' => $selectedchild->First_Name . ' ' . $selectedchild->Last_Name,
                'name' => $selectedchild->First_Name,
                'image' => $base64Image,
                'age' => agecalculate($selectedchild->DOB),
                'language' => $selectedchild->Language,
                'religion' => $selectedchild->Religion,
                'id' => str_pad($selectedchild->ChildID, 5, '0', STR_PAD_LEFT),
            ];

            return $data;
        }

        private function store_states(){
            $data = [];
            $PaymentsModal = new \Modal\Payment;

            $session = new \Core\Session;
            $ChildID = $session->get("CHILDID");

            $allPayments = [];

            $childPayments = $PaymentsModal->where_order_desc(["ChildID" => $ChildID], [], "DateTime");
            if(!empty($childPayments)){
                $allPayments = array_merge($allPayments, $childPayments);
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

        public function test(){
            $date = null;
            $mode = 'All';
            $PaymentsModal = new \Modal\Payment;
            $ChildModal = new \Modal\Child;
            $session = new \Core\Session;
            $ChildID = $session->get("CHILDID");
            $Child = $ChildModal->first(["ChildID" => $ChildID]);

            $Payments = [];

            $childPayments = $PaymentsModal->where_order_desc(["ChildID" => $ChildID], [], "DateTime");
            foreach ($childPayments as $pay){
                $pay->ChildName = $Child->First_Name;
                $dateTime = new \DateTime($pay->DateTime);
                $pay->Date = $dateTime->format('Y-m-d');
                $pay->Time = $dateTime->format('H:i:s');

                if ($date !== null && $pay->Date !== $date) {
                    continue;
                }
        
                // Apply the status filter
                if ($mode !== 'All' && $pay->Mode !== $mode) {
                    continue;
                }
                    $Payments[] = $pay;
            }
            return $Payments;
        }

        public  function store_history(){
            header('Content-Type: application/json');
            $requestData = json_decode(file_get_contents("php://input"), true);
        
            $date = $requestData['date'];
            if ($date === null) {
                $date = null;
            }
    
            $mode = $requestData['mode'];
            if ($mode === null || $mode === 'All') {
                $mode = 'All';
            }

            $PaymentsModal = new \Modal\Payment;
            $ChildModal = new \Modal\Child;
            $session = new \Core\Session;
            $ChildID = $session->get("CHILDID");
            $Child = $ChildModal->first(["ChildID" => $ChildID]);

            $Payments = [];

            $childPayments = $PaymentsModal->where_order_desc(["ChildID" => $ChildID], [], "DateTime");
            foreach ($childPayments as $pay){
                $pay->ChildName = $Child->First_Name;
                $dateTime = new \DateTime($pay->DateTime);
                $pay->Date = $dateTime->format('Y-m-d');
                $pay->Time = $dateTime->format('H:i:s');

                if ($date !== null && $pay->Date !== $date) {
                    continue;
                }
        
                // Apply the status filter
                if ($mode !== 'All' && $pay->Mode !== $mode) {
                    continue;
                }
                    $Payments[] = $pay;
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

        public function removechildsession(){
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            header('Content-Type: application/json');
            $response = [];

            $session = new \Core\Session;
            $ChildID = $session->get("CHILDID");

            if (isset($ChildID)) {
                $session->unset("CHILDID");
                $response = ['success' => true, 'message' => 'Child session removed.'];
            } else {
                $response = ['success' => false, 'message' => 'No child session to remove.'];
            }

            echo json_encode($response);  // Send JSON response
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