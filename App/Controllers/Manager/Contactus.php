<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Contactus{
        use MainController;
        public function index(){
            $this->view('Manager/contactus/Editcontactus');
        }

        public function editcontactus(){
            $this->view('Manager/contactus/Editcontactusinput');
        }
    }