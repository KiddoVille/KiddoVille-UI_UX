<?php

    namespace Controller;

    class Leaves{
        use MainController;


        public function index(){

        // $session = new \Core\Session;
        // $session->check_login();
        // $session->check_teacher();

        // $TeacherID = $session->get('TEACHERID');
      
        // if (!isset($_SESSION['teacher_id'])) {
        //     $this->view('Teacher/Leaves', ['message' => 'Please log in to view your leaves.']);
        //     return;
        // }
    
       
        //show($teacher_id);
        $leave = new \Modal\TeacherLeave;
        //$remleave = new \Modal\TeacherRem;
    
        // Fetch all leaves for the teacher
        // $leaves = $leave->where(['TeacherID'=>$teacher_id]);
    
        // // Fetch remaining leaves for the teacher
        // $remleaves = $remleave->where('TeacherID', $teacher_id);
        // show($leaves);
      
    
        // Check if any data exists and pass it to the view
        // if (!empty($leaves) || !empty($remleaves)) {
            
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

        // $session = new \Core\Session();
        // $data['TeacherID'] = $session->get('TEACHERID');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $arr = $_POST;
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
}
?>






















