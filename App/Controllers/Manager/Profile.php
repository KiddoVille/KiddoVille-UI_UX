<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Profile{
        use MainController;
        public function index(){
            $this->view('Manager/profile/Editprofile');
        }

        public function editprofile(){
            $this->view('Manager/profile/Editprofileinput');
        }
    }
?>