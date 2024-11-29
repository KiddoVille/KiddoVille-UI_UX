<?php
    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');
    
    class Child {
        use MainController;
    
        public function index() {
            $session = new \Core\Session;
            $session->check_login();
    
            $data = [];
            $username = $session->get('USERNAME');
            $child = new \Modal\Child;
    
            // Fetch children of the current parent
            $children = $child->where_norder(['Parent_Name' => $username]);
            
            // Handle child limit and determine button visibility
            $this->checkChildLimit($children, $child, $data);
    
            // Process form submission if POST request is made
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->handleFormSubmission($child, $username, $data);
            }

            $action = $_POST['action'] ?? '';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if ($action === 'child') {
                    redirect('Onbording/Child');
                } else{
                    redirect('Onbording/Guardian');
                }
            }

            // Render the view after all processing, even if no form submission
            $this->view('Onbording/Child', $data);
        }
    
        private function checkChildLimit($children, $child, &$data) {
            if (is_array($children) && count($children) > 4) {
                redirect('Onbording/Guardian');
            } else {
                $child->values['button'] = true;
                $data['value'] = $child->values;
            }
        }
    
        private function handleFormSubmission($child, $username, &$data) {
            $requiredFields = ['First_Name', 'Last_Name', 'DOB', 'Relation', 'Language'];
    
            if (checkRequiredFields($requiredFields, $_POST)) {
                $errors = $this->validate();
    
                if (empty($errors)) {
                    $existingChild = $child->first([
                        'Parent_Name' => $username,
                        'First_Name' => $_POST['First_Name']
                    ]);
    
                    if (!empty($existingChild)) {
                        // Handle duplicate child entry error
                        $this->handleDuplicateChildError($child, $data);
                    } else {
                        // Insert child and handle file uploads
                        $_POST['Parent_Name'] = $username;
                        $child->insert($_POST);
                        $this->handleFileUploads($username, $_POST['First_Name']);
    
                        // Redirect based on the new count of children
                        $this->redirectBasedOnChildCount($child, $username);
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
    
        private function handleFileUploads($username, $firstName) {
            // Handle single profile image upload
            if (isset($_FILES['profile_image'])) {
                $this->uploadFile($username, $firstName, 'profile', $_FILES['profile_image']);
            }
    
            // Handle multiple prescriptions uploads
            if (isset($_FILES['prescriptions'])) {
                $this->uploadMultipleFiles($username, $firstName, 'prescriptions', $_FILES['prescriptions']);
            }
    
            // Handle multiple documents uploads
            if (isset($_FILES['documents'])) {
                $this->uploadMultipleFiles($username, $firstName, 'documents', $_FILES['documents']);
            }

            $ageValidation = agecalculate($_POST['DOB']);
            if (is_string($ageValidation)) {
                // Set error only if the validation result is an error message
                if ($ageValidation === "Age must be at least 2 years" || 
                    $ageValidation === "Age must be less than or equal to 12 years" || 
                    $ageValidation === "Birthdate cannot be in the future") {
                    $errors['DOB'] = $ageValidation;
                }
            }
        }
    
        private function uploadMultipleFiles($username, $firstName, $fileType, $files) {
            $numFiles = count($files['name']);
            
            for ($i = 0; $i < $numFiles; $i++) {
                $file = [
                    'name' => $files['name'][$i],
                    'type' => $files['type'][$i],
                    'tmp_name' => $files['tmp_name'][$i],
                    'error' => $files['error'][$i],
                    'size' => $files['size'][$i]
                ];
                $this->uploadFile($username, $firstName, $fileType, $file);
            }
        }
    
        private function uploadFile($username, $firstName, $fileType, $file) {
            // Assuming uploadFile is a defined function elsewhere
            uploadFile($username, $firstName, $fileType, $file);
        }
    
        private function redirectBasedOnChildCount($child, $username) {
            $children = $child->where_norder(['Parent_Name' => $username]);
    
            if (is_array($children) && count($children) < 5) {
                redirect('Onbording/Child');
            } else {
                redirect('Onbording/Guardian');
            }
        }
    
        private function validate() {
            $errors = [];
            if (!is_string($_POST['First_Name'])) {
                $errors['First_Name'] = "First Name must be a valid string";
            }

            if (!is_string($_POST['Last_Name'])) {
                $errors['Last_Name'] = "Last Name must be a valid string";
            }
        
            $ageValidation = agecalculate($_POST['DOB']);
            if (is_string($ageValidation)) {
                // Set error only if the validation result is an error message
                if ($ageValidation === "Age must be at least 2 years" || 
                    $ageValidation === "Age must be less than or equal to 12 years" || 
                    $ageValidation === "Birthdate cannot be in the future") {
                    $errors['DOB'] = $ageValidation;
                }
            }
        
            if (!is_string($_POST['Relation'])) {
                $errors['Relation'] = "Relation must be a valid string";
            }
            return $errors;
        }
        
    
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
