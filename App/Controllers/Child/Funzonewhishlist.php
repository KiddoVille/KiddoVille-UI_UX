<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class FunzoneWhishlist{
        use MainController;
        public function index(){
            $this->view('Child/funzonewhishlist');
        }
    }
?>