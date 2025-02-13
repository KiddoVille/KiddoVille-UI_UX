<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class FunzoneHome{
        use MainController;
        public function index(){
            $this->view('Child/funzonehome');
        }
    }
?>