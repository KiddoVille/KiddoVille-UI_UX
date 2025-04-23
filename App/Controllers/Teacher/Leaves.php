<?php

    namespace Controller;

    class Leaves{
        use MainController;


        public function index(){
    
       
        $leave = new \Modal\TeacherLeave;
       
       
            
        $leaves = $leave->findall();

        if (!empty($leaves)) {
            $this->view('Teacher/Leaves', ['leaves' => $leaves]);
        } else {
            $this->view('Teacher/Leaves', ['message' => 'No leave records found for you.']);
        }
        //     $this->view('Teacher/Leaves', ['leaves' => $leaves, 'remleaves' => $remleaves]);
        // } else {
        //     $this->view('Teacher/Leaves', ['message' => 'No leave records found for you.']);
        // }
    }

    public function addLeave(){
        $leave = new \Modal\TeacherLeave;
        $session = new \Core\Session;


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $arr = $_POST;
            $TeacherID = $this->findID();

            if (!$TeacherID) {
                // Redirect to login page if TeacherID is not found
                $this->view('Teacher/Leaves', ['message' => 'Please log in to request a leave.']);
                return;
            }
            // $arr = array_merge($arr, $data);
            // Validate form data
            if ($leave->validate($arr)) {

                // Insert data
                if (!($leave->insert($arr))) {
                    redirect('Teacher/Leaves');
                } else {
                    $this->view('Teacher/Leaves', ['message' => 'Failed to add leave. Please try again.']);
                }
              
            } else {
                // Show validation errors
                $this->view('Teacher/Leaves', ['errors' => $leave->errors]);
            }
            
        } else {
            $this->view('Teacher/Leaves');
        }
        
    }


    public function findID(){

        $teacher = new \Modal\Teacher;
        $session = new \Core\Session;

        $userID = $session->get('USERID'); 

        $row = $teacher->first(['UserID' => $userID]);
        $result = $row->TeacherID;

        return $result;


    }
}


?>






















