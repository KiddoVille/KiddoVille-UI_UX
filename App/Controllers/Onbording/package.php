<?php
    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');
    
    class Package {
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
            $this->view('Onbording/Package', $data);
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

            if(!isset($_POST['package'])){
                $_POST['package'] = 0;
            }
            $child->insert($_POST);
            $this->redirectBasedOnChildCount($child, $username);
            redirect ('Onbording/package');
        }
    
        private function redirectBasedOnChildCount($child, $username) {
            $children = $child->where_norder(['Parent_Name' => $username]);
        
            if (isset($_POST['action'])) {
                if ($_POST['action'] === "child" && is_array($children) && count($children) < 5) {
                    redirect('Onbording/Child');
                } elseif ($_POST['action'] === "guardian") {
                    redirect('Onbording/Guardian');
                } else {
                    // Optional: Handle cases when adding more children is not allowed
                    redirect('Onbording/Guardian');
                }
            }
        }
    }    

?>
