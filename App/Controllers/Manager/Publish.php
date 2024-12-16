<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Publish{
        use MainController;
        public function index(){
            $this->view('Manager/publish holiday/Publish');
        }
}