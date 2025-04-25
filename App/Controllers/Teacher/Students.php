<?php

namespace Controller;

class Students {
    use MainController;

    public function index() {
        $student = new \Modal\Child;

        // ✨ Handle AJAX POST request (search or fetch all)
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'SearchRecord') {
            $stu_name = $_POST['stu_name'] ?? '';
            $stu_name = htmlspecialchars($stu_name, ENT_QUOTES, 'UTF-8');

            if (!empty($stu_name)) {
                $query = "SELECT * FROM child WHERE First_Name LIKE '%$stu_name%' OR Last_Name LIKE '%$stu_name%'";
                $result = $student->query($query);
            } else {
                // If search is empty, get all students
                $result = $student->findAll();
            }

            // Format and respond with JSON
            if (is_array($result)) {
                foreach ($result as $stud) {
                    $stud->DOB = $this->agecalculate($stud->DOB);
                    $year = date('y', strtotime($stud->EnrollDate));
                    $stud->ChildID = "KV".$year.str_pad($stud->ChildID, 4, '0', STR_PAD_LEFT);
                   
                    if (!empty($stud->Image)) {
                        $stud->Image = base64_encode($stud->Image);
                        
                    }
                }
                //formatting the Reg No
                foreach ($result as $item) {
                   
                }

                header('Content-Type: application/json');
                echo json_encode([
                    'students' => array_map(fn($student) => (array)$student, $result),
                    'message' => empty($result) ? 'No students found.' : ''
                ]);
            } else {
                header('Content-Type: application/json');
                echo json_encode([
                    'students' => [],
                    'message' => 'No students found.'
                ]);
            }
            exit();
        }

        // 🌼 If not AJAX, render full page with all students
        $students = $student->findAll();

        foreach ($students as $stud) {
            $stud->DOB = $this->agecalculate($stud->DOB);
        }

        $this->view('Teacher/Students', [
            'students' => $students,
            'message' => empty($students) ? 'No students found.' : ''
        ]);
    }

    function agecalculate($dob) {
        $dobTimestamp = strtotime($dob);
        $currentTimestamp = time();
        $age = floor(($currentTimestamp - $dobTimestamp) / (60 * 60 * 24 * 365.25)); // leap years considered
        return $age;
    }

    public function addSkill(){
       
        $observe = new \Modal\Observation;
        $score = new \Modal\SkillScore;

        $TeacherID = $this->findID(); 
        $observeArray = [];
        $today = date('Y-m-d');

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $arr = $_POST;
            // var_dump($arr);
            // exit();
            
            $stu_id = $arr['ChildID'];

            //removing the text in the stuID
            $stu_id = htmlspecialchars($stu_id, ENT_QUOTES, 'UTF-8');
            $stu_id = ltrim(substr($stu_id, 4),"0");
            $arr['ChildID'] = $stu_id;

            $teacher['TeacherID'] = $TeacherID;
            $arr = array_merge($teacher, $arr);
            // var_dump($arr);
            // exit();

            //observation table array
            $observeArray['StudentID'] = $arr['ChildID'];
            $observeArray['TeacherID'] = $arr['TeacherID'];
            $observeArray['Scored_Date'] = $today;

            if($observe->validate($arr)){
                // var_dump($arr);
                // exit();
                //insert an observation
                $observe->insert($observeArray);
                $result = $observe->where_norder(['StudentID' =>$arr['ChildID'], 'TeacherID' => $arr['TeacherID'], 'Scored_Date'=> $today]);
                
                //   var_dump($result);
                // exit();
                //insert skill score
                $this->skillScore(end($result)->id,array_slice($arr,2));
                redirect('Teacher/Students');
            } else{
                $this->view('Teacher/Students', ['errors' => $observe->errors]);
            }

            
            

            

            
           
        }

    }

    public function skillScore($ID,$array){

        $skill = new \Modal\Skill;
        $score = new \Modal\SkillScore;

        $observeID = $ID;
        $skillArray = $array;
        // var_dump($skillArray,$observeID);
        // exit();

        foreach ($skillArray as $key => $value) {

            $scoreArray = [];
            $scoreArray['ObservationID'] = $observeID;
            // var_dump($skillArray);
            // exit();
            $skillName = $skill->where_norder(['Skill_Name' => $key]);
           
            $skillID = $skillName[0]->SkillId;
            $scoreArray['SkillID'] = $skillID;
            $scoreArray['Score'] = $value;

            $score->insert($scoreArray);
            
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
