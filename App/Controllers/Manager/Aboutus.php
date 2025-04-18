<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Aboutus{
        use MainController;
        public function index(){
            $this->view('Manager/aboutus/Editaboutus');
        }

        public function editaboutus(){
            $this->view('Manager/aboutus/Editaboutusinput');
        }
    }