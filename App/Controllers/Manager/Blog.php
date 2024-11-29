<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Blog{
        use MainController;
        public function index(){
            $this->view('Manager/Blog/Editblog');
        }
        public function editblog(){
            $this->view('Manager/Blog/Editbloginput');
        }
    }