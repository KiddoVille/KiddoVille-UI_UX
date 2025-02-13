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
            $ParentID = $session->get('ParentID');
            $guardian = new \Modal\Guardian;
            $result = $guardian->where_norder(['ParentID' => $ParentID]);
            if(!empty($result)){
                redirect('Parent/Home');
            }
            $requiredFields = ['First_Name', 'Last_Name', 'Relation', 'Phone_Number', 'Language','Address','NID','Email','Gender', ];
            if(($_SERVER['REQUEST_METHOD'] === 'POST'&& checkRequiredFields($requiredFields, $_POST))){
                $errors = $guardian->validate();
                if(empty($errors)){
                    if(empty($result)){
                        $_POST['ParentID'] = $ParentID;

                        $imageFile = $_FILES['profile_image'];
                        if ($imageFile['error'] === 0) {
                            $imageBlob = file_get_contents($imageFile['tmp_name']);
                            if ($imageBlob === false) {
                                $errors['Image'] = "Failed to read the image file.";
                            } else {
                                $_POST['Image'] = $imageBlob;
                                show($_POST);
                                $guardian->insert($_POST);
                                $session->unset('CHILDID');
                                $session->unset('PARENTID');
                                redirect('Parent/Home');
                            }
                        } else {
                            $errors['Image'] = "Error occurred while uploading the image.";
                        }
                        redirect('Parent/Home');
                    }
                    else{
                        $_POST['ParentID'] = $ParentID;
                        $imageFile = $_FILES['profile_image'];

                        if ($imageFile['error'] === 0) {
                            $imageBlob = file_get_contents($imageFile['tmp_name']);
                            if ($imageBlob === false) {
                                $errors['Image'] = "Failed to read the image file.";
                            } else {
                                $_POST['Image'] = $imageBlob;
                                $parent = new \Modal\Guardian;
                                show($_POST);
                                $guardian-> update(['ParentID'=> $ParentID], $_POST);
                                redirect('Parent/Home');
                            }
                        } else {
                            $errors['Image'] = "Error occurred while uploading the image.";
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