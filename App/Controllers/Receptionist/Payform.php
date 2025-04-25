<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Payform{
        use MainController;
        public function index(){
            $this->view('Receptionist/payform');
        }
    }
?>