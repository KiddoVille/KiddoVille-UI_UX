<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Staffallocation{
        use MainController;
        public function index(){
            $this->view('Manager/staffallocation/Staff');
        }
    }