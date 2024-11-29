<?php

    namespace Controller;

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

            $data2['dates'] = $this->set_dates();
            $data = $data + $data2;

            $data2 = $this->makereservation();
            if(!empty($data2)){
                $data = $data + $data2;
            }

            $data2 = $this->editreservation();
            if(!empty($data2)){
                $data = $data + $data2;
            }

            $this->view('Child/reservation', $data);
        }

        private function Get_Reservation($Res_Id){
            $data = [];
            $reservation = new \Modal\Reservation;
            $result = $reservation->first(["Res_Id" => $Res_Id]);

            if($result){
                $data['edit']['Res_Id'] = $result->Res_Id; 
                $data['edit']['Date'] = $result->Date ?? '';
                $data['edit']['Start_Time'] = $result->Start_Time ?? '';
                $data['edit']['End_Time'] = $result->End_Time ?? '';
                $data['edit']['Notes'] = $result->Notes ?? '';
            }
            return $data;
        }

        private function makereservation() {
            $requiredFields = ['Date', 'Start_Time', 'End_Time'];
        
            $data['values'] = [];
        
            // Initialize form values
            $data['values']['Date'] = $_POST['Date'] ?? '';
            $data['values']['Start_Time'] = $_POST['Start_Time'] ?? '';
            $data['values']['End_Time'] = $_POST['End_Time'] ?? '';
            $data['values']['Notes'] = $_POST['Notes'] ?? '';  // Ensure Notes is set if provided
        
            // Check if all required fields are filled in
            if (checkRequiredFields($requiredFields, $_POST) && isset($_POST['makereservation']) && $_POST['makereservation'] == 'new-reservation') {
        
                // Initialize error array
                $data['errors'] = [];
                $data['displayModal'] = false;
        
                // Validate Date - must be after today + 2 days
                $today = new \DateTime();
                $today->modify('+1 days');
                $date = new \DateTime($_POST['Date']);
                
                // if ($date < $today) {
                //     $data['errors']['Date'] = 'Not a valid date';
                //     $data['values']['Date'] = '';
                //     $data['displayModal'] = true;
                //     $data['Entered'] = true;
                // }
        
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
        
                // Proceed with saving if no errors
                $_POST['Child_Id'] = $_SESSION['CHILD_ID'];    
                $res = new \Modal\Reservation;
                $_SESSION['success'] = false;
                if ($data['displayModal'] === false) {
                    $res->insert($_POST);
                    $_SESSION['success'] = true;
                    redirect('Child\Reservation');
                }
                return $data;
        
            } else {
                $data['errors'] = 'Please fill in all required fields.';
                $_SESSION['success'] = false;
                $data['displayModal'] = false;
                return $data;
            }
        }             

        private function editreservation() {
            $requiredFields = ['Res_Id','Date', 'Start_Time', 'End_Time'];
            
            // Initialize an array to hold the form values
            $data['editvalues']['Date'] = $_POST['Date'] ?? '';
            $data['editvalues']['Start_Time'] = $_POST['Start_Time'] ?? '';
            $data['editvalues']['End_Time'] = $_POST['End_Time'] ?? '';
            $data['editvalues']['Notes'] = $_POST['Notes'] ?? '';
            
            // Check if all required fields are filled in
            if (checkRequiredFields($requiredFields, $_POST) && isset($_POST['editreservation']) && $_POST['editreservation'] == 'edited-reservation') {

                $data['editerrors'] = [];
                $data['editdisplayModal'] = false;
                // Validate Date - must be after today + 1 days
                $today = new \DateTime();
                $today->modify('+1 days');
                $date = new \DateTime($_POST['Date']);
                
                if ($date < $today) {
                    $data['editerrors']['Date'] = 'Not a valid date';
                    $data['editdisplayModal'] = true;
                    $data['editEntered'] = true;
                }
                
                // Validate Start Time - must be between 8:00 AM and 8:00 PM
                $startTime = $_POST['Start_Time'];
                if ($startTime < '08:00' || $startTime > '20:00') {
                    $data['editerrors']['Start_Time'] = 'Not a valid time';
                    $data['editvalues']['Start_Time'] = '';
                    $data['editdisplayModal'] = true;
                    $date['editEntered'] = true;
                }
                
                // Validate End Time - must be between 8:00 AM and 8:00 PM, and after the start time
                $endTime = $_POST['End_Time'];
                if ($endTime < '08:00' || $endTime > '20:00') {
                    $data['editerrors']['End_Time'] = 'Not a valid time';
                    $data['editvalues']['End_Time'] = '';
                    $data['editdisplayModal'] = true;
                    $data['editEntered'] = true;
                }
        
                // Check 4-hour minimum difference between Start and End Time
                $startTimeObj = new \DateTime($startTime);
                $endTimeObj = new \DateTime($endTime);
        
                // Check if Start Time is less than End Time
                if ($startTimeObj >= $endTimeObj) {
                    $data['editerrors']['Time'] = 'Start time must be earlier than end time.';
                    $data['editvalues']['End_Time'] = ''; // Clear invalid end time
                    $data['editdisplayModal'] = true;
                    $data['editEntered'] = true;
                } else {
                    // Check for at least 4-hour gap
                    $minEndTime = (clone $startTimeObj)->modify('+4 hours');
                    if ($endTimeObj < $minEndTime) {
                        $data['editerrors']['Time'] = 'There must be at least a 4-hour gap between start and end time.';
                        $data['editvalues']['End_Time'] = $minEndTime->format('H:i'); // Suggest a valid end time
                        $data['editvalues']['Start_Time'] = $startTime; // Ensure Start_Time remains valid
                        $data['editdisplayModal'] = true;
                        $data['editEntered'] = true;
                    }
                }
        
                // Proceed with saving if no errors
                $_POST['Child_Id'] = $_SESSION['CHILD_ID'];
                $_POST['Start_Time'] = $startTimeObj->format('H:i');
                $_POST['End_Time'] = $endTimeObj->format('H:i');
                
                $res = new \Modal\Reservation;
                $_SESSION['success'] = false;
                $Res_Id = $_POST['Res_Id'];
                unset($_POST['Res_Id']);
                unset($_POST['Child_Id']);
                if($data['editdisplayModal'] === false){
                    $res->update(['Res_Id' => $Res_Id], $_POST);
                    $_SESSION['success'] = true;
                    redirect('Child\Reservation');
                }
            
            } else {
                $data['editerrors'] = 'Please fill in all required fields.';
                $data['editdisplayModal'] = false;
                $_SESSION['success'] = false;
            }
            return $data;
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
            header('Content-Type: application/json');
            
            $response = [];
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Check if Res_Id is provided
                if (isset($_POST['Res_Id'])) {
                    $Res_Id = $_POST['Res_Id'];
                
                    $reservation = new \Modal\Reservation;
                    
                    // Query the reservation by Res_Id
                    $res = $reservation->first(["Res_Id"=>$Res_Id]);
                    
                    if ($res) {
                        // Reservation found, return the reservation details
                        $response = [
                            'success' => true,
                            'message' => "Reservation details fetched successfully",
                            'data' => [
                                'Res_Id' => $res->Res_Id,       // Res_Id
                                'Date' => $res->Date,           // Date
                                'Start_Time' => $res->Start_Time, // Start Time
                                'End_Time' => $res->End_Time,   // End Time
                                'Notes' => $res->Notes          // Notes (null if no notes)
                            ]
                        ];
                    } else {
                        // Reservation not found
                        $response = [
                            'success' => false,
                            'message' => "Reservation ID $Res_Id not found"
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

        public function GetviewReservation() {
            header('Content-Type: application/json');
            
            $response = [];
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Check if Res_Id is provided
                if (isset($_POST['Res_Id'])) {
                    $Res_Id = $_POST['Res_Id'];
                    
                    $reservation = new \Modal\Reservation;
                    $res = $reservation->first(["Res_Id"=>$Res_Id]);
                    
                    if ($res) {
                        // Reservation found, return the reservation details
                        $response = [
                            'success' => true,
                            'message' => "Reservation details fetched successfully",
                            'data' => [
                                'Status' => $res->Status,
                                'Res_Id' => $res->Res_Id,       // Res_Id
                                'Date' => $res->Date,           // Date
                                'Start_Time' => $res->Start_Time, // Start Time
                                'End_Time' => $res->End_Time,   // End Time
                                'Notes' => $res->Notes          // Notes (null if no notes)
                            ]
                        ];
                    } else {
                        // Reservation not found
                        $response = [
                            'success' => false,
                            'message' => "Reservation ID $Res_Id not found"
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
        
    }
?>