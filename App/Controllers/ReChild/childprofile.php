<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Childprofile{
        use MainController;
        public function index(){
            $this->view('ReChild/childprofile');
        }
    }
?>