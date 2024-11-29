<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Guardian{
        use MainController;
        public function index(){

            $session = new \Core\Session;
            $session->check_login();

            $Data = [];
            $session = new \Core\Session;
            $username = $session->get('USERNAME');
            $guardian = new \Modal\Guardian;
            $result = $guardian->where_norder(['Parent_Name' => $username]);
            if(!empty($result)){
                redirect('Parent/Home');
            }
            $requiredFields = ['First_Name', 'Last_Name', 'Relation', 'Phone_Number', 'Language','Address','NID','Email','Gender', ];
            if(($_SERVER['REQUEST_METHOD'] === 'POST'&& checkRequiredFields($requiredFields, $_POST))){
                $errors = $this->validate();
                if(empty($errors)){
                    if(empty($result)){
                        $_POST['Parent_Name'] = $username;
                        $guardian-> insert($_POST);

                        if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
                            $file = $_FILES['profile_image'];
                            $fileType = 'profile';
            
                            $filePath = uploadFile($username,"Guardian" , $fileType, $file);
            
                            if ($filePath) {
                                $_POST['profile_image_path'] = $filePath;
                            } else {
                                echo "File upload failed.";
                            }
                        }
                        redirect('Parent/Home');
                    }
                    else{
                        $_POST['Parent_Name'] = $username;
                        $guardian-> update(['Parent_Name'=> $username], $_POST);

                        if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
                            $file = $_FILES['profile_image'];
                            $fileType = 'profile';
            
                            $filePath = uploadFile($username,"Guardian" , $fileType, $file);
            
                            if ($filePath) {
                                $_POST['profile_image_path'] = $filePath;
                            } else {
                                echo "File upload failed.";
                            }
                        }
                        redirect('Parent/Home');
                    }
                }
                else{
                    $values= $this->setvalues();
                    $Data['values'] = $values;
                    $Data['errors'] = $errors;
                }
            }

            $this->view('Onbording/Guardian' , $Data);
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
            if (!IsString($_POST['Relation'])) {
                $errors['Relation'] = "Relation is not valid";
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
            $values['Relation'] = $_POST['Relation'];

            return $values;
        }
    }
?>