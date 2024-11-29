<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Reservation{
        use MainController;
        public function index(){

            $session = new \Core\Session;
            $session->check_login();

            $parentname = $session->get('USERNAME');
            $child = new \Modal\Child;
            $children = $child->where_norder(['Parent_Name' => $parentname]);
            $parent = new \Modal\ParentUser;
            $pre = $parent->where_norder(['Username' => $parentname]);
    
            // Prepare data for all children
            $data = $this->store($children, $pre);

            $data = $data + $this->store_reservations($children);

            $data = $data + $this->set_stats($data['upcoming']);

            $data2['dates'] = $this->set_dates();
            $data = $data + $data2;

            $data2 = $this->makereservation($children);
            if(!empty($data2)){
                $data = $data + $data2; 
            }

            $this->view('Parent/reservation', $data);
        }

        private function makereservation($children) {
            $requiredFields = ['Date', 'Start_Time', 'End_Time'];
            
            // Initialize an array to hold the form values
            $data['values']['Date'] = $_POST['Date'] ?? '';
            $data['values']['Start_Time'] = $_POST['Start_Time'] ?? '';
            $data['values']['End_Time'] = $_POST['End_Time'] ?? '';
            $data['values']['Notes'] = $_POST['Notes'] ?? '';
            
            // Check if all required fields are filled in
            if (checkRequiredFields($requiredFields, $_POST) && isset($_POST['makereservation']) && $_POST['makereservation'] == 'new-reservation') {
                
                // Validate Date - must be after today + 2 days
                $today = new \DateTime();
                $today->modify('+2 days');
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
                
                // Validate End Time - must be between 8:00 AM and 8:00 PM, and after the start time
                $endTime = $_POST['End_Time'];
                if ($endTime < '08:00' || $endTime > '20:00') {
                    $data['errors']['End_Time'] = 'Not a valid time';
                    $data['values']['End_Time'] = '';
                    $data['displayModal'] = true;
                    $data['Entered'] = true;
                }
        
                // Check 4-hour minimum difference between Start and End Time
                $startTimeObj = new \DateTime($startTime);
                $endTimeObj = new \DateTime($endTime);
                $minEndTime = (clone $startTimeObj)->modify('+4 hours'); // Minimum End Time, 4 hours after Start Time
                
                if ($endTimeObj < $minEndTime) {
                    // If the end time is too early, set it to the minimum allowed end time
                    $data['errors']['Time'] = 'End time must be at least 4 hours after start time.';
                    $data['values']['End_Time'] = $minEndTime->format('H:i'); // Set end time to 4 hours after start
                    $endTimeObj = $minEndTime;
                    $data['displayModal'] = true;
                    $data['Entered'] = true;
                }
        
                // Check if Start Time is within allowable range for an End Time of 8:00 PM
                if ($endTime == '20:00' && $startTime > '16:00') {
                    $data['errors']['Start_Time'] = 'With an 8:00 PM end time, the latest start time allowed is 4:00 PM.';
                    $data['values']['Start_Time'] = '16:00'; // Automatically adjust start time to the latest allowed
                    $startTimeObj = new \DateTime('16:00');
                    $data['displayModal'] = true;
                    $data['Entered'] = true;
                }
                
                // Final validation before saving
                if (!empty($data['errors'])) {
                    return $data;
                }
        
                // Proceed with saving if no errors
                $_POST['Start_Time'] = $startTimeObj->format('H:i');
                $_POST['End_Time'] = $endTimeObj->format('H:i');
                
                $res = new \Modal\Reservation;
                $_SESSION['success'] = true;
                foreach($children as $child){
                    $_POST['Child_Id'] = $child->Child_Id;
                    show($_POST);
                    $res->insert($_POST);
                }
                $data['displayModal'] = false;
                redirect('Parent\Reservation');
            
            } else {
                $data['errors'] = 'Please fill in all required fields.';
                return $data;
            }
        }             

        private function set_dates(){
            $today = new \DateTime();
            // Start from the day after tomorrow
            $today->modify('+2 days');
        
            // Generate the next 7 days
            $dates = [];
            for ($i = 0; $i < 7; $i++) {
                $dates[] = [
                    'dayName' => $today->format('D'),  // Day of the week (e.g., Mon, Tue)
                    'day' => $today->format('d')       // Day of the month (e.g., 14)
                ];
                $today->modify('+1 day'); // Move to the next day
            }
        
            return $dates;  // Return the dates array
        }

        private function set_stats($reservations){
            $data = [
                'Approved' => 0,
                'Pending' => 0,
                'Canceled' => 0,
            ];
            foreach ($reservations as $reservation) {
                if($reservation['reservation']->Status === "Approved"){
                    $data["Approved"] += 1;
                }
                if($reservation['reservation']->Status === "Pending"){
                    $data["Pending"] += 1;
                }
                if($reservation['reservation']->Status === "Canceled"){
                    $data["Canceled"] += 1;
                }
            };

            return $data;
        }

        private function store_reservations($childrens) {
            $res = new \Modal\Reservation;
            $reservations = [];
            
            // Collect reservations for all children
            foreach ($childrens as $child) {
                $childReservations = $res->where_norder(['Child_Id' => $child->Child_Id]);
        
                // If childReservations is not empty, process it
                if (!empty($childReservations)) {
                    foreach ($childReservations as $reservation) {
                        // Add the First_Name of the child to each reservation
                        $reservation->First_Name = $child->First_Name;
                    }
                    
                    // Merge only non-empty child reservations
                    $reservations = array_merge($reservations, $childReservations);
                }
            }
        
            // Define "yesterday" as a DateTime object
            $yesterday = new \DateTime('yesterday');
        
            $data = [
                'upcoming' => [],
                'history' => [],
            ];
        
            // Process the reservations if available
            if (!empty($reservations)) {
                foreach ($reservations as $reservation) {
                    // Convert reservation date to DateTime for comparison
                    $reservationDate = new \DateTime($reservation->Date);
        
                    // Store the reservation in the correct category based on the date
                    if ($reservationDate > $yesterday) {
                        // Store in upcoming reservations
                        $data['upcoming'][] = [
                            'First_Name' => $reservation->First_Name,  // Include the First_Name
                            'reservation' => $reservation,  // Include the reservation data
                        ];
                    } else {
                        // Store in history reservations
                        $data['history'][] = [
                            'First_Name' => $reservation->First_Name,  // Include the First_Name
                            'reservation' => $reservation,  // Include the reservation data
                        ];
                    }
                }
            }
        
            // Return the categorized reservations along with the First_Name
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
    }
?>