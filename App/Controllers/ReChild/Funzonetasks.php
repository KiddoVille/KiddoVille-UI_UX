<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class FunzoneTasks{
        use MainController;
        public function index(){
            $this->view('ReChild/funzonetasks');
        }
    }
?>