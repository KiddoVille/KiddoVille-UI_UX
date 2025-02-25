<?php

    namespace Controller;

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

            $data2['dates'] = $this->set_dates();
            $data = $data + $data2;

            // $data2 = $this->makereservation();
            // if(!empty($data2)){
            //     $data = $data + $data2;
            // }

            // $data2 = $this->editreservation();
            // if(!empty($data2)){
            //     $data = $data + $data2;
            // }

            $session->set("Location" , 'Child/Reservation');
            $this->view('Child/reservation', $data);
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
        
        public function Logout(){
            $session = new \core\Session();
            $session->logout();

            echo json_encode(["success" => true]);
            exit;
        }
    }
?>