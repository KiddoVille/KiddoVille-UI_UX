<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Leaves{
        use MainController;
        public function index(){
            $this->view('Maid/leaves');
        }
    }
?>