<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class GuardianProfile{
        use MainController;
        public function index(){

            $session = new \Core\Session;
            $session->check_login();

            $username = $session->get('USERNAME');

            $guardian = new \Modal\Guardian;
            $pre = $guardian->first(['Parent_Name' => $username]);
            $parentImage = getProfileImageUrl($username,"Guardian");
            if($pre){
                $pre->Gender = genderconvert($pre->Gender);
                $pre->profile = $parentImage;
            }
            else{
                $this->view('_404');
            }

            $data = [];
            $data[]  = $pre;

            $this->view('Child/guardianprofile',$data);
        }
    }
?>