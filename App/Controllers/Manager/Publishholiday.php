<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Publishholiday{
        use MainController;
        public function index(){
            $this->view('Manager/publish holiday/Publishholyday');
        }
}