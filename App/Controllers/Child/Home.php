<?php

namespace Controller;

use App\Helpers\SidebarHelper;

defined('ROOTPATH') or exit('Access denied');

class Home
{
    use MainController;

    public function index()
    {
        $session = new \Core\Session;
        $session->check_login();
        $session->check_child();
        $ChildID = $session->get("CHILDID");
        $session->set("CHILDID", $ChildID);

        $data = [];
        $SidebarHelper = new SidebarHelper();
        $data = $SidebarHelper->store_sidebar();

        $ChildModal = new \Modal\Child;
        $select = $ChildModal->first(['ChildID' => $ChildID]);
        $data['child_id'] = $ChildID;

        if (!empty($select)) {
            $data2 = $this->selectedchild($select);
            $data = $data + $data2;
        }

        $data = $data + $this->store_attendance();
        $data = $data + $this->store_stats();

        $session->set("Location" , 'Child/Home');
        $this->view('Child/home', $data);
    }

    private function store_stats(){

        $today = new \DateTime();
        $today = $today->format("Y-m-d");
        $session = new \Core\Session;
        $childattended = false;
        $hasPickup = false;
        $ChildID = $session->get("CHILDID");
        
        $AttendanceModal = new \Modal\Attendance;
        $attendanceRow = $AttendanceModal->first(["ChildID" => $ChildID, "Status" => "Present"]);
            
        if ($attendanceRow) {
            $childattended = true;
        }
        
        $PickupModal = new \Modal\Pickup;
        $row = $PickupModal->first(['ChildID' => $ChildID, 'Date' => $today, "AllChild" => 0]);
            
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
        }
        
        if (!$childattended) {
            $stats['stat2'] = [
                'nochild' => 'child not attended'
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

        return $stats;
    }

    public function deletePickup(){
        header('Content-Type: application/json');
        $requestData = json_decode(file_get_contents("php://input"), true);

        $today = new \DateTime();
        $today = $today->format("Y-m-d");
        $session = new \Core\Session;
        $ChildID = $session->get("CHILDID");

        $PickupModal = new \Modal\Pickup;
        $row = $PickupModal->first(['ChildID' => $ChildID, 'Date' => $today, "AllChild" => 0]);

        if ($row) {
            $PickupModal->delete($row->PickupID , "PickupID");
        }
        echo json_encode(['success' => true, 'message' => '']);
    }

    public function handlePickups(){

        $session = new \Core\Session;
        $PickupModal = new \Modal\Pickup;
        $ChildID = $session->get("CHILDID");
        
        $today = new \DateTime();
        $today = $today->format("Y-m-d");
        $_POST['Person'] = $_POST['PersonType'];
        $_POST['AllChild'] = 0;
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

        $row = $PickupModal->first(['ChildID' => $ChildID, 'Date' => $today, "AllChild" => 0]);
        if ($row) {
            $PickupModal->delete($row->PickupID , "PickupID");
        }

        // show($_POST);
        $_POST['ChildID'] = $ChildID;
        $AttendanceModal = new \Modal\Attendance;
        $attendanceRow = $AttendanceModal->first(["ChildID" => $ChildID, "Status" => "Present"]);
        
        if ($attendanceRow) {
            $PickupModal->insert($_POST);
        }

        redirect('Child/Home');
    }


    private function store_attendance() {
        $session = new \core\session;
        $ChildID = $session->get("CHILDID");
    
        $today = new \DateTime();
        $todayFormatted = $today->format("Y-m-d");
    
        // Get Monday of the current week
        $monday = clone $today;
        $monday->modify('Monday this week');
        $mondayFormatted = $monday->format("Y-m-d");
    
        $AttendanceModal = new \modal\Attendance;
        
        $attendedDays = 0;
        $totalDays = 0;
    
        // Loop from Monday to today
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
    
        $data['graph'] = round($attendancePercentage, 2);
        return $data;
    }    

    private function selectedchild($selectedchild)
    {
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

    public function store_schedule()
    {
        header('Content-Type: application/json');
        $requestData = json_decode(file_get_contents("php://input"), true);

        $date = $requestData['date'] ?? date('Y-m-d');
        if ($date === null) {
            $date = date('Y-m-d');
        }

        $session = new \core\session;
        $ChildID = $session->get("CHILDID");

        $ChildModal = new \Modal\Child;
        $AssignModal = new \Modal\AssignTeacher;
        $ActivityModal = new \Modal\Activity;

        $Child = $ChildModal->first(["ChildID" => $ChildID]);
        $validAgeGroups = ['2-3', '4-5', '6-7', '8-9', '10-11', '12-13', '14-15'];

        // Calculate the child's age at the start of the current year (January 1st)
        $dob = new \DateTime($Child->DOB); // Assuming $Child->DOB is a valid date string
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
        
        $subjects = $AssignModal->where_order(["Agegroup" => $AgeGroup, "Date" => $date], [] , 'Start_Time');
        foreach ($subjects as $subject) {
            if (empty($subject->End_Time)) {
                $startTime = new \DateTime($subject->Start_Time);
                $startTime->modify('+1 hour');
                $subject->End_Time = $startTime->format('H:i:s');
            }
        }

        $dinnerRow = new \stdClass(); // Create a new stdClass object for Dinner
        $dinnerRow->Start_Time = '13:00:00';
        $dinnerRow->End_Time = '14:00:00';
        $dinnerRow->Activity = 'Dinner';

        $inserted = false; // Track if the dinner row has been inserted
        foreach ($subjects as $key => $subject) {
            if (new \DateTime($dinnerRow->Start_Time) < new \DateTime($subject->Start_Time)) {
                array_splice($subjects, $key, 0, [$dinnerRow]); // Insert Dinner row before this subject
                $inserted = true;
                break;
            }
        }

        foreach ($subjects as $subject) {
            if (!empty($subject->WorkID)){
                $Activity = $ActivityModal->first(["WorkID" => $subject->WorkID]);
                if ($Activity) { // Ensure $Activity is not null // Append $Activity to the 'Activity' array
                    $subject->Description = $Activity->Description; // Set the Description
                } else {
                    $subject->Description = 'No Description Available';
                }
            }
        }

        if (!$inserted) {
            $subjects[] = $dinnerRow;
        }

        if (empty($subjects)) {
            echo json_encode(['success' => false, 'message' => 'No attendance records found for the selected filters']);
        } else {
            echo json_encode(['success' => true, 'data' => $subjects]);
        }

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
}
