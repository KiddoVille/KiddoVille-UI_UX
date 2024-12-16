<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Schedule{
        use MainController;
        public function index(){
            $this->view('Manager/schedule/Schedule');
        }
    }