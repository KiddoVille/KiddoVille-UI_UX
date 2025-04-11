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
            $session->check_child();
            $ChildID = $session->get("CHILDID");

            $data = [];
            $SidebarHelper = new SidebarHelper();
            $data = $SidebarHelper->store_sidebar();

            $ChildModal =new \Modal\Child;
            $select = $ChildModal->first(['ChildID' => $ChildID]);
            $data['child_id'] = $ChildID;
    
            if (!empty($select)) {
                $data2 = $this->selectedchild($select);
                $data = $data + $data2;
            }

            $data2 = $this->set_stats();
            $data = $data + $data2;

            $data3 = $this->set_dates();
            $data = $data + $data3;

            $session->set("Location" , 'Child/Reservation');
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
            $holidayDates = array_map(fn($h) => (new \DateTime($h->Date))->format('Y-m-d'), $Holidays);
            $ReservationDates = array_map(fn($h) => (new \DateTime($h->Date))->format('Y-m-d'), $Reservation);
        
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

                if (!$isHoliday && $isAllowedByPackage) {
                    $editdates[] = [
                        'date' => $dateStr,
                        'dayName' => $today->format('D'),
                        'day' => $today->format('d')
                    ];
                }

                if(!$isHoliday && $Package->AllHours == 0){
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

            $session = new \core\session;
            $ChildID = $session->get("CHILDID");

            $childReservations = $res->where_order(['ChildID' => $ChildID], [] , "Date");
            if(!empty($childReservations)){
                foreach ($childReservations as $reservation) {
                    // Apply the date filter
                    if ($date !== null && $reservation->Date !== $date) {
                        continue; // Skip if the date does not match
                    }
        
                    // Apply the status filter
                    if ($status !== 'All' && $reservation->Status !== $status) {
                        continue; // Skip if the status does not match
                    }
        
                    $ChildModal = new \Modal\Child;
                    $Child = $ChildModal->first(["ChildID"=> $ChildID]);

                    $reservation->First_Name = $Child->First_Name;
                    $reservations[] = $reservation;
                }
            }

            $yesterday = new \DateTime('yesterday');
        
            $data = [
                'upcoming' => [],
                'history' => [],
            ];
        
            foreach ($reservations as $reservation) {
                $reservationDate = new \DateTime($reservation->Date);
        
                if ($reservationDate > $yesterday) {
                    $data['upcoming'][] = $reservation;
                } else {
                    // Auto-cancel expired pending reservations
                    if ($reservation->Status === 'Pending') {
                        $res->update(['ResID' => $reservation->ResID], ['Status' => 'Canceled']);
                    }
                    $data['history'][] = $reservation; // Add to history
                }
            }
        
            if (empty($data)){
                echo json_encode(['success' => false, 'message' => 'No reservations found for the selected filters']);
            } else {
                echo json_encode(['success' => true, 'data' => $data]);
            }
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

        private function set_stats() {
            $session = new \core\Session;
            $ChildID = $session->get("CHILDID");

            $ChildModal = new \Modal\Child;
            $Child = $ChildModal->first(['ChildID' => $ChildID]);
            $res = new \Modal\Reservation;
            $reservations = [];
        
            $reservations = $res->where_norder(['ChildID' => $ChildID]);
            $yesterday = new \DateTime('yesterday');
        
            // Filter reservations to keep only upcoming ones
            $upcomingReservations = array_filter($reservations, function ($reservation) use ($yesterday) {
                $reservationDate = new \DateTime($reservation->Date);
                return $reservationDate > $yesterday; // Only include upcoming reservations
            });
        
            // Initialize statistics
            $data = [
                'Approved' => 1,
                'Pending' => 2,
                'Canceled' => 3,
            ];
        
            // Calculate statistics for upcoming reservations
            foreach ($upcomingReservations as $reservation) {
                if ($reservation->Status === "Approved") {
                    $data['Approved'] += 1;
                } elseif ($reservation->Status === "Pending") {
                    $data['Pending'] += 1;
                } elseif ($reservation->Status === "Canceled") {
                    $data['Canceled'] += 1;
                }
            }
        
            return $data;
        }
    
        private function selectedchild($selectedchild)
        {
            $data = [];

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

        public function setchildsession()
        {
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

        public function removechildsession()
        {
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
                    // Reservation found, return the reservation details
                    $response = [
                        'success' => true,
                        'message' => "Reservation details fetched successfully",
                        'data' => [
                            'ResID' => $res->ResID,       // Res_Id
                            'Date' => $res->Date,           // Date
                            'Start_Time' => $res->Start_Time, // Start Time
                            'End_Time' => $res->End_Time,   // End Time
                            'Notes' => $res->Notes,          // Notes (null if no notes)
                            'Is_24_Hour' => $res->Is_24_Hour // Is_24_Hour
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
        
        public function Logout(){
            $session = new \core\Session();
            $session->logout();

            echo json_encode(["success" => true]);
            exit;
        }
    }
?>