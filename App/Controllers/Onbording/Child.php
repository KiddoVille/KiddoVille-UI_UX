<?php
    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');
    
    class Child {
        use MainController;
    
        public function index() {
            $session = new \Core\Session;
            $session->check_login();
    
            $data = [];
            // $UserID = $session->get('USERID');
            // $child = new \Modal\Child;

            // $parent = new \Modal\ParentUser;
            // $pre = $parent->first(["UserID" => $UserID]);
            // $session->set(['PARENTID' => $pre->ParentID]);
            
            // Handle child limit and determine button visibility
            // $this->checkChildLimit($children, $child, $data);
            // $action = $_POST['action'] ?? '';

            // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //     if ($action === 'child') {
            //         redirect('Onbording/Child');
            //     } else{
            //         redirect('Onbording/Guardian');
            //     }
            // }

            // Render the view after all processing, even if no form submission
            $this->view('Onbording/Child', $data);
        }
    
        // private function checkChildLimit($children, $child, &$data) {
        //     if (is_array($children) && count($children) > 4) {
        //         redirect('Onbording/Guardian');
        //     } else {
        //         $child->values['button'] = true;
        //         $data['value'] = $child->values;
        //     }
        // }
    
        public function lol() {
            $requiredFields = ['First_Name', 'Last_Name', 'DOB', 'Relation', 'Language'];
        
            if (checkRequiredFields($requiredFields, $_POST)) {
                $child = new \Modal\Child;
                $errors = $child->validate();
        
                if (empty($errors)) {
                    $session = new \Core\Session;
                    $Parent = new \Modal\ParentUser;
                    $UserID = $session->get('USERID');
                    $pre = $Parent->first(["UserID" => $UserID]);

                    $existingChild = $child->first([
                        'ParentID' => $pre->ParentID,
                        'First_Name' => $_POST['First_Name']
                    ]);
        
                    if (!empty($existingChild)) {
                        $session = new \core\Session;
                        $session->set("ChildExist" , "Child already exist");
                        $session->set("First_Name" , $_POST['First_Name']);
                        redirect("Onbording/Child");
                    } 
                    else {
                        // Insert child details
                        $_POST['ParentID'] = $pre->ParentID;
                        $_POST['PackageID'] = 101;
        
                        // Handle Profile Image Upload
                        if (!empty($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
                            $imageFile = $_FILES['profile_image'];
                            $imageType = mime_content_type($imageFile['tmp_name']);
        
                            $imageBlob = file_get_contents($imageFile['tmp_name']);
                            if ($imageBlob !== false) {
                                $_POST['Image'] = $imageBlob;
                                $_POST['ImageType'] = $imageType;
                            } else {
                                $errors['Image'] = "Failed to read the image file.";
                            }
                        }
        
                        if (empty($errors)) {
                            $child = new \Modal\Child;
                            $child->insert($_POST);
        
                            // Fetch the newly inserted child
                            $insertchild = $child->first(["ParentID" => $pre->ParentID, "First_Name" => $_POST['First_Name']]);
                            $session->set(['CHILDID' => $insertchild->ChildID]);
        
                            // Handle Medication Files
                            if (!empty($_FILES['prescriptions']['name'][0])) {
                                $uploadedFiles = $_FILES['prescriptions'];
                                $childMedication = new \Modal\ChildMedication();
        
                                foreach ($uploadedFiles['tmp_name'] as $index => $tmpName) {
                                    if ($uploadedFiles['error'][$index] === UPLOAD_ERR_OK) {
                                        $file = [
                                            'tmp_name' => $tmpName,
                                            'name' => $uploadedFiles['name'][$index],
                                            'type' => $uploadedFiles['type'][$index],
                                            'size' => $uploadedFiles['size'][$index]
                                        ];
                                        $childMedication->saveMedicationImages($insertchild->ChildID, [$file]);
                                    } else {
                                        $errors['prescriptions'][$index] = "Error uploading prescription file.";
                                    }
                                }
                            }
        
                            // Handle Document Files
                            if (!empty($_FILES['documents']['name'][0])) {
                                $files = $_FILES['documents'];
                                $documentModel = new \Modal\ChildDocuments();
        
                                foreach ($files['tmp_name'] as $index => $tmpName) {
                                    if ($files['error'][$index] === UPLOAD_ERR_OK) {
                                        $file = [
                                            'tmp_name' => $tmpName,
                                            'name' => $files['name'][$index],
                                            'type' => $files['type'][$index],
                                            'size' => $files['size'][$index]
                                        ];
                                        $documentModel->saveMedicationDocuments($insertchild->ChildID, $file);
                                    } else {
                                        $errors['documents'][$index] = "Error uploading document file.";
                                    }
                                }
                            }
        
                            if (empty($errors)) {
                                redirect('Onbording/package');
                            }
                        }
                    }
                }
        
                // If errors exist, return data
                if (!empty($errors)) {
                    $data['values'] = $this->setValues();
                    $data['errors'] = $errors;
                }
            }
        }        
    
        // private function handleDuplicateChildError($child, &$data) {
        //     $child->errors['First_Name'] = "First name already exists";
        //     $data['errors'] = $child->errors;
    
        //     $child->values['First_Name'] = $_POST['First_Name'];
        //     $data['values'] = $child->values;
        // }
    
        // private function redirectBasedOnChildCount($child, $username) {
        //     $children = $child->where_norder(['Parent_Name' => $username]);
    
        //     if (is_array($children) && count($children) < 5) {
        //         redirect('Onbording/Child');
        //     } else {
        //         redirect('Onbording/Guardian');
        //     }
        // }
    
        private function setValues() {
            $values = [];
            $values['First_Name'] = $_POST['First_Name'];
            $values['Last_Name'] = $_POST['Last_Name'];
            $values['DOB'] = $_POST['DOB'];
            $values['Relation'] = $_POST['Relation'];
    
            return $values;
        }
    }    

?>
