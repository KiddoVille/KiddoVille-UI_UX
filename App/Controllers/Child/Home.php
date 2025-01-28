<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Home {
        use MainController;

        public function index() {
            $session = new \Core\Session;
            $session->check_login();
            $session->check_child();

            // Retrieve session variables
            $ChildID = $session->get('CHILDID');
            $UserID = $session->get('USERID');

            // Retrieve parent and children data
            $parent = new \Modal\ParentUser;
            $pre = $parent->first(['UserID' => $UserID]);
            $child = new \Modal\Child;
            $children = $child->where_norder(['ParentID' => $pre->ParentID]);

            // Prepare data for all children
            $data = $this->store($children, $pre);

            // Select specific child by name, if it exists
            $select = $child->first(['ChildID' => $ChildID ]);
            $data['child_id'] = $ChildID;

            if (!empty($select)) {
                $data2 = $this->selectedchild($select);
                $data = $data + $data2;
            }

            // Load the view with the data
            $this->view('Child/home', $data);
        }

        private function store($children, $pre){
            $data = [];

            $imageData = $pre->Image;
            $imageType = $pre->ImageType;  // Get the image MIME type from the database

            // If image data is available, construct the Base64 string using the correct MIME type
            $base64Image = (!empty($imageData) && is_string($imageData)) 
                ? 'data:' . $imageType . ';base64,' . base64_encode($imageData) 
                : null;

            $data['parent'] = [
                'fullname' => $pre->First_Name . ' ' . $pre->Last_Name,
                'image' => !empty($base64Image) ? $base64Image : null,
            ];

            // Retrieve each child's profile image and details
            foreach ($children as $index => $child) {

                $imageData = $child->Image;
                $imageType = $child->ImageType;  // Get the image MIME type from the database
    
                // If image data is available, construct the Base64 string using the correct MIME type
                $base64Image = (!empty($imageData) && is_string($imageData)) 
                    ? 'data:' . $imageType . ';base64,' . base64_encode($imageData) 
                    : null;
                $data['children'][$index] = [
                    'Id' => $child->ChildID,
                    'name' => $child->First_Name,
                    'image' => !empty($base64Image) ? $base64Image : null,
                ];
            }

            return $data;
        }

        private function selectedchild($selectedchild){
            $data = [];

            // Retrieve the specific child's profile image and details

            $imageData = $selectedchild->Image;
            $imageType = $selectedchild->ImageType;  // Get the image MIME type from the database

            // If image data is available, construct the Base64 string using the correct MIME type
            $base64Image = (!empty($imageData) && is_string($imageData)) 
                ? 'data:' . $imageType . ';base64,' . base64_encode($imageData) 
                : null;

            $data['selectedchildren'] = [
                'fullname' => $selectedchild->First_Name . ' ' . $selectedchild->Last_Name,
                'name' => $selectedchild->First_Name,
                'image' => $base64Image,
                'age' => agecalculate($selectedchild->DOB),
                'language' => $selectedchild->Language,
                'religion' => $selectedchild->Religion,
            ];

            return $data;
        }

        // public function setchildsession() {
        //     if (session_status() == PHP_SESSION_NONE) {
        //         session_start();
        //     }
        
        //     header('Content-Type: application/json');
        
        //     $request = json_decode(file_get_contents('php://input'), true);
        
        //     if (isset($request['ChildID'])) {
        //         $session = new \Core\Session;
        //         $session->set('CHILDID', $request['ChildID']);
        //         $_SESSION['CHILDID'] = $request['ChildID'];
        
        //         // Return JSON indicating success
        //         echo json_encode(['success' => true, 'message' => 'ChildID set successfully.']);
        //     } else {
        //         // Return JSON indicating failure
        //         echo json_encode(['success' => false, 'message' => 'ChildID not provided.']);
        //     }
        //     exit();
        // }  
        
        public function setchildsession(){

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            header('Content-Type: application/json');
            $request = json_decode(file_get_contents('php://input'), true);
            $response = [];
        
            $session = new \Core\Session;
            if (isset($request['ChildID'])) {
                $session->set('CHILDID', $request['ChildID']);
                $response = ['success' => true, 'message' => 'Child session removed.'];
            } else {
                $response = ['success' => false, 'message' => 'No child session to remove.'];
            }

            echo json_encode($response);  // Send JSON response
            exit();
        }

        public function removechildsession(){

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            header('Content-Type: application/json');
            $response = [];

            $session = new \Core\Session;
            $ChildID = $session->get("CHILDID");
            
            if (isset($ChildID)) {
                $session->unset("CHILDID");
                $response = ['success' => true, 'message' => 'Child session removed.'];
            } else {
                $response = ['success' => false, 'message' => 'No child session to remove.'];
            }

            echo json_encode($response);  // Send JSON response
            exit();
        }
    }
?>
