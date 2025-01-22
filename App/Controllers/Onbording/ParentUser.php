<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class ParentUser{
        use MainController;

        public function index(){

            $session = new \Core\Session;
            $session->check_login();

            $Data = [];
            $UserID = $session->get('USERID');

            $parent = new \Modal\ParentUser;
            $result = $parent->where_norder(["UserID" => $UserID]);
            if(!empty($result)){
                redirect('Parent/Home');
            }

            $requiredFields = ['First_Name', 'Last_Name', 'Phone_Number', 'Address', 'NID', 'Email', 'Gender', 'Language'];

            if(($_SERVER['REQUEST_METHOD'] === 'POST') && $_FILES['profile_image'] && checkRequiredFields($requiredFields, $_POST)){
                if (empty($errors)) {
                    $_POST['UserID'] = $UserID;
                    $imageFile = $_FILES['profile_image'];
                    
                    if ($imageFile['error'] === 0) {
                        // Get the MIME type of the uploaded file
                        $imageType = mime_content_type($imageFile['tmp_name']);
                        if (in_array($imageType, ['image/jpeg', 'image/png', 'image/gif'])) {

                            $imageBlob = file_get_contents($imageFile['tmp_name']);
                            
                            if ($imageBlob === false) {
                                $errors['Image'] = "Failed to read the image file.";
                            } else {
                                $_POST['Image'] = $imageBlob;
                                $_POST['ImageType'] = $imageType;
                                $parent = new \Modal\ParentUser;
                                $parent->insert($_POST);
                                
                                redirect('Onbording/Child');
                            }
                        } else {
                            $errors['Image'] = "Unsupported image type. Please upload JPEG, PNG, or GIF images.";
                        }
                    } else {
                        $errors['Image'] = "Error occurred while uploading the image.";
                    }
                } else {
                    $values = $this->setvalues();
                    $Data['values'] = $values;
                    $Data['errors'] = $errors;
                }
            }

            $user = new \Modal\User;
            $result = $user->first(['UserID' => $UserID]);
            $username = $result->Username;
            $Data['username'] = $username;
            $this->view('Onbording/ParentUser', $Data);
        }

        private function setvalues(){
            $values = [];
            $values['First_Name'] = $_POST['First_Name'];
            $values['Last_Name'] = $_POST['Last_Name'];
            $values['Phone_Number'] = $_POST['Phone_Number'];
            $values['Address'] = $_POST['Address'];
            $values['NID'] = $_POST['NID'];
            $values['Email'] = $_POST['Email'];

            return $values;
        }
    }
?>