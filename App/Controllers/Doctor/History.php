<?php

    namespace Controller;

    class History{
        use MainController;

        public function index(){
            
            $this->view('Doctor/History');
           
        }
    }
?>