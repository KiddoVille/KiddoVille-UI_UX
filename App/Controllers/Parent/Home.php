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
            $session->set("Location" , 'Parent/Home');

            $this->view('Parent/home',$data);
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