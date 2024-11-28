<?php

    namespace Controller;

    class Students{
        use MainController;

        public function index(){
            
            $this->view('Teacher/Students');
           
        }
    }
?>
