<?php

    namespace Controller;

    use App\Helpers\ChildHelper;
    use App\Helpers\SidebarHelper;

    defined('ROOTPATH') or exit('Access denied');

    class Reservation{
        use MainController;
        public function index(){

            $session = new \Core\Session;
            $session->check_login();
            $session->check_child('Parent');

            // Retrieve session variables
            $childname = $session->get('CHILDNAME');
            $parentname = $session->get('USERNAME');

            $child = new \Modal\Child;
            $children = $child->where_norder(['Parent_Name' => $parentname]);
            $parent = new \Modal\ParentUser;
            $pre = $parent->where_norder(['Username' => $parentname]);
    
            // Prepare data for all children
            $data = $this->store($children, $pre);
    
            // Select specific child by name, if it exists
            $select = $child->where_norder(['Parent_Name' => $parentname, 'First_Name' => $childname ]);
    
            if (!empty($select)) {
                $data2 = $this->selectedchild($select[0], $pre);
                $data = $data + $data2;
            }

            $data['child_Id'] = $_SESSION['CHILD_ID'];
            $child_id = $_SESSION['CHILD_ID'];

            $data2 = $this->store_reservations($child_id);
            $data = $data + $data2;

            $data2 = $this->set_stats($data['upcoming']);
            $data = $data + $data2;

            $data3 = $this->set_dates();
            $data = $data + $data3;

            $this->view('Child/reservation', $data);
        }

        private function set_dates() {
            $session = new \core\Session;
            $ChildID = $session->get("CHILDID");
        
            $ChildModal = new \Modal\Child;
            $PackageModal = new \Modal\Package;
            $HolidayModal = new \Modal\Holiday;
            $ReservationModal = new \Modal\Reservation;
        
            $Child = $ChildModal->first(['ChildID' => $ChildID]);
            $Package = $PackageModal->first(['PackageID' => $Child->PackageID]);
        
            $today = new \DateTime();
            $today->modify('+1 day');
            $nextweek = clone $today;
            $nextweek->modify('+14 days');
        
            $Reservation = $ReservationModal->findFutureDates($today, $nextweek);
            $Holidays = $HolidayModal->findFutureDates($today, $nextweek);
        
            // Convert holiday dates to string list for easy comparison
            if(!empty($Reservation)){
                $ReservationDates = array_map(fn($h) => (new \DateTime($h->Date))->format('Y-m-d'), $Reservation);
            }
            if(!empty($Holidays)){
                $holidayDates = array_map(fn($h) => (new \DateTime($h->Date))->format('Y-m-d'), $Holidays);
            }
        
            $dates = [];
            $editdates = [];
            $edithours = [];
            $hours = [];
            for ($i = 0; $i < 14; $i++) {
                $dateStr = $today->format('Y-m-d');
                $dayName = $today->format('l'); // Full day name e.g., Monday
        
                // Check if date is a holiday
                $isHoliday = in_array($dateStr, $holidayDates);
                $isReservation = in_array($dateStr, $ReservationDates);
        
                // Check if the day is allowed by the package (0 = not allowed)
                $isAllowedByPackage = property_exists($Package, $dayName) && $Package->$dayName == 0;
        
                // Only include if it's NOT a holiday and the day is allowed by the package
                if (!$isHoliday && $isAllowedByPackage && !$isReservation) {
                    $dates[] = [
                        'date' => $dateStr,
                        'dayName' => $today->format('D'),
                        'day' => $today->format('d')
                    ];
                }

                if(!$isHoliday && $Package->AllHours == 0 && !$isReservation){
                    $hours[] = [
                        'date' => $dateStr,
                        'dayName' => $today->format('D'),
                        'day' => $today->format('d')
                    ];
                }

                if (!$isHoliday && !$isReservation) {
                    $editdates[] = [
                        'date' => $dateStr,
                        'dayName' => $today->format('D'),
                        'day' => $today->format('d')
                    ];
                }

                if(!$isHoliday && !$isReservation){
                    $edithours[] = [
                        'date' => $dateStr,
                        'dayName' => $today->format('D'),
                        'day' => $today->format('d')
                    ];
                }
        
                $today->modify('+1 day');
            }

            $data['dates'] = $dates;
            $data['editdates'] = $editdates;

            if($Package->AllHours == 1){
                $data['hours'] = $dates;
                $data['edithours'] = $dates;
            }
            else{
                $data['hours'] = $hours;
                $data['edithours'] = $edithours;
            }
            return $data;
        }        

        public function store_reservations() {
            header('Content-Type: application/json');
            $requestData = json_decode(file_get_contents("php://input"), true);
        
            $date = $requestData['date'];
            if ($date === null) {
                $date = null;
            }
    
            $status = $requestData['status'];
            if ($status === null || $status === 'All') {
                $status = 'All';
            }
        
            $res = new \Modal\Reservation;
            $reservations = [];  // Initialize this outside of the loop

            if($result){
                $data['edit']['Res_Id'] = $result->Res_Id; 
                $data['edit']['Date'] = $result->Date ?? '';
                $data['edit']['Start_Time'] = $result->Start_Time ?? '';
                $data['edit']['End_Time'] = $result->End_Time ?? '';
                $data['edit']['Notes'] = $result->Notes ?? '';
            }
            return $data;
        }

        public function makereservation() {
            show($_POST);
            $session = new \core\Session;
            $requiredFields = ['Date', 'Start_Time'];
        
            $data = [];
        
            // Initialize form values
            $data['values']['Date'] = $_POST['Date'] ?? '';
            $data['values']['Start_Time'] = $_POST['Start_Time'] ?? '';
            $data['values']['End_Time'] = $_POST['End_Time'] ?? '';
            $data['values']['Notes'] = $_POST['Notes'] ?? '';
            $data['values']['full-day'] = $_POST['full-day']?? '';
        
            // Check if all required fields are filled in
            if (checkRequiredFields($requiredFields, $_POST)){
        
                $data['errors'] = [];
                $data['displayModal'] = false;
        
                $today = new \DateTime();
                $today->modify('+1 days');
                $date = new \DateTime($_POST['Date']);
                
                if ($date < $today) {
                    $data['errors']['Date'] = 'Not a valid date';
                    $data['values']['Date'] = '';
                    $data['displayModal'] = true;
                    $data['Entered'] = true;
                }
                
                if ($date < $today) {
                    $data['errors']['Date'] = 'Not a valid date';
                    $data['values']['Date'] = '';
                    $data['displayModal'] = true;
                    $data['Entered'] = true;
                }
        
                // Validate Start Time - must be between 8:00 AM and 8:00 PM
                $startTime = $_POST['Start_Time'];
                if ($startTime < '08:00' || $startTime > '20:00') {
                    $data['errors']['Start_Time'] = 'Not a valid time';
                    $data['values']['Start_Time'] = '';
                    $data['displayModal'] = true;
                    $data['Entered'] = true;
                }
        
                if (isset($_POST['End_Time']) && !empty($_POST['End_Time'])) {
                    $endTime = $_POST['End_Time'];
                    if ($endTime < '08:00' || $endTime > '20:00') {
                        $data['errors']['End_Time'] = 'Not a valid time';
                        $data['values']['End_Time'] = '';
                        $data['displayModal'] = true;
                        $data['Entered'] = true;
                    }
                }                
        
                if(!isset($_POST['full-day'])){
                    $startTimeObj = new \DateTime($startTime);
                    $endTimeObj = new \DateTime($endTime);
            
                    // Check if Start Time is less than End Time
                    if ($startTimeObj >= $endTimeObj) {
                        $data['errors']['Time'] = 'Start time must be earlier than end time.';
                        $data['values']['End_Time'] = ''; // Clear invalid end time
                        $data['displayModal'] = true;
                        $data['Entered'] = true;
                    } else {
                        // Check for at least 4-hour gap
                        $minEndTime = (clone $startTimeObj)->modify('+4 hours');
                        if ($endTimeObj < $minEndTime) {
                            $data['errors']['Time'] = 'There must be at least a 4-hour gap between start and end time.';
                            $data['values']['End_Time'] = $minEndTime->format('H:i'); // Suggest a valid end time
                            $data['values']['Start_Time'] = $startTime; // Ensure Start_Time remains valid
                            $data['displayModal'] = true;
                            $data['Entered'] = true;
                        }
                    }
                }
        
                $ChildID = $session->get("CHILDID");
                $_POST['ChildID'] = $ChildID;    

                $ReservationModal = new \Modal\Reservation;
                $session ->set('success', true);
                if ($data['displayModal'] === false) {
                    $session->set('success', true);
                    if(isset($_POST['full-day']) && $_POST['full-day'] == 'on'){
                        $_POST['Is_24_Hour'] = 1;
                        show($_POST);
                    }
                    $session->set('success', true);
                    $session->unset('Page');

                    $ChildModal = new \Modal\Child;
                    $ChildHelper = new ChildHelper;
                    $AssignMaidModal = new \Modal\AssignMaid;
                    $MaidModal = new \Modal\Maid;
                    $LeaveModal = new \Modal\MaidLeave;

                    $Child = $ChildModal->first(["ChildID"=>$ChildID]);
                    $AgeGroup = $ChildHelper->getAgeGroup($Child->DOB);

                    $AvailableMaids = $AssignMaidModal->countGroupByJoin("ChildID", "MaidID", "<", 5, [ 'table' => 'Maid', 'on' => 'Maid.MaidID = Assignmaid.MaidID'], ["AgeGroup" => '2-3', "Date" => $_POST['Date']]);
                    $UsedMaids = [];
                    if(empty($AvailableMaids)){
                        $UsedMaids = $AssignMaidModal->countGroupByJoin("ChildID", "MaidID", "=", 5, [ 'table' => 'Maid', 'on' => 'Maid.MaidID = Assignmaid.MaidID'], ["AgeGroup" => $AgeGroup, "Date" => $_POST['Date']]);
                        $AllMaids = $MaidModal->where_norder(["AgeGroup" => $AgeGroup]);
                        if(!empty($UsedMaids)){
                            $allMaidIDs = array_map(fn($maid) => $maid->MaidID, $AllMaids);
                            $usedMaidIDs = array_map(fn($maid) => $maid->MaidID, $UsedMaids);

                            // Get available IDs
                            $availableMaidIDs = array_diff($allMaidIDs, $usedMaidIDs);

                            // Filter original $AllMaids to only include the available ones
                            $AvailableMaids = array_filter($AllMaids, function ($maid) use ($availableMaidIDs) {
                                return in_array($maid->MaidID, $availableMaidIDs);
                            });
                        }
                        else{
                            $AvailableMaids = $AllMaids;
                        }
                    }

                    foreach ($AvailableMaids as $Persons){
                        $Leave = $LeaveModal->first(["MaidID" => $Persons->MaidID, "Date" => $_POST['Date']]);
                        if(!empty($Leave)){
                            $AvailableMaids = array_filter($AvailableMaids, function ($maid) use ($Leave) {
                                return $maid->MaidID != $Leave->MaidID;
                            });
                        }
                    }
                    
                    if(!empty($AvailableMaids)){
                        $AssignMaidModal->insert([
                            'ChildID' => $ChildID,
                            'MaidID' => $AvailableMaids[0]->MaidID,
                            'Date' => $_POST['Date'],
                            'Is_24_hour' => isset($_POST['Is_24_Hour']) && $_POST['Is_24_Hour'] ? 1 : 0
                        ]);

                        $_POST['Status'] = "Approved";
                    }
                    else{
                        $_POST['Status'] = "Pending";
                    }

                    $ReservationModal->insert($_POST);
                    redirect('Child\Reservation');
                }
                else{
                    $session->set('Page', $data);
                    redirect('Child\Reservation');
                }
                return $data;
        
            } else {
                $data['errors'] = 'Please fill in all required fields.';
                $session->set('success', false);
                $data['displayModal'] = false;
                $session->set('Page', $data);
                redirect('Child\Reservation');
            }
        }             

        public function editreservation() {
            $session = new \core\Session;
            $requiredFields = ['Date', 'Start_Time'];
        
            $data = [];
        
            // Initialize form values
            $data['values']['Date'] = $_POST['Date'] ?? '';
            $data['values']['Start_Time'] = $_POST['Start_Time'] ?? '';
            $data['values']['End_Time'] = $_POST['End_Time'] ?? '';
            $data['values']['Notes'] = $_POST['Notes'] ?? '';
            $data['values']['full-day'] = $_POST['full-day'] ?? '';
        
            // Check if all required fields are filled in
            if (checkRequiredFields($requiredFields, $_POST)) {
        
                $data['errors'] = [];
                $data['displayModal'] = false;
        
                $today = new \DateTime();
                $today->modify('+1 days');
                $date = new \DateTime($_POST['Date']);
        
                if ($date < $today) {
                    $data['errors']['Date'] = 'Not a valid date';
                    $data['values']['Date'] = '';
                    $data['displayModal'] = true;
                    $data['Entered'] = true;
                }
        
                // Validate Start Time - must be between 8:00 AM and 8:00 PM
                $startTime = $_POST['Start_Time'];
                if ($startTime < '08:00' || $startTime > '20:00') {
                    $data['errors']['Start_Time'] = 'Not a valid time';
                    $data['values']['Start_Time'] = '';
                    $data['displayModal'] = true;
                    $data['Entered'] = true;
                }

                if (isset($_POST['full-day'])) {
                    $_POST['Is_24_Hour'] = 1;
                    unset($_POST['full-day']);
                    unset($_POST['End_Time']);
                }
                else{
                    $_POST['Is_24_Hour'] = 0;
                }

                if (isset($_POST['End_Time']) && !empty($_POST['End_Time'])) {
                    $endTime = $_POST['End_Time'];
                    if ($endTime < '08:00' || $endTime > '20:00') {
                        $data['errors']['End_Time'] = 'Not a valid time';
                        $data['values']['End_Time'] = '';
                        $data['displayModal'] = true;
                        $data['Entered'] = true;
                    }

                    $startTimeObj = new \DateTime($startTime);
                    $endTimeObj = new \DateTime($_POST['End_Time'] ?? '');
        
                    // Check if Start Time is less than End Time
                    if ($startTimeObj >= $endTimeObj) {
                        $data['errors']['Time'] = 'Start time must be earlier than end time.';
                        $data['values']['End_Time'] = ''; // Clear invalid end time
                        $data['displayModal'] = true;
                        $data['Entered'] = true;
                    } else {
                        // Check for at least 4-hour gap
                        $minEndTime = (clone $startTimeObj)->modify('+4 hours');
                        if ($endTimeObj < $minEndTime) {
                            $data['errors']['Time'] = 'There must be at least a 4-hour gap between start and end time.';
                            $data['values']['End_Time'] = $minEndTime->format('H:i'); // Suggest a valid end time
                            $data['values']['Start_Time'] = $startTime;
                            $data['displayModal'] = true;
                            $data['Entered'] = true;
                        }
                    }
                }else{
                    $_POST['End_Time'] = null;
                }
        
                $_POST['ChildID'] = $session->get("CHILDID");
                $_POST['Start_Time'] = $startTime;
        
                $ReservationModal = new \Modal\Reservation;
                $ResID = $_POST['ResID'];
                unset($_POST['ResID']);
                $session->set('success', false);
        
                if ($data['displayModal'] === false) {
                    show($data);                   
                    show($_POST);

                    $OldReservation = $ReservationModal->first(["ResID" => $ResID]);
                    show($OldReservation);

                    show("Hi");
                    if($OldReservation->Date !== $_POST['Date']){
                        show("lol");
                        $AssignMaidModal = new \Modal\AssignMaid;
                        $AssignedMaid = $AssignMaidModal->first(["ChildID" => $_POST['ChildID'], "Date" => $OldReservation->Date]);
                        show($AssignedMaid);

                        if(!empty($AssignedMaid)){
                            show($AssignedMaid->WorkID);
                            $AssignMaidModal->delete($AssignedMaid->WorkID, "WorkID");

                            $ChildModal = new \Modal\Child;
                            $ChildHelper = new ChildHelper;
                            $AssignMaidModal = new \Modal\AssignMaid;
                            $MaidModal = new \Modal\Maid;
                            $LeaveModal = new \Modal\MaidLeave;
                            $ChildID = $_POST['ChildID'];
        
                            $Child = $ChildModal->first(["ChildID"=>$ChildID]);
                            $AgeGroup = $ChildHelper->getAgeGroup($Child->DOB);
        
                            $AvailableMaids = $AssignMaidModal->countGroupByJoin("ChildID", "MaidID", "<", 5, [ 'table' => 'Maid', 'on' => 'Maid.MaidID = Assignmaid.MaidID'], ["AgeGroup" => '2-3', "Date" => $_POST['Date']]);
                            $UsedMaids = [];
                            if(empty($AvailableMaids)){
                                $UsedMaids = $AssignMaidModal->countGroupByJoin("ChildID", "MaidID", "=", 5, [ 'table' => 'Maid', 'on' => 'Maid.MaidID = Assignmaid.MaidID'], ["AgeGroup" => $AgeGroup, "Date" => $_POST['Date']]);
                                $AllMaids = $MaidModal->where_norder(["AgeGroup" => $AgeGroup]);
                                if(!empty($UsedMaids)){
                                    $allMaidIDs = array_map(fn($maid) => $maid->MaidID, $AllMaids);
                                    $usedMaidIDs = array_map(fn($maid) => $maid->MaidID, $UsedMaids);
        
                                    // Get available IDs
                                    $availableMaidIDs = array_diff($allMaidIDs, $usedMaidIDs);
        
                                    // Filter original $AllMaids to only include the available ones
                                    $AvailableMaids = array_filter($AllMaids, function ($maid) use ($availableMaidIDs) {
                                        return in_array($maid->MaidID, $availableMaidIDs);
                                    });
                                }
                                else{
                                    $AvailableMaids = $AllMaids;
                                }
                            }
        
                            foreach ($AvailableMaids as $Persons){
                                show($_POST);
                                $Leave = $LeaveModal->first(["MaidID" => $Persons->MaidID, "Date" => $_POST['Date']]);
                                if(!empty($Leave)){
                                    $AvailableMaids = array_filter($AvailableMaids, function ($maid) use ($Leave) {
                                        return $maid->MaidID != $Leave->MaidID;
                                    });
                                }
                            }

                            show('Available Maids');
                            show($AvailableMaids);
                            
                            if(!empty($AvailableMaids)){
                                $AssignMaidModal->insert([
                                    'ChildID' => $ChildID,
                                    'MaidID' => $AvailableMaids[0]->MaidID,
                                    'Date' => $_POST['Date'],
                                    'Is_24_hour' => isset($_POST['Is_24_Hour']) && $_POST['Is_24_Hour'] ? 1 : 0
                                ]);
        
                                $_POST['Status'] = "Approved";
                            }
                            else{
                                $_POST['Status'] = "Pending";
                            }
                        }
                    }

                    $ReservationModal->update(["ResID" => $ResID],$_POST);

                    show($_POST);
                    $session->set('success', true);
                    $session->unset('Edit');
                    redirect('Child\Reservation');
                } else {
                    $session->set('Edit', $data);
                    show($_POST);
                    $session->unset('Edit');
                    redirect('Child\Reservation');
                }
        
                return $data;
        
            } else {
                $data['errors'] = 'Please fill in all required fields.';
                $session->set('success', false);
                $data['displayModal'] = false;
                $session->set('Edit', $data);
                // redirect('Child\Reservation');
            }
        }        

        private function set_stats($reservations){
            $data = [
                'Approved' => 0,
                'Pending' => 0,
                'Canceled' => 0,
            ];
            foreach ($reservations as $reservation) {
                if($reservation->Status === "Approved"){
                    $data["Approved"] += 1;
                }
                if($reservation->Status === "Pending"){
                    $data["Pending"] += 1;
                }
                if($reservation->Status === "Canceled"){
                    $data["Canceled"] += 1;
                }
            };

            return $data;
        }

        private function store_reservations($child_id) {
            $res = new \Modal\Reservation;
            $reservations = $res->where_norder(['Child_Id' => $child_id]);
        
            // Define "yesterday" as a DateTime object
            $yesterday = new \DateTime('yesterday');
        
            $data = [
                'upcoming' => [],
                'history' => [],
            ];
        
            if(!empty($reservations)){
                foreach ($reservations as $reservation) {
                    // Convert reservation date to DateTime for comparison
                    $reservationDate = new \DateTime($reservation->Date);
            
                    if ($reservationDate > $yesterday) {
                        // Store in upcoming reservations
                        $data['upcoming'][] = $reservation;
                    } else {
                        // Store in history reservations
                        $review = new \Modal\Review;
                        $result = $review->first(["Res_Id" => $reservation->Res_Id]);
                        $reservation->reviewdone = !empty($result);

                        $data['history'][] = $reservation;
                    }
                }
            }
        
            // Now $data contains categorized reservations
            return $data;
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
                    'id' => $child->Child_Id,
                    'name' => $child->First_Name,
                    'image' => !empty($childImage) ? $childImage : null,
                ];
            }
    
            return $data;
        }
    
        private function selectedchild($selectedchild, $pre){
            $data = [];
    
            $_SESSION['CHILD_ID'] = $selectedchild->Child_Id;
            $data['selectedchildren'] = [
                'name' => $selectedchild->First_Name,
            ];
    
            return $data;
        }

        public function setchildsession(){

            defined('ROOTPATH') or define('ROOTPATH', __DIR__); // Define the root if not already defined

            // Session and JSON response settings
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        
            header('Content-Type: application/json');
        
            // Disable error reporting for clean JSON output in production
            ini_set('display_errors', 0);
            error_reporting(0);
        
            // Handle AJAX request and set the child session
            $request = json_decode(file_get_contents('php://input'), true);
            $response = [];
        
            if (isset($request['childName'])) {
                $session = new \Core\Session;
                $session->set('CHILDNAME', $request['childId']);
                $session->set('CHILDNAME', $request['childName']);
                $response = ['success' => true];
            } else {
                $response = ['success' => false, 'message' => 'Child name not provided.'];
            }
            echo json_encode($response); // Output JSON response
            exit();
        }

        public function removechildsession(){

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            header('Content-Type: application/json');
            $response = [];
            
            if (isset($_SESSION['CHILDNAME'])) {
                $session = new \Core\Session;
                $session->unset("CHILDNAME");
                $response = ['success' => true, 'message' => 'Child session removed.'];
            } else {
                $response = ['success' => false, 'message' => 'No child session to remove.'];
            }

            echo json_encode($response);  // Send JSON response
            exit();
        }

        public function RemoveReservation() {
            header('Content-Type: application/json');
        
            $response = [];
        
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Check if Res_Id is provided
                if (isset($_POST['Res_Id'])) {
                    $Res_Id = $_POST['Res_Id'];
                    
                    $reservation = new \Modal\Reservation;
                    $res = $reservation->delete($Res_Id, "Res_Id");
                    $isDeleted = true;
        
                    if ($isDeleted) {
                        $response = [
                            'success' => true,
                            'message' => "Reservation ID $Res_Id deleted successfully"
                        ];
                    } else {
                        $response = [
                            'success' => false,
                            'message' => "Failed to delete Reservation ID $Res_Id"
                        ];
                    }
                } else {
                    $response = [
                        'success' => false,
                        'message' => "Reservation ID not provided"
                    ];
                }
            } else {
                $response = [
                    'success' => false,
                    'message' => "Invalid request method"
                ];
            }
        
            echo json_encode($response);
            exit();
        }
        
        public function GeteditReservation() {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            header('Content-Type: application/json');
            $request = json_decode(file_get_contents('php://input'), true);
            $response = [];

            if (isset($request['ResID'])) {
                $ResID = $request['ResID'];
                $reservation = new \Modal\Reservation;
                    
                // Query the reservation by Res_Id
                $res = $reservation->first(["ResID"=>$ResID]);
                    
                if ($res) {
                    $allow = 0;
                    if ($res->Is_24_Hour == 1) {
                        $session = new \core\Session;
                        $ChildID = $session->get("CHILDID");
        
                        $ChildModal = new \Modal\Child;
                        $PackageModal = new \Modal\Package;
        
                        $Child = $ChildModal->first(['ChildID' => $ChildID]);
                        $Package = $PackageModal->first(['PackageID' => $Child->PackageID]);
        
                        // Get the day name from the reservation date (e.g., 'Tuesday')
                        $dayName = date('l', strtotime($res->Date));
        
                        // Check if that day is allowed in the package (assuming $Package->$dayName is 1 or 0)
                        if (!isset($Package->$dayName) || $Package->$dayName == 0) {
                            $allow = 1; // Not allowed for normal reservation
                        }
                    }

                    $response = [
                        'success' => true,
                        'message' => "Reservation details fetched successfully",
                        'data' => [
                            'ResID' => $res->ResID,       // Res_Id
                            'Date' => $res->Date,           // Date
                            'Start_Time' => $res->Start_Time, // Start Time
                            'End_Time' => $res->End_Time,   // End Time
                            'Notes' => $res->Notes,          // Notes (null if no notes)
                            'Is_24_Hour' => $res->Is_24_Hour, // Is_24_Hour
                            'Allow' => $allow, // Allow for normal reservation
                        ]
                    ];
                } else {
                    // Reservation not found
                    $response = [
                        'success' => false,
                        'message' => "Reservation ID $ResID not found"
                    ];
                }
            } else {
                // No Res_Id provided in the request
                $response = [
                    'success' => false,
                    'message' => "Reservation ID not provided"
                ];
            }
            echo json_encode($response);
            exit();
        } 
    

        public function GetviewReservation() {
            header('Content-Type: application/json');
            $response = [];
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Check if Res_Id is provided
                if (isset($_POST['ResID'])) {
                    $ResID = $_POST['ResID'];
                    
                    $reservation = new \Modal\Reservation;
                    $res = $reservation->first(["ResID"=>$ResID]);
                    
                    if ($res) {
                        // Reservation found, return the reservation details
                        $response = [
                            'success' => true,
                            'message' => "Reservation details fetched successfully",
                            'data' => [
                                'Status' => $res->Status,
                                'ResID' => $res->ResID,       // Res_Id
                                'Date' => $res->Date,           // Date
                                'Start_Time' => $res->Start_Time, // Start Time
                                'End_Time' => $res->End_Time,   // End Time
                                'Notes' => $res->Notes,         // Notes (null if no notes)
                                'Is_24_Hour' => $res->Is_24_Hour, // Is_24_Hour
                            ]
                        ];
                    } else {
                        // Reservation not found
                        $response = [
                            'success' => false,
                            'message' => "Reservation ID $ResID not found"
                        ];
                    }
                } else {
                    // No Res_Id provided in the request
                    $response = [
                        'success' => false,
                        'message' => "Reservation ID not provided"
                    ];
                }
            } else {
                // Invalid request method
                $response = [
                    'success' => false,
                    'message' => "Invalid request method"
                ];
            }
        
            // Return the response as JSON
            echo json_encode($response);
            exit();
        }

        public function Review() {
            header('Content-Type: application/json');
            
            $response = [];
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $requiredFields = ['Reason', 'Review'];
                if (checkRequiredFields($requiredFields, $_POST) && isset($_POST['Res_Id'])) {
                    $review = new \Modal\Review;
                    $review->insert($_POST);
                    $response = [
                        'success' => true,
                        'message' => "Review submitted successfully",
                        
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'message' => "Missing required fields or invalid data",
                        'post_data' => $_POST
                    ];
                }
            } else {
                $response = [
                    'success' => false,
                    'message' => "Invalid request method",
                ];
            }
        
            // Send JSON response
            echo json_encode($response);
        }

        public function RemoveReservation(){
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            header('Content-Type: application/json');
            $request = json_decode(file_get_contents('php://input'), true);
            $response = [];

            if (isset($request['ResID'])) {
                $ResID = $request['ResID'];

                $ReservationModal = new \Modal\Reservation;
                $ReservationModal->delete($ResID, "ResID");
                $response = ['success' => true, 'message' => 'Reservation removed successfully.'];
                echo json_encode($response);
            }
            else{
                $response = ['success' => false, 'message' => 'No reservation ID provided.'];
                echo json_encode($response);
            }
        }
        
    }
?>