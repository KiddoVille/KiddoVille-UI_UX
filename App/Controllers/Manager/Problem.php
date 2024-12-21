<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Problem{
        use MainController;
        public function index(){
            $this->view('Manager/problem/Problem');
        }
        public function solution(){
            $this->view('Manager/problem/addsolution');
        }
    }