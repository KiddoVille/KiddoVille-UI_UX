<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class GuardianEditProfile{
        use MainController;
        public function index(){
            $this->view('ReParent/GuardianEditProfile');
        }
    }
?>