<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class PaymentSheet{
        use MainController;
        public function index(){
            $this->view('Parent/PaymentSheet');
        }
    }
?>