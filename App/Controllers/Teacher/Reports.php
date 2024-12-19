<?php

    namespace Controller;

    class Reports{
        use MainController;

        public function index(){
            
            $this->view('Teacher/Reports');
           
        }
    }
?>
