<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class ParentProfile{
        use MainController;
        public function index(){

            $session = new \Core\Session;
            $session->check_login();

            $username = $session->get('USERNAME');

            $parent = new \Modal\ParentUser;
            $pre = $parent->first(['Username' => $username]);
            $parentImage = getProfileImageUrl($username);
            if($pre){
                $pre->Gender = genderconvert($pre->Gender);
                $pre->profile = $parentImage;
            }
            else{
                $this->view('_404');
            }

            $data = [];
            $data[]  = $pre;

            $this->view('Child/parentprofile',$data);
        }
    }
?>