<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class FunzoneHistory{
        use MainController;
        public function index(){
            $this->view('Parent/funzonehistory');
        }
    }
?>