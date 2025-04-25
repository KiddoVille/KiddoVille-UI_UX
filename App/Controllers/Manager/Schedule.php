<?php

namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class Schedule{
    use MainController;
    
    public function index() {
        // Get all maids from the database
        $maidModel = new \Modal\Maid;
        $maids = $maidModel->findAll();
        
        // Pass the maids data to the view
        $data['maids'] = $maids;
    
        // Get all teachers from the database
        $teacherModel = new \Modal\Teacher;
        $teachers = $teacherModel->findAll();   
        $data['teachers'] =  $teachers;  // Properly assign the teachers data
        
        // Pass data to the view
        $this->view('Manager/schedule/Schedule', $data);
    }

    
    public function addscheduleMaid(){
        $assignmaidmodel = new \Modal\Maidactivity;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'MaidID' => $_POST['MaidID'],
                'Date' => $_POST['Date'],
                'Activity' => $_POST['Activity']
            ];
            
            // Debugging output
            echo '<pre>';
            print_r($data);  // Check the data being passed
            echo '</pre>';
    
            if ($assignmaidmodel->validate($data)) {
                $result = $assignmaidmodel->insert($data);
                if ($result) {
                    echo "Schedule Added successfully";
                } else {
                    echo "Failed to add";
                }
            } else {
                echo "Validation failed.";
            }
        }
    }
    
    public function addscheduleforTeacher(){
        $assignteachermodel = new \Modal\AssignTeacher;
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'TeacherID' => $_POST['TeacherID'],
                'Date' => $_POST['Date'],
                'Activity' => $_POST['Activity'],
                'AgeGroup' => $_POST['AgeGroup'],
            ];
            
             // Debugging output
             echo '<pre>';
             print_r($data);  // Check the data being passed
             echo '</pre>';
            if($assignteachermodel->validate($data)){
                $result = $assignteachermodel->insert($data);
                if($result){
                    echo "Schedule Added successfully";
                }
                else{
                    echo "Failed to add";
                }
            }
        }
    }
}