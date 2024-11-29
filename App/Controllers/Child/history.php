<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class History{
        use MainController;
        public function index(){
            $this->view('Child/history');
        }
    }
?>