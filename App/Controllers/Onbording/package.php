<?php
    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');
    
    class Package {
        use MainController;
    
        public function index() {
            $session = new \Core\Session;
            $session->check_login();
    
            $data = [];
            $ParentID = $session->get('PARENTID');
            $child = new \Modal\Child;
    
            // Fetch children of the current parent
            $children = $child->where_norder(['ParentID' => $ParentID]);

            $ChildID = $session->get('CHILDID');
            show ($ChildID);
            if (!$ChildID) {
                show("ChildID is not set in the session.");
            } else {
                show("ChildID is set: " . $ChildID);
            }
            
            // Handle child limit and determine button visibility
            $this->checkChildLimit($children, $child, $data);

            // Process form submission if POST request is made
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->handleFormSubmission($child, $data);
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
    
        private function handleFormSubmission($child, &$data) {    
            
            $session = new \Core\Session;
            $ChildID = $session->get('CHILDID');

            if(!isset($_POST['PackageID'])){
                $_POST['PackageID'] = 1;
            }
            $child->update(["ChildID" => $ChildID], ["PackageID" => $_POST['PackageID']]);

            $session->unset('CHILDID');

            $this->redirectBasedOnChildCount($child);
            redirect ('Onbording/package');
        }
    
        private function redirectBasedOnChildCount($child) {
            $session = new \Core\Session;
            $ParentID = $session->get('PARENTID');

            $children = $child->where_norder(['ParentID' => $ParentID]);
        
            if (isset($_POST['action'])) {
                if ($_POST['action'] === "child" && is_array($children) && count($children) < 5) {
                    redirect('Onbording/Child');
                } elseif ($_POST['action'] === "guardian") {
                    redirect('Onbording/Guardian');
                } else {
                    redirect('Onbording/Guardian');
                }
            }
        }
    }    

?>
