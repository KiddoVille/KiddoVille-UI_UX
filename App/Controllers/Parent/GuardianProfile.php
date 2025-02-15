<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class GuardianProfile{
        use MainController;
        public function index(){
            $data = $this->store_data();
            $this->view('Parent/guardianprofile',$data);
        }

        private function store_data(){
            $data = [];
            $session = new \core\Session;
            $ParentModal = new \Modal\ParentUser;
            $GuardianModal = new \Modal\Guardian;
            $UserID = $session->get("USERID");
        
            $Parent = $ParentModal->first(["UserID" => $UserID]);
            $Guardian = $GuardianModal->first(["ParentID" => $Parent->ParentID]);
        
            if ($Guardian) {
                $imageData = $Guardian->Image;
                $imageType = $Guardian->ImageType;
                $base64Image = (!empty($imageData) && is_string($imageData)) 
                    ? 'data:' . $imageType . ';base64,' . base64_encode($imageData) 
                    : null;
        
                $Guardian->Image = $base64Image;
                $data = (array) $Guardian;
            }
        
            return $data;
        }

    }
?>