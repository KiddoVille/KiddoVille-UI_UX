<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Message{
        use MainController;
        public function index(){
            $this->view('Child/message');
        }
    }
?>