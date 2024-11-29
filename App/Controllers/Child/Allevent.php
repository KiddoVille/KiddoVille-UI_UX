<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Allevent{
        use MainController;
        public function index(){
            $this->view('Child/allevent');
        }
    }
?>