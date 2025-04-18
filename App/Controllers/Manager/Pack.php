<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Pack{
        use MainController;
        
        public function index(){
            $this->view('Manager/Pack');
        }
    }
?>