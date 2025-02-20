<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Reservation{
        use MainController;
        public function index(){
            $this->view('ReChild/reservation');
        }
    }
?>