<?php

    namespace Controller;

    use App\Helpers\SidebarHelper;
    use App\Helpers\ChildHelper;

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
            $this->view('Parent/payment',$data);
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