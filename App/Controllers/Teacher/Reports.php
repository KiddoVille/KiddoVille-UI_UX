<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Reports{
        use MainController;

        public function index(){

            $child = new \Modal\Child;
            $report =  new \Modal\Report;
  
            //getting reports from report table
            $reports = $report->findall();

            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'request'){
                // var_dump($_POST);
                // exit();
                error_log("🔥 Reached the index function");
                error_log("Received POST: " . print_r($_POST, true));

                $ageGroup = $_POST['value'];
                 
                $completed = [];
                $pending = [];

                if (empty($reports)) {
                    echo json_encode(['message' => 'No reports found']);
                    exit;
                }

                  
                foreach ($reports as $report) {
        
                        $result = $child->where_norder(['ChildID' => $report->StudentID]);
                        if (empty($result)) continue;
             
                        $student = $result[0];
                        $age = $this->agecalculate($student->DOB);
                        $student->DOB = $age;
                        $match = false;

                        if($ageGroup == '10-13'){
                            if($student->DOB >= 6 && $student->DOB <= 9){
                                if($report->Status == 'completed'){
                                    $completed[] = $student;
                                }else{
                                    $pending[] = $student;
                                }
                            }
                        }else if($ageGroup == '6-9'){
                            if($student->DOB >= 10 && $student->DOB <= 13){
                                if($report->Status == 'completed'){
                                    $completed[] = $rstudent;
                                }else{
                                    $pending[] = $student;
                                }
                            }
                        }

                        // if ($ageGroup == '') {
                        //     $match = true;
                        // } elseif ($ageGroup == '10-13' && $age >= 6 && $age <= 9) {
                        //     $match = true;
                        // } elseif ($ageGroup == '6-9' && $age >= 10 && $age <= 13) {
                        //     $match = true;
                        // }
                        
                        // if ($match) {
                        //     if ($report->Status == 'completed') {
                        //         $completed[] = $student;
                        //     } else {
                        //         $pending[] = $student;
                        //     }
                        // }       
                           
                 }   


                error_log("Pending count: " . count($pending));
                error_log("Completed count: " . count($completed));
                        
                ob_clean();
                header('Content-Type: application/json');
                echo json_encode([
                   'pending' => $this->convertToArray($pending),
                    'completed' => $this->convertToArray($completed)
                ]);
                exit;
                

            }

            // fetching data when no filters 

            $completed = [];
            $pending = [];

            if (empty($reports)) {
                $this->view('Teacher/Reports', ['message' => 'No reports found']);
                return;
            }

            foreach ($reports as $report) {
                $studentData = $child->where_norder(['ChildID' => $report->StudentID]);
                if (empty($studentData)) continue;

                $student = $studentData[0];

                if ($report->Status == 'completed') {
                    $completed[] = $student;
                } else {
                    $pending[] = $student;
                }
            }

            if (!empty($completed) || !empty($pending)) {
                $this->view('Teacher/Reports', [
                    'completed' => $completed,
                    'pending' => $pending  
                ]);
            } else {
                $this->view('Teacher/Reports', ['message' => 'No reports found']);
            }
        }
        public function generateMonthlyReports() {

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
        
                $report =  new \Modal\Report;
                $child = new \Modal\Child;

                $students = [];

                $month = date('F'); // like 'April'
                $year = date('Y');  // like 2025

                $children = $child->findall();

                // var_dump($children);
                // exit;

                foreach($children as $child){
                    $age = $this->agecalculate($child->DOB);
                    if($age >= 6 && $age <= 13){
                        $students[] = [
                            'StudentID' => $child->ChildID,
                            'Month' => $month,
                            'Year' => $year
                        ];

                    }
                    
                }
                // var_dump($students);
                // exit;

                $check = $report->where_norder(['Month'=>$month,'Year'=>$year]);
                // var_dump($check);
                // exit();
            
                
                if (!$check) {
                    //Insert base reports

                    foreach($students as $student){
                        $result = $report->insert($student);
                    }
                    redirect('Teacher/Reports');

                   
              
              
            }else{
               
            }
        }

    }
        function agecalculate($dob) {
            $dobTimestamp = strtotime($dob);
            $currentTimestamp = time();
            $age = floor(($currentTimestamp - $dobTimestamp) / (60 * 60 * 24 * 365.25)); // leap years considered
            return $age;
        }

        public function generateID($row){
            $child = new \Modal\Child;
         
         

            
            return $row->ChildID;
        }

        function convertToArray($objArray) {
            return array_map(function ($obj) {
                return (array)$obj;
            }, $objArray);
        }
        
        
    
}


?>


