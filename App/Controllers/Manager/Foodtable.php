<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Foodtable{
        use MainController;
        public function index(){
            $this->view('Manager/Foodtable');
        }
    }