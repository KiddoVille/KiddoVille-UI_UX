<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Payment{
        use MainController;
        public function index(){
            $this->view('Parent/payment');
        }
    }
?>