<?php

    namespace Controller;

    class TimeSlots{
        use MainController;

        public function index(){
            
            $this->view('Doctor/TimeSlots');
           
        }
    }
?>