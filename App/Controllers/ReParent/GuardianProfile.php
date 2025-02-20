<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class GuardianProfile{
        use MainController;
        public function index(){
            $this->view('ReParent/GuardianProfile');
        }
    }
?>