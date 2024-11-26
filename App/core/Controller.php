<?php
    #how we check if a file exit and load it if it exists
    trait Controller{
        public function view($name){
            $filename = "../App/Views/".$name."view.php";
            if(file_exists($filename)){
                require $filename;
            }
            else{
                $filename = "../App/Views/404view.php";
                require $filename;
            }
        }
    }