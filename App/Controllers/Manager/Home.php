<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Home{
        use MainController;
        public function index(){
            $this->view('Manager/Home');
        }
        
        public function Packages(){
            $this->view('Manager/Packages');
        }
    }
