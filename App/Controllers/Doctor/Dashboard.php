<?php

    namespace Controller;

    class Dashboard{
        use MainController;

        public function index(){
            
            $this->view('Doctor/Dashboard');
           
        }
    }
?>