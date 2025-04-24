<?php

    namespace Controller;

    class Leaves{
        use MainController;


        public function index(){
    
       
        $leave = new \Modal\TeacherLeave;
        $rem = new \Modal\TeacherRem;
        
        $TeacherID = $this->findID();
        
        //remaining leaves of the teacher in each type
        $remainings = $rem->where_norder(['TeacherID' => $TeacherID]);
        // var_dump($remainings);
        // exit;
        
        // all leaves of the teacher
        $leaves = $leave->where_norder(['TeacherID' => $TeacherID]);

            

        if (!empty($leaves)) {
            $this->view('Teacher/Leaves', ['leaves' => $leaves, 'remains' => $remainings]);
        } else {
            $this->view('Teacher/Leaves', ['message' => 'No leave records found for you.']);
        }
       
    }

    public function addLeave(){

        $leave = new \Modal\TeacherLeave;
        $rem = new \Modal\TeacherRem;
        $session = new \Core\Session;


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $arr = $_POST;
            $TeacherID = $this->findID();
            // var_dump($TeacherID,$arr);
            // exit();

            if (!$TeacherID) {
                // Redirect to login page if TeacherID is not found
                $this->view('Teacher/Leaves', ['message' => 'Please log in to request a leave.']);
                return;
            }
             $arr = array_merge($arr,['TeacherID' => $TeacherID]);
            
            // Validate form data
            $reuslt  = $leave->validate($arr);
            if ($reuslt) {

                //find the leave duraiton
                $arr['Duration'] = (strtotime($arr['End_Date']) -  strtotime($arr['Start_Date']))/ (60 * 60 * 24);;
            //       var_dump($arr);
            // exit();

                if($arr['Leave_Type'] == 'Annual Leave'){
                    $remainings = $rem->where_norder(['TeacherID' => $TeacherID, 'LeaveType' => $arr['Leave_Type']]);
                    $remains = (int)$remainings[0]->Remaining;

                    if($remains > 0 &&  $arr['Duration'] <=2){
                        $arr['Status'] = 'Approved';
                            
                        
                    }else if($arr['Duration'] > 2 && $remains > 0){
                        $arr['Status'] = 'Pending';
                    }else if($remains === 0){
                        $arr['Status'] = 'Rejected';
                    }
                    // var_dump($arr);
                    // exit();
                }else if($arr['Leave_Type'] == 'Sick Leave'){
                    $remainings = $rem->where_norder(['TeacherID' => $TeacherID, 'LeaveType' => $arr['Leave_Type']]);
                    $remains = (int)$remainings[0]->Remaining;

                    if($remains > 0 &&  $arr['Duration'] <=1){
                        $arr['Status'] = 'Approved';
                    }else if($arr['Duration'] > 1 && $remains > 0){
                        $arr['Status'] = 'Pending';
                    }else if($remains === 0){
                        $arr['Status'] = 'Pending';
                    }
                    // var_dump($arr);
                    // exit();

                }else if($arr['Leave_Type'] == 'Compassionate Leave'){
                    $remainings = $rem->where_norder(['TeacherID' => $TeacherID, 'LeaveType' => $arr['Leave_Type']]);
                    $remains = (int)$remainings[0]->Remaining;
                    if($remains > 0){
                        $arr['Status'] = 'Pending';
                    }else{
                        $arr['Status'] = 'Rejected';
                    }
                    
                }

                // var_dump($arr);
                //     exit();

                // Insert data
                if (!($leave->insert($arr))) {
                    // var_dump($arr);
                    //  exit();
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

    public function editLeave(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $leave = new \Modal\TeacherLeave;

            $arr = $_POST;
            if(!empty($arr)){

                $valid  = $leave->validate($arr);
                if(empty($valid)){
                    $id = [
                        'LeaveID' => $arr['LeaveID']
                    ];
                    $data = [
                        'Leave_Type'=> $arr['Leave_Type'],
                        'Start_Date' => $arr['Start_Date'],
                        'End_Date' => $arr['End_Date'],
                        'Description' => $arr['Description']
                    ];
                    //update the record
                    $result = $leave->update($id,$data);
                    if($result){
                        redirect('Teacher/Leaves');
                    }else{
                        $this->view('Teacher/Leaves',['message' => 'Faild to Update 1']);
                    }
                }else{
                    $this->view('Teacher/Leaves', ['errors' => $leave->errors]);
                }
               
            }else{
                $this->view('Teacher/Leaves',['message' => 'Faild to Update 2']);
            }
        }
        // var_dump($_POST);
        // exit();
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






















