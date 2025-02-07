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
            $data['test'] = $this->test();
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
    }
?>