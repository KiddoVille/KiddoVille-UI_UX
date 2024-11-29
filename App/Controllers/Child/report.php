<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Report{
        use MainController;
        public function index(){
            $this->view('Child/report');
        }
    }
?>