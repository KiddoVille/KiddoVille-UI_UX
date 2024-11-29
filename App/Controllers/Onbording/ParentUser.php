<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class ParentUser{
        use MainController;

        public function index(){

            $session = new \Core\Session;
            $session->check_login();

            $Data = [];
            $username = $session->get('USERNAME');

            $parent = new \Modal\ParentUser;
            $result = $parent->where_norder(["Username" => $username]);
            if(!empty($result)){
                redirect('Parent/Home');
            }

            $requiredFields = ['First_Name', 'Last_Name', 'Phone_Number', 'Address', 'NID', 'Email', 'Gender', 'Language'];

            if(($_SERVER['REQUEST_METHOD'] === 'POST') && checkRequiredFields($requiredFields, $_POST)){
                $errors = $this->validate();
                if(empty($errors)){
                    $parent = new \Modal\ParentUser;
                    $parent -> insert($_POST);

                    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
                        $userId = $username;
                        $file = $_FILES['profile_image'];
                        $fileType = 'profile';
        
                        // Call the uploadFile function
                        $filePath = uploadFile($userId, null, $fileType, $file);
        
                        if ($filePath) {
                            $_POST['profile_image_path'] = $filePath;
                        } else {
                            echo "File upload failed.";
                        }
                    }
                    redirect('Onbording/Child');
                }
                else{
                    $values= $this->setvalues();
                    $Data['values'] = $values;
                    $Data['errors'] = $errors;
                }
            }

            $Data['username'] = $username;
            $this->view('Onbording/ParentUser', $Data);
        }

        private function validate() {
            $errors = [];
            if (!isString($_POST['First_Name'])) {
                $errors['First_Name'] = "First Name must be a valid string";
            }
            if (!isString($_POST['Last_Name'])) {
                $errors['Last_Name'] = "Last Name must be a valid string";
            }
            if (!isNumber($_POST['NID'])) {
                $errors['NID'] = "NID must be a valid number";
            }
            if (!isEmail($_POST['Email'])) {
                $errors['Email'] = "Email is not valid";
            }
            return $errors;
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