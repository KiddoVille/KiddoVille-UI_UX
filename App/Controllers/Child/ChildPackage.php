<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class ChildPackage{
        use MainController;
        public function index(){
            $this->view('Child/ChildPackage');
        }
    }
?>