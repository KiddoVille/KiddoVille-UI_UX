<?php
    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');
    
    class Child {
        use MainController;
    
        public function index() {
            $session = new \Core\Session;
            $session->check_login();
    
            $data = [];
            $UserID = $session->get('USERID');
            $child = new \Modal\Child;

            $parent = new \Modal\ParentUser;
            $pre = $parent->first(["UserID" => $UserID]);
            $session->set(['PARENTID' => $pre->ParentID]);
    
            // Fetch children of the current parent
            $children = $child->where_norder(['ParentID' => $pre->ParentID ]);
            
            // Handle child limit and determine button visibility
            // $this->checkChildLimit($children, $child, $data);
    
            // Process form submission if POST request is made
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->handleFormSubmission($child, $data);
            }

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
    
        private function handleFormSubmission($child, &$data) {
            $requiredFields = ['First_Name', 'Last_Name', 'DOB', 'Relation', 'Language'];
    
            if (checkRequiredFields($requiredFields, $_POST)) {
                $errors = $child->validate();
    
                if (empty($errors)) {
                    $session = new \Core\Session;
                    $ParentID = $session->get('PARENTID');

                    $existingChild = $child->first([
                        'ParentID' => $ParentID,
                        'First_Name' => $_POST['First_Name']
                    ]);
    
                    if (!empty($existingChild)) {
                        // Handle duplicate child entry error
                        $this->handleDuplicateChildError($child, $data);
                    } else {
                        // Insert child and handle file uploads
                        $_POST['ParentID'] = $ParentID;
                        $_POST['PackageID'] = 101;
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
                                    $child = new \Modal\Child;
                                    $child->insert($_POST);
                                    
                                    redirect('Onbording/Child');
                                }
                            } else {
                                $errors['Image'] = "Unsupported image type. Please upload JPEG, PNG, or GIF images.";
                            }
                        }

                        $insertchild = $child->first(["ParentID"=>$ParentID, "First_Name"=> $_POST['First_Name']]);
                        $session->set(['CHILDID' => $insertchild->ChildID]);

                        $uploadedFiles = $_FILES['prescriptions'];
                        $childMedication = new \Modal\ChildMedication();
                        foreach ($uploadedFiles['tmp_name'] as $index => $tmpName) {
                            if ($uploadedFiles['error'][$index] === UPLOAD_ERR_OK) {
                                $file = [
                                    'tmp_name' => $tmpName,
                                    'name' => $uploadedFiles['name'][$index],
                                    'type' => $uploadedFiles['type'][$index],
                                    'size' => $uploadedFiles['size'][$index],
                                ];
                                $childMedication->saveMedicationImages($insertchild->ChildID, [$file]);
                            }
                        }

                        $files = $_FILES['documents'];
                        $documentModel = new \Modal\ChildDocuments();

                        // Loop through each uploaded file for documents
                        foreach ($files['tmp_name'] as $index => $tmpName) {
                            if ($files['error'][$index] === UPLOAD_ERR_OK) {
                                $file = [
                                    'tmp_name' => $tmpName,
                                    'name' => $files['name'][$index],
                                    'type' => $files['type'][$index],
                                    'size' => $files['size'][$index],
                                    'error' => $files['error'][$index]
                                ];

                                // Call saveDocuments to insert the document
                                $documentModel->saveMedicationDocuments($insertchild->ChildID, $file); // Pass $file directly
                            }
                        }

    
                        // Redirect based on the new count of children
                        // $this->redirectBasedOnChildCount($child, $username);
                        redirect ('Onbording/package');
                    }
                } else {
                    // Return errors and set values
                    $data['values'] = $this->setValues();
                    $data['errors'] = $errors;
                }
            }
        }
    
        private function handleDuplicateChildError($child, &$data) {
            $child->errors['First_Name'] = "First name already exists";
            $data['errors'] = $child->errors;
    
            $child->values['First_Name'] = $_POST['First_Name'];
            $data['values'] = $child->values;
        }
    
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
