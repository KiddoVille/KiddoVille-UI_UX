<?php

    namespace Controller;

    class Funzone{
        use MainController;

            public function index(){

                $mediaModel  = new \Modal\Funzone;
                $session = new \Core\Session;
                $teacher = new \Modal\Teacher;
            
                $TeacherID = $this->findID(); // getting the UserID
                
                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'SearchMedia'){
                    
                    $media_name = $_POST['media_name'];
                    $media_name = htmlspecialchars($media_name, ENT_QUOTES, 'UTF-8');


                    if(!empty($media_name)){
                        $query = "SELECT * FROM media WHERE Title LIKE '%$media_name%' AND UserID = $TeacherID";
                        $result = $mediaModel->query($query);
                    }else{
                        $result = $mediaModel->where_norder(['UserID' => $TeacherID]);
                    }

                    if($result){
                        header('Content-Type: application/json');
                        echo json_encode([
                            'media' => "$media_name"
                            // 'media' => array_map(fn($mediaModel) => (array)$mediaModel, $result),
                            //'media' => array_map(fn($mediaModel) => (array)$mediaModel, $result),
                            'message' => empty($result) ? 'No Media Found.' : ''
                        ]);
                        exit();
                    }else{
                        header('Content-Type: application/json');
                        echo json_encode([
                            'media' => [],
                            'message' => 'No Media Found.'
                        ]);
                        exit();
                    }
                    
                }

                // if no filters render full page
            
                $media = $mediaModel->where_norder(['UserID' => $TeacherID]);
                

                //finding the teacher's info
            $row = $teacher->first(['TeacherID' => $TeacherID]);
            $firstName = $row->First_Name;
            $lastName = $row->Last_Name ;
            $email =  $row->Email;
            $image= $row->Image;

            $result = [
                    'firstName' => $firstName,  
                    'lastName' => $lastName,
                    'email' => $email,
                    'image' => $image,];

                // var_dump($media);
                // var_dump($result);

                foreach ($media as  $mediaObject) {
                    foreach ($result as $key => $value) {
                        $mediaObject->$key = $value; // Add new key-value pairs to object
                    }
                }
                    
                //var_dump($media);

                
            
                
                $this->view('Teacher/Funzone', !empty($media) ? ['media' => $media] : ['message' => 'No resource found']);
            }

        public function findID(){

            $teacher = new \Modal\Teacher;
            $session = new \Core\Session;
    
            $userID = $session->get('USERID'); 
    
            $row = $teacher->first(['UserID' => $userID]);
            $result = $row->TeacherID;
    
            return $result;
    
    
        }

        public function addMedia(){
            $mediaModel = new \Modal\Funzone;
            $session = new \Core\Session;

            $TeacherID = $this->findID();
            if (!$TeacherID) {
                // Redirect to login page if TeacherID is not found
                $this->view('Teacher/Funzone', ['message' => 'Please log in to request a leave.']);
                return;
            }

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $arr = $_POST;
                $dateCreated = date('Y-m-d H:i:s'); // gets current date and time

                $arr = array_merge($arr, ['UserID' => $TeacherID],['DateTime' => $dateCreated]);
                
                if($mediaModel->validate($arr)){

                    // Check if a file was uploaded without errors
                    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
                        //var_dump($arr);
                    $target_dir = "UPLOADS/Funzone/"; //  directory for uploaded files
                    $target_file = $target_dir . basename($_FILES["file"]["name"]);
                    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    

                    // Check if the file is allowed (you can modify this to allow specific file types)
                    $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf","txt","mp4","mp3");
                    if (!in_array($file_type, $allowed_types)) {
                        $this->view('Teacher/Funzone', ['message' => 'Sorry, the file format in not allowed']);
                        
                    } else{

                        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                            // File upload success, now store information in the database
                            $filename = $_FILES["file"]["name"];
                            $filesize = $_FILES["file"]["size"];
                            $filetype = $_FILES["file"]["type"];
                            //var_dump($filename,$filesize,$filetype);
                        }

                        $arr = array_merge($arr,['URL'=>$target_dir], ['Size' => $filesize], ['Format' => $filetype]);
                        // var_dump($arr);
                        // exit();
                            
                        if (!($mediaModel->insert($arr))) {
                            
                            redirect('Teacher/Funzone');
                           
                        } else {
                            $this->view('Teacher/Funzone', ['message' => 'Failed to add resource. Please try again.']);
                        }
                        
                    }

                    }

                }else{
                    $this->view('Teacher/Funzone', ['errors' => $mediaModel->errors]);
                }

                

       
               
            }

        }

        public function removeMedia(){
            $mediaModel = new \Modal\Funzone;
            $session = new \Core\Session;

            $TeacherID = $this->findID();
            if (!$TeacherID) {
                // Redirect to login page if TeacherID is not found
                $this->view('Teacher/Funzone', ['message' => 'Please log in to request a leave.']);
                return;
            }

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $id = $_POST['id'];

                if ($mediaModel->delete($id,'MediaID')) {
                    redirect('Teacher/Funzone'); // Redirect to dashboard
                } else {
                    // Optionally, set a message for failure and redirect
                    redirect('Teacher/Funzone',['message' => 'Failed to remove resource. Please try again.']);
                }
            }else {
               
                redirect('Teacher/Funzone', ['message' => 'Failed to remove resource. Please try again.']);
            }


 
        }
    }
?>

