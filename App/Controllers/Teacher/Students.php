<?php

    namespace Controller;

    class Students{
        use MainController;

        public function index(){

            $student =  new \Modal\Student;
            $students = $student->findall();

            
            
            if (!empty($students)) {
                $this->view('Teacher/Students', ['students' => $students]);
            } else {
            // Pass a message to the view if no tasks exist
                $this->view('Teacher/Students', ['message' => 'No tasks created yet.']);
            }
           
        }
    }
?>
