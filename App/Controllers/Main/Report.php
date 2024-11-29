<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Report{
        use MainController;
        public function index(){

            // Use Mailgun email APIS for this

            $this->view('main/Report');
        }
    }
?>