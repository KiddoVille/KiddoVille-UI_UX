<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Meal{
        use MainController;
        public function index(){
            $this->view('ReParent/meal');
        }
    }
?>