<?php

    namespace Controller;

    class AcademicReport{
        use MainController;

        public function index(){

            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['report_id'])){

                $student = new \Modal\Child;
                $report =  new \Modal\Report;
                $attend =  new \Modal\Attendance;
                $mark =  new \Modal\Mark;
                $subject = new \Modal\Subject;
                
                $reportID = $_POST['report_id'];

                //report details
                $reports = $report->where_norder(['ReportID' => $reportID]);
                $reportCard = $reports[0];

                //student details
                $child = $student->where_norder(['ChildID' => $reportCard->StudentID]);
                $studentDetails = $child[0];

                //registarin no
                $studentDetails->DOB = $this->agecalculate($studentDetails->DOB);
                $year = date('y', strtotime($studentDetails->EnrollDate));
                $studentDetails->RegNo = "KV".$year.str_pad($studentDetails->ChildID, 4, '0', STR_PAD_LEFT);

                $studentData [] = [
                    'RegNo' => $studentDetails->RegNo,
                    'First_Name' => $studentDetails->First_Name,
                    'Last_Name' => $studentDetails->Last_Name,
                    'Age' => $studentDetails->DOB,
                    'Month' => $reportCard->Month,
                    'Created' => date('Y-m-d', strtotime($reportCard->Submitted_at)),
                ];



                //attendance details

                $childID = $studentDetails->ChildID;
                $currentMonth = date('m'); // e.g. '04'
                $currentYear = date('Y');  // e.g. '2025'

                $query = "SELECT * FROM attendance WHERE ChildID = :childID 
                        AND MONTH(Start_Date) = :month 
                        AND YEAR(Start_Date) = :year";

                $attendances = $attend->query($query, [
                    'childID' => $childID,
                    'month' => $currentMonth,
                    'year' => $currentYear
                ]);

                $attendData [] = [
                    'precentage' => count($attendances) / 30 * 100,
                    'precent' => count($attendances),
                    'absent' => 30 - count($attendances)
                ];


                //subject marks

                //find marks to the relavent reportID

                $marks = $mark->where_norder(['Report_ID' => $reportID]);

                foreach ($marks as $mrk) {
                    $subjectDetails = $subject->where_norder(['Subject_ID' => $mrk->Subject_ID]);
                    if (isset($subjectDetails[0])) {
                        $subjectName = $subjectDetails[0]->Subject_Name;
                
                        // Add the subject and marks information to the marksData array
                        $marksData[] = [
                            'Subject_ID' => $mrk->Subject_ID,
                            'Subject_Name' => $subjectName,
                            "Mark" => $mrk->Marks
                        ];
                    }

                  
                }
                // var_dump($marksData);
                // exit();
                if (empty($attendData)) {
                    $attendError = "Attendance data is missing or incomplete.";
                } else {
                    $attendError = null;  
                }
                
                // Check if the student data is available
                if (empty($studentData)) {
                    $studentError = "Student data is missing or incomplete.";
                } else {
                    $studentError = null;  
                }
                
                // Check if the marks data is available
                if (empty($marksData)) {
                    $marksError = "Marks data is missing or incomplete.";
                } else {
                    $marksError = null;  




             
                
                
                $this->view('Teacher/AcademicReport',[
                    'attendData' => $attendData[0],
                    'studentData' => $studentData[0],
                    'marksData' => $marksData,
                    'attendError' => $attendError,  // Pass error for attendance
                    'studentError' => $studentError,  // Pass error for student
                    'marksError' => $marksError, 
                ]);
            }

            // var_dump($_POST);
            // exit();
            
           
        }
    }

        function agecalculate($dob) {
            $dobTimestamp = strtotime($dob);
            $currentTimestamp = time();
            $age = floor(($currentTimestamp - $dobTimestamp) / (60 * 60 * 24 * 365.25)); // leap years considered
            return $age;
        }
    
    }
?>




