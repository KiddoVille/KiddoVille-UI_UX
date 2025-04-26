<?php

namespace Controller;
use App\Helpers\ManagerHelper;

defined('ROOTPATH') or exit('Access denied');

class Schedule{
    use MainController;
    
    public function index() {
        $Helper = new ManagerHelper;
        $Helper->Check_Manager();
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
            // $data = [
            //     'Date' => $_POST['Date'],
            //     'Activity' => $_POST['Activity']
            // ];

            $success = true;
            foreach ($_POST['Activity'] as $key => $value) {
                $data = [
                    'Date' => $_POST['Date'],
                    'Activity' => $value,
                ];
                show($data);
                $result = $assignmaidmodel->insert($data);
                if (!$result && $assignmaidmodel->validate($data)) {
                    $success = false;
                    break; // Exit the loop if any insert fails
                }
            }
        }
    }
    
    public function getTeacher(){
        header('Content-Type: application/json');
        $requestData = json_decode(file_get_contents("php://input"), true);
        $Subject = $requestData['Subject'];

        $teacherModel = new \Modal\Teacher;
        $Teacher = $teacherModel->where_norder(["Subject" => $Subject]); 

        $AssignTeacherModal = new \Modal\AssignTeacher;

        $ExistTeacher = [];
        if(!empty($Teacher)){
            foreach ($Teacher as $teach) {
                $Exist = $AssignTeacherModal->first(["TeacherID" => $teach->TeacherID, "Date" => date("Y-m-d", strtotime("tomorrow")) ]);
                if(empty($Exist)) {
                    $ExistTeacher[] = $teach;
                }
            }
        }
        
        if (empty($ExistTeacher)) {
            echo json_encode(['success' => true, 'data' => 'No teacher found for this subject']);
            return;
        }else{
            echo json_encode(['success' => true, 'data' => $ExistTeacher]);
            return;
        }
    }

    public function addscheduleforTeacher(){
        $assignteachermodel = new \Modal\AssignTeacher;
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'TeacherID' => $_POST['TeacherID'],
                'Date' => $_POST['Date'],
                'Activity' => $_POST['Activity'][1],
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