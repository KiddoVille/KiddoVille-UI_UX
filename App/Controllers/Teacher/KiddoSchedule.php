<?php

    namespace Controller;

    class KiddoSchedule{
        use MainController;
        public function addTask() {
            $task = new \Modal\Task;
        
            $dateTime = date('Y-m-d H:i:s');
            $data['Date'] = $dateTime;
            $arr = $_POST;
            $arr = array_merge($arr, $data);
        
        
            if ($task->validate($arr)) {
                
                $task->insert($arr);
                // Redirect to success page or display a success message
                redirect('Teacher/Dashboard');
            } else {
                // Display error message
            }
        }
    
        public function delete($taskId = null) {
           
    
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
               // show($_POST);
                $taskId = $_POST['id'];
                $task = new \Modal\Task;
            
                if ($task->deleteTask($taskId)) {
                    
                    $message = "Task deleted successfully!";
                } else {
                    $message = "Failed to delete task.";
            }
        }
            // Pass message to the view
            $this->view('Teacher/Dashboard');
        }
    
    
       public function updateTask(){
    
        IF(!isset($_POST['Task_ID']) || !isset($_POST['Title']) || !isset($_POST['Description'])){
            $_SESSION['error'] = "Invalid data.";
            var_dump($_POST);
            echo "<script>alert('Failed to update the task.'); </script>";
                
        } 
    
        $task = new \Modal\Task;
        $id = $_POST['id'];
        $data = [
            'Title' => $_POST['Title'],
            'Description' => $_POST['Description']
        ];
    
        if ($task->update_withid($id, $data, 'id')) {
            echo "<script>alert('Task updated successfully.');</script>";
        } else {
            echo "<script>alert('Failed to update the task.');</script>";
            redirect('Teacher/Dashboard');
        }
    
        redirect('Teacher/Dashboard');
    }

    }
?>