<?php

    namespace Controller;

    class Dashboard{
        use MainController;

        public function index(){
            
            $task = new \Modal\Task;

        // Fetch today's tasks
            $tasks = $task->where(['Date' =>date('Y-m-d')]);
            
            if (!empty($tasks)) {
                $this->view('Teacher/Dashboard', ['tasks' => $tasks]);
            } else {
            // Pass a message to the view if no tasks exist
                $this->view('Teacher/Dashboard', ['message' => 'No tasks created yet.']);
            }
           
        }
    }
?>




