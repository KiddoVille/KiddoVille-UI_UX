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
            $data['description'] = $this->description();
            $this->view('Child/Payment', $data);
        }

        public function AmountPurpose(){
            $input = json_decode(file_get_contents('php://input'), true);
            if (isset($input['total']) && isset($input['purpose'])) {

                $session = new \Core\Session;
                $session->set("total", $input['total']);
                $session->set("purpose", $input['purpose']);

                echo json_encode(['success' => true]);
            } else {
                $session = new \Core\Session;
                $session->unset("total");
                $session->unset("purpose");
                echo json_encode(['success' => false]);
            }
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

        
        private function description() {
            $session = new \core\Session;
            $ChildID = $session->get("CHILDID");
        
            $ExpensesModal = new \Modal\Expense;
            $AllExpenses = $ExpensesModal->where_order_desc(["ChildID" => $ChildID], [], "Date");
        
            $groupedExpenses = [];
        
            foreach ($AllExpenses as $expense) {
                // Format month and year (e.g., "April 2025")
                $monthYear = date('F Y', strtotime($expense->Date));
        
                // Initialize if not already
                if (!isset($groupedExpenses[$monthYear])) {
                    $groupedExpenses[$monthYear] = [
                        'Meal' => 0,
                        'Activity' => 0,
                        'Reservations' => 0,
                        'Package' => 0
                    ];
                }
        
                // Add amount to the corresponding category
                $desc = $expense->Description;
                if (isset($groupedExpenses[$monthYear][$desc])) {
                    $groupedExpenses[$monthYear][$desc] += $expense->Amount;
                }
            }
            
            return $groupedExpenses;
        }

        public function graph() {
            $FeesModal = new \Modal\Fees;
            $session = new \core\Session;
            $ChildModal = new \Modal\Child;
        
            $ChildID = $session->get("CHILDID");
            $childPayments = [];
            $Day = new \DateTime();
            $Day->modify('first day of last month'); // Start from the previous month
        
            // Fetch last 3 months (excluding current)
            for ($i = 0; $i < 3; $i++) {
                $lastDayOfMonth = clone $Day;
                $lastDayOfMonth->modify('last day of this month');
                $formattedDate = $lastDayOfMonth->format('Y-m-d');
        
                $payments = $FeesModal->where_norder([
                    'ChildID' => $ChildID,
                    'DueDate' => $formattedDate
                ]);
        
                $childPayments[$formattedDate] = $payments;
                $Day->modify('-1 month');
            }
        
            // Convert to Chart.js format
            $chartData = [
                'labels' => [],
                'datasets' => []
            ];
        
            $incomeData = [];
            $months = array_keys($childPayments);
            sort($months);
        
            // Add last 3 months data
            foreach ($months as $month) {
                $chartData['labels'][] = date('F', strtotime($month)); // e.g. January
                $amount = 0;
                if (!empty($childPayments[$month])) {
                    foreach ($childPayments[$month] as $payment) {
                        $amount += $payment->Amount;
                    }
                }
                $incomeData[] = $amount;
            }
        
            // 👉 Now handle the current month's bill from Expense table
            $ExpensesModal = new \Modal\Expense;
            $firstDayOfMonth = date('Y-m-01');
        
            $childExpenses = $ExpensesModal->where_order_desc([
                "ChildID" => $ChildID,
                "Date" => $firstDayOfMonth
            ], [], "Date");
        
            $currentMonthAmount = 0;
            if ($childExpenses) {
                foreach ($childExpenses as $expense) {
                    $currentMonthAmount += $expense->Amount;
                }
            }
        
            // Add current month to chart
            $chartData['labels'][] = date('F'); // current month label
            $incomeData[] = $currentMonthAmount;
        
            // Assign dataset
            $chartData['datasets'][] = [
                'label' => 'Fees in LKR',
                'data' => $incomeData,
                'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                'borderColor' => 'rgb(72, 151, 207)',
                'borderWidth' => 1
            ];
        
            // Optionally include this data elsewhere
            if ($currentMonthAmount > 0) {
                $data['Expenses'] = [
                    'Amount' => $currentMonthAmount,
                    'Date' => date('Y-m-d', strtotime($firstDayOfMonth)),
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
            $FeesModal = new \Modal\Fees;

            $session = new \Core\Session;
            $ChildID = $session->get("CHILDID");

            $childPayments = $FeesModal->where_order_desc(["ChildID" => $ChildID, "Status" => "Unpaid"], [], "DueDate");

            $Amount = 0;
            $DueDate = null;
    
            if(!empty($childPayments)){
                foreach ($childPayments as $payment) {
                    $Amount += $payment->Amount;
                }
                $DueDate = $childPayments[0]->DueDate;

                $data['Due'] = [
                    'Amount' => $Amount,
                    'Date' => date('Y-m-d', strtotime($DueDate)),
                ];
            }
            
            $LastBill = $FeesModal->where_order_desc(["ChildID" => $ChildID], [], "DueDate");
            if (!empty($LastBill)) {
                $data['LastBill'] = [
                    'Amount' => $LastBill[0]->Amount,
                ];
            }

            $ExpensesModal = new \Modal\Expense;
            $firstDayOfMonth = date('Y-m-01');
            $childExpenses = $ExpensesModal->where_order_desc(["ChildID" => $ChildID, "Date" => $firstDayOfMonth ], [], "Date");
            if($childExpenses){
                $Amount = 0;
                foreach ($childExpenses as $expense) {
                    $Amount += $expense->Amount;
                }
                $data['Expenses'] = [
                    'Amount' => $Amount,
                    'Date' => date('Y-m-d', strtotime($firstDayOfMonth)),
                ];
            }

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