<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Foodplane{
        use MainController;
        public function index(){
            $this->view('Manager/Foodplane/Food');
        }
        public function editblog(){
            $this->view('Manager/Blog/Editbloginput');
        }
    }