<?php

    namespace Controller;

    class Prescriptions{
        use MainController;

        public function index(){
            
            $this->view('Doctor/Prescriptions');
           
        }
    }
?>