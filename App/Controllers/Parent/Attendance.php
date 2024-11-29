<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Attendance{
        use MainController;
        public function index(){
            $this->view('Parent/Attendance');
        }
    }
?>