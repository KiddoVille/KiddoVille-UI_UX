<?php

    namespace Controller;
    use App\Helpers\SidebarHelper;
    use App\Helpers\ChildHelper;

    defined('ROOTPATH') or exit('Access denied');

    class Home{
        use MainController;
        public function index(){

            $session = new \Core\Session;
            $session->check_login();

            $data = [];
            $SidebarHelper = new SidebarHelper();
            $data = $SidebarHelper->store_sidebar();

            $data['children'] = $this->store_child_details($data['children']);
            $data['reminders'] = $this->store_reminders();

            $ChildHelper = new ChildHelper();
            $data['Child_Count'] = $ChildHelper->child_count();
            $data = $data + $this->store_stats();
            $data = $data + $this->store_meeting_times();

            $session->set("Location" , 'Parent/Home');
            $this->view('Parent/home',$data);
        }

        private function store_stats(){

            $today = new \DateTime();
            $today = $today->format("Y-m-d");
            $session = new \Core\Session;
            $ChildHelper = new ChildHelper();
            $childattended = false;
            $hasPickup = false;
            $Children = $ChildHelper->store_child();
            
            foreach ($Children as $child) {
                $AttendanceModal = new \Modal\Attendance;
                $attendanceRow = $AttendanceModal->first(["ChildID" => $child->ChildID, "Status" => "Present"]);
                
                if ($attendanceRow) {
                    $childattended = true;
                }
            
                $PickupModal = new \Modal\Pickup;
                $row = $PickupModal->first(['ChildID' => $child->ChildID, 'Date' => $today, "AllChild" => 1]);
                
                if ($row) {
                    $hasPickup = true;
                    if ($row->Person == 'New') {
                        $imageData = $row->Image;
                        $imageType = $row->ImageType;
                        $base64Image = (!empty($imageData) && is_string($imageData)) 
                            ? 'data:' . $imageType . ';base64,' . base64_encode($imageData) 
                            : null;
                        $stats['stat2'] = [
                            'Time' => $row->Time,
                            'Person' => $row->Person,
                            'Image' => $base64Image
                        ];
                    } else {
                        $stats['stat2'] = [
                            'Time' => $row->Time,
                            'Person' => $row->Person
                        ];
                    }
                    break;
                }
            }
            
            if (!$childattended) {
                $stats['stat2'] = [
                    'nochild' => 'No child attended'
                ];
            } elseif (!$hasPickup) { 
                $stats['stat2'] = [
                    'Time' => '8:00PM',
                    'Person' => 'Parent'
                ];
            }            

            $UserID = $session->get("USERID");
            $ParentModal = new \Modal\ParentUser;
            $Parent = $ParentModal->first(["UserID" => $UserID]);
            $GuardianModal = new \Modal\Guardian;
            $Guardian = $GuardianModal->first(["ParentID" => $Parent->ParentID]);

            $imageData = $Guardian->Image;
            $imageType = $Guardian->ImageType;
            $base64Image = (!empty($imageData) && is_string($imageData)) 
                ? 'data:' . $imageType . ';base64,' . base64_encode($imageData) 
                : null;

            $stats['guardian']['Image'] = $base64Image;
            $stats['guardian']['name'] = $Guardian->First_Name . ' ' . $Guardian->Last_Name ;

            $UserID = $session->get("USERID");
            $MeetingModal = new \Modal\Meeting;
            $ParentModal = new \Modal\ParentUser;
            $Meeting = $MeetingModal->first(["ParentID" => $Parent->ParentID , "Scheduled" => 1]);

            if($Meeting){
                $stats['stat1'] = [
                    'Time' => $Meeting->Time,
                    'Date' => $Meeting->Date,
                ];
            }
    
            return $stats;
        }

        public function deletePickup(){
            header('Content-Type: application/json');
            $requestData = json_decode(file_get_contents("php://input"), true);

            $today = new \DateTime();
            $today = $today->format("Y-m-d");
            $ChildHelper = new ChildHelper();
            $Children = $ChildHelper->store_child();

            foreach ($Children as $child) {
                $PickupModal = new \Modal\Pickup;
                $row = $PickupModal->first(['ChildID' => $child->ChildID, 'Date' => $today, "AllChild" => 1]);

                if ($row) {
                    $PickupModal->delete($row->PickupID , "PickupID");
                }
            }
            echo json_encode(['success' => true, 'message' => '']);
        }

        public function deleteMeeting(){
            header('Content-Type: application/json');
            $requestData = json_decode(file_get_contents("php://input"), true);

            $session = new \Core\Session;
            $UserID = $session->get("USERID");
            $ParentModal = new \Modal\ParentUser;
            $MeetingModal = new \Modal\Meeting;

            $Parent = $ParentModal->first(["UserID" => $UserID]);
            $selectedmeeting = $MeetingModal->first(["ParentID" => $Parent->ParentID]);
            if($selectedmeeting){
                $MeetingModal->update(["MeetingID" => $selectedmeeting->MeetingID], ["ParentID" => NULL, "Scheduled" => false]);
            }

            echo json_encode(['success' => true, 'message' => '']);
        }

        private function store_meeting_times(){
            $session = new \Core\Session;
            $UserID = $session->get("USERID");
            $MeetingModal = new \Modal\Meeting;
            $ParentModal = new \Modal\ParentUser;

            $Parent = $ParentModal->first(["UserID" => $UserID]);
            $Meetings = $MeetingModal->where_norder(["Scheduled" => 0]);
            $Meeting = $MeetingModal->first(['ParentID' => $Parent->ParentID , "Scheduled" => 1]);
            if($Meeting){
                $Meetings[] = $Meeting;
                usort($Meetings, function ($a, $b) {
                    return strtotime($a->Time) - strtotime($b->Time);
                });
            }

            $data['Meetingslots'] = $Meetings;
            return $data;
        }

        public function handlemeetings(){
            $session = new \Core\Session;
            $UserID = $session->get("USERID");
            $ParentModal = new \Modal\ParentUser;
            $MeetingModal = new \Modal\Meeting;

            $Parent = $ParentModal->first(["UserID" => $UserID]);
            $selectedmeeting = $MeetingModal->first(["ParentID" => $Parent->ParentID]);
            if($selectedmeeting){
                $MeetingModal->update(["MeetingID" => $selectedmeeting->MeetingID], ["ParentID" => NULL, "Scheduled" => false]);
            }
            $MeetingModal->update(["MeetingID" => $_POST['meeting_slot']], ["ParentID" => $Parent->ParentID, "Scheduled" => true]);
            redirect("Parent/Home");
        }

        public function handlePickups(){

            $session = new \Core\Session;
            $ChildHelper = new ChildHelper();
            $PickupModal = new \Modal\Pickup;
            $Children = $ChildHelper->store_child();
            
            $today = new \DateTime();
            $today = $today->format("Y-m-d");
            $_POST['Person'] = $_POST['PersonType'];
            $_POST['AllChild'] = 1;
            $_POST['OTP'] = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            unset($_POST['PersonType']);
            unset($_POST['selectedPerson']);
            unset($_POST['inform']);

            $_POST['Date'] = $today;
            if(isset($_FILES['newPersonImage']) && ($_FILES['newPersonImage']['error'] === UPLOAD_ERR_OK) && ($_POST['Person'] == 'New') ){
                $imageFile = $_FILES['newPersonImage'];
                $imageType = mime_content_type($imageFile['tmp_name']);

                $imageBlob = file_get_contents($imageFile['tmp_name']);
                if ($imageBlob !== false) {
                    $_POST['Image'] = $imageBlob;
                    $_POST['ImageType'] = $imageType;
                } else {
                    $errors['Image'] = "Failed to read the image file.";
                }
            }

            foreach ($Children as $child) {
                $row = $PickupModal->first(['ChildID' => $child->ChildID, 'Date' => $today, "AllChild" => 1]);
                if ($row) {
                    $PickupModal->delete($row->PickupID , "PickupID");
                }
            }

            // show($_FILES);
            foreach ($Children as $Child){
                // show($_POST);
                $_POST['ChildID'] = $Child->ChildID;
                $AttendanceModal = new \Modal\Attendance;
                $attendanceRow = $AttendanceModal->first(["ChildID" => $Child->ChildID, "Status" => "Present"]);
                
                if ($attendanceRow) {
                    $PickupModal->insert($_POST);
                }
            }

            redirect('Parent/Home');
        }

        private function store_reminders() {
            $reminderModal = new \Modal\Reminder;
            $ChildHelper = new ChildHelper();
            $childrens = $ChildHelper->store_child();
        
            $data = [];
            $today = date('Y-m-d');
        
            foreach ($childrens as $child) {
                $reminders = $reminderModal->where_norder(["ChildID" => $child->ChildID, "Date" => $today]);
        
                if(!empty($reminders)) {
                    foreach ($reminders as &$reminder) {
                        $reminder->Name = $child->First_Name;
                    }
                    // Only merge if reminders is an array
                    if (is_array($reminders)) {
                        $data = array_merge($data, $reminders);
                    }
                }
            }
            return $data;
        }        
        
        private function store_attendance($ChildID) {        
            $today = new \DateTime();
            $todayFormatted = $today->format("Y-m-d");
        
            $monday = clone $today;
            $monday->modify('Monday this week');
            $mondayFormatted = $monday->format("Y-m-d");
        
            $AttendanceModal = new \modal\Attendance;
            
            $attendedDays = 0;
            $totalDays = 0;
        
            $currentDate = clone $monday;
            while ($currentDate <= $today) {
                $dateFormatted = $currentDate->format("Y-m-d");
                $attendance = $AttendanceModal->first(["ChildID" => $ChildID, "Start_Date" => $dateFormatted]);
        
                if ($attendance) {
                    // If the child stayed overnight and left after 08:00 AM next day
                    if ($attendance->End_Date && $attendance->End_Date > $dateFormatted && $attendance->End_Time > "08:00") {
                        $attendedDays += 2; // Count as two days
                    } else {
                        $attendedDays++;
                    }
                }
        
                $totalDays++;
                $currentDate->modify("+1 day");
            }
            $attendancePercentage = ($totalDays > 0) ? ($attendedDays / $totalDays) * 100 : 0;
        
            $data = round($attendancePercentage, 2);
            return $data;
        }

        private function store_child_details($children) {
            foreach ($children as &$child) {
                $AttendanceModal = new \Modal\Attendance;
                $row = $AttendanceModal->first(["ChildID" => $child['Id'], "Status" => 'Present']);
                
                if ($row) {
                    $child['Status'] = $row->Status; // Accessing as an object
                } else {
                    $child['Status'] = "Absent";
                }
        
                $reservationModal = new \Modal\Reservation;
                $reservations = $reservationModal->where_norder(["ChildID" => $child['Id']]);
        
                if (!empty($reservations)) {
                    $upcomingReservations = array_filter($reservations, function($reservation) {
                        $reservationDate = strtotime($reservation->Date); // Use object syntax
                        return $reservationDate >= strtotime(date('Y-m-d')); // Compare with today's date
                    });
        
                    // Find the closest upcoming reservation
                    if (!empty($upcomingReservations)) {
                        usort($upcomingReservations, function($a, $b) {
                            return strtotime($a->Date) - strtotime($b->Date); // Use object syntax
                        });
        
                        // Store the closest upcoming reservation date in the child array
                        $child['upcomingreservations'] = $upcomingReservations[0]->Date; // Use object syntax
                    }
                } else {
                    $child['upcomingreservations'] = 'No reservations';
                }

                $child['graph'] = $this->store_attendance($child['Id']);

                
                $ChildModal = new \Modal\Child;
                $Children = $ChildModal->first(["ChildID" => $child['Id']]);

                $CurrentDate = new \DateTime();
                $CurrentDate = $CurrentDate->format('Y-m-d');
                $CurrentTime = (new \DateTime())->format('H:i:s');

                $row = $AttendanceModal->first([
                    "ChildID" => $child['Id'], 
                    "Status" => 'Present', 
                    "Start_Date" => $CurrentDate
                ]);

                $validAgeGroups = ['2-3', '4-5', '6-7', '8-9', '10-11', '12-13', '14-15'];

                // Calculate the child's age at the start of the current year (January 1st)
                $dob = new \DateTime($Children->DOB); // Assuming $Child->DOB is a valid date string
                $currentYear = (new \DateTime())->format('Y');
                $startOfYear = new \DateTime("{$currentYear}-01-01");
        
                // Calculate the age as of January 1st of the current year
                $ageAtStartOfYear = $dob->diff($startOfYear)->y;
        
                // Map the age to the corresponding age group
                $AgeGroup = null; // Initialize with null in case no match is found
        
                foreach ($validAgeGroups as $group) {
                    [$minAge, $maxAge] = explode('-', $group);
        
                    if ($ageAtStartOfYear >= $minAge && $ageAtStartOfYear <= $maxAge) {
                        $AgeGroup = $group;
                        break;
                    }
                }

                if ($row) {
                    $AssignModal = new \Modal\AssignTeacher;
                    $ActivityModal = new \Modal\Activity;

                    // Get all subjects assigned for the child's age group today
                    $subjects = $AssignModal->where_order(["Agegroup" => $AgeGroup, "Date" => $CurrentDate]);

                    // Filter the activities to check if the current time is within Start_Time and End_Time
                    $currentActivity = array_filter($subjects, function ($subject) use ($CurrentTime) {
                        return $subject->Start_Time <= $CurrentTime && $subject->End_Time >= $CurrentTime;
                    });

                    // Get the first valid activity
                    $currentActivity = reset($currentActivity); // Ensures we get the first element safely

                    if ($currentActivity) {
                        // Fetch activity details using WorkID
                        $activityDetails = $ActivityModal->first(["WorkID" => $currentActivity->WorkID]);

                        $child['Activity'] = $currentActivity->Subject ?? "No Subject";
                        $child['Description'] = $activityDetails->Description ?? "No Description";
                    } else {
                        $child['Activity'] = "No ongoing activity";
                        $child['Description'] = "";
                    }
                } else {
                    $child['Activity'] = "Child not present";
                    $child['Description'] = "";
                }
            }
            return $children;
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