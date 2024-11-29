<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Youtube{
        use MainController;
        public function index(){
            $this->view('ReChild/youtube');
        }
    }
?>