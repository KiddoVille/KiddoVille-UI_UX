<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class ChildEditProfile{
        use MainController;
        public function index(){
            $this->view('ReChild/ChildEditProfile');
        }
    }
?>