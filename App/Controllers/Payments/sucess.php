<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Sucess{
        use MainController;
        public function index(){
            $this->view('Payments/Sucess');
        }
    }
?>