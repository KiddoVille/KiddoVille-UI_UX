<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class ParentProfile{
        use MainController;
        public function index(){
            $this->view('Parent/parentprofile');
        }
    }
?>