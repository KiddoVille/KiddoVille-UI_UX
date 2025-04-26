<?php

    namespace Controller;
    use App\Helpers\ManagerHelper;

    defined('ROOTPATH') or exit('Access denied');

    class Problem{
        use MainController;
        public function index(){
            $Helper = new ManagerHelper;
            $Helper->Check_Manager();
            $this->view('Manager/problem/Problem');
        }
        public function solution(){
            $this->view('Manager/problem/addsolution');
        }
    }