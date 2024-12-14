<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class PaymentForm{
        use MainController;
        public function index(){
            $this->view('Child/paymentform');
        }
    }
?>