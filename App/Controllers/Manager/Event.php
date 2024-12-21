<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Event{
        use MainController;
        public function index(){
            $this->view('Manager/Event');
        }
    }