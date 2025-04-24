<?php

namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class Schedule{
    use MainController;
    
    public function index(){
        // Get all teachers from the database
        $teacherModel = new \Modal\Teacher;
        $teachers = $teacherModel->findAll();
        
        // Pass the teachers data to the view
        $data['teachers'] = $teachers;
        
        $this->view('Manager/schedule/Schedule', $data);
    }



    public function addscheduleMaid(){
        $assignmaidmodel = new \Modal\AssignMaid;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'MaidID' => $_POST['MaidID'],
                'Date' => $_POST['Date'],
                'Start_Time' => $_POST['Start_Time'],
                'End_Time' => $_POST['End_Time'],
                'AgeGroup' => $_POST['AgeGroup'],
                'Activity' => $_POST['Activity']
            ];
            
            if($assignmaidmodel->validate($data)){
                $result = $assignmaidmodel->insert($data);
                if($result){
                    echo "Schedule Added successfully";
                }
                else{
                    echo "Failed to add";
                }
            }
        }
    }





    
    public function addscheduleforTeacher(){
        $assignteachermodel = new \Modal\AssignTeacher;
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'TeacherID' => $_POST['TeacherID'],
                'Date' => $_POST['Date'],
                'Start_Time' => $_POST['Start_Time'],
                'End_Time' => $_POST['End_Time'],
                'AgeGroup' => $_POST['AgeGroup'],
                'Activity' => $_POST['Activity']
            ];
            
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