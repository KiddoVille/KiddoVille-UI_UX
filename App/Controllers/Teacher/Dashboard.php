<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Dashboard{
        use MainController;

        public function index(){

           $TeacherID = $this->findID(); 

           $task = new \Modal\Task;
           $activity = new \Modal\Activity;
           $child = new \Modal\Child;
           $attend = new \Modal\Attendance;
           $teacher = new \Modal\Teacher;

           $result = [];

                  // Attendance for age groups
        // counting total children

            //getting teacher details
            $teacherDetails = $teacher->where_norder(['TeacherID' => $TeacherID]);
            $teacherDetails = $teacherDetails[0];
            $profilePic = $teacherDetails->Image;
            $base64Image = base64_encode($profilePic);

            $teacherInfo =[
                'TeacherID' => $teacherDetails->TeacherID,
                'First_Name' => $teacherDetails->First_Name,
                'Last_Name' => $teacherDetails->Last_Name,
                'Image' => 'data:image/jpg;base64,' . $base64Image
            ];
         
         
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'request'){
                
            $age = $_POST['value'];


            if($age != null){
                $todayTask = $task->where_norder(['Date' =>date('Y-m-d'),'TeacherID'=>$TeacherID, 'AgeGroup'=>$age]);
       
                if(!empty($todayTask)){
                   
        
                    foreach ($todayTask as $task) {
                        $row = $activity->where_norder(['WorkID'=>$task->WorkID]);
                       
                        if(!empty($row)){
                            $row = $row[0]; // Unwrap the first record
                            $row = (array)$row;
                            $row['Activity'] = $task->Activity;
                            $row['Start_Time'] = $task->Start_Time;
                            $row['End_Time'] = $task->End_Time;
                            $result[] = $row;  
                        }else{
                            $result[] = (array)$task; 
                        }
                         
                    }
                 
                    if(empty($result)){
                        $result = $todayTask;
                    }

              

                    header('Content-Type: application/json');
                    echo json_encode([
                        'tasks' => $result,
                        'message' => empty($result) ? 'No tasks found.' : ''
                    ]);
                    return;


                }else{
                    header('Content-Type: application/json');
                    echo json_encode([
                        'tasks' => [],
                        'message' => 'No tasks found for this age group.'
                    ]);
                    return;
                }
            } else{

                // If no age group is selected, fetch all tasks for today
                $result = $task->where_norder(['Date' =>date('Y-m-d'),'TeacherID'=>$TeacherID]);

                $result = $this->findTaskList($result);
                $result = (array)$result;

                if(!empty($result)){
                    header('Content-Type: application/json');
                    echo json_encode([
                        'tasks' => $result,
                        'message' => empty($result) ? 'No tasks found.' : ''
                    ]);
                    return;
                }else{
                    header('Content-Type: application/json');
                    echo json_encode([
                        'tasks' => [],
                        'message' => 'No tasks found for this age group.'
                    ]);
                    return;
                }
            }
       }
       
        // Fetch today's tasks
            $tasks = $task->where_norder(['Date' =>date('Y-m-d'),'TeacherID'=>$TeacherID]);
           
     
            if(!empty($tasks)){

                $taskList = $this->findTaskList($tasks);
        
                if (!empty($taskList)) {
                    $this->view('Teacher/Dashboard', 
                    ['tasks' => $taskList,
                    'message' => empty($taskList) ? 'No tasks created.' :'',
                    'teacherInfo' => $teacherInfo

                ]);
                } 

                
            }
            else{
                $this->view('Teacher/Dashboard', 
                ['tasks' => [],
                'message' => 'No tasks created.'
            ]);
            }

        // // Attendance for age groups
        // // counting total children

        // $children = $child->findall();

        //     if(!empty($children)){
        //         foreach ($children as $child) {
        //             $child->DOB = $this->agecalculate($child->DOB);
        //             var_dump($child->DOB);
        //             exit();
        //         }
            
        //     }
           
           
        }

      

        public function findTaskList($arr){
          
            $activity = new \Modal\Activity;
            $result = [];

          
            // Check if the array is empty
            foreach ($arr as $task) {
                $row = $activity->where_norder(['WorkID'=>$task->WorkID]);
               
                if(!empty($row)){
                    $row = $row[0]; // Unwrap the first record
                    $row = (array)$row;
                    $row['Activity'] = $task->Activity;
                    $row['Start_Time'] = $task->Start_Time;                        $row['End_Time'] = $task->End_Time;
                    $result[] = $row;    
                }else{
                    $result[] = (array)$task; 
                }
                 
            }
            // var_dump($result);
            // exit();
            if(empty($result)){
                $result = $arr;
            }
      
          
            return $result;
        }

        
        public function findID(){

            $teacher = new \Modal\Teacher;
            $session = new \Core\Session;
    
            $userID = $session->get('USERID'); 
    
            $row = $teacher->first(['UserID' => $userID]);
            $result = $row->TeacherID;
    
            return $result;
    
    
        }

        function agecalculate($dob) {
            $dobTimestamp = strtotime($dob);
            $currentTimestamp = time();
            $age = floor(($currentTimestamp - $dobTimestamp) / (60 * 60 * 24 * 365.25)); // leap years considered
            return $age;
        }

      
    }
?>



                         