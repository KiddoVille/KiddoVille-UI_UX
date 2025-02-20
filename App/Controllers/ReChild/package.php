<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Package{
        use MainController;
        public function index(){
            $this->view('ReChild/package');
        }
    }
?>