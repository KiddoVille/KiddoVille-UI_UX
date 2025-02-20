<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class ParentEditProfile{
        use MainController;
        public function index(){
            $this->view('ReParent/ParentEditProfile');
        }
    }
?>