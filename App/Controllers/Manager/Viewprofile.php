<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Viewprofile{
        use MainController;
        public function index(){
            $this->view('Manager/Viewprofile/childprofile');
        }
    }