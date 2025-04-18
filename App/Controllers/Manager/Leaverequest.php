<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Leaverequest{
        use MainController;
        public function index(){
            $this->view('Manager/Leaverequest');
        }
    }