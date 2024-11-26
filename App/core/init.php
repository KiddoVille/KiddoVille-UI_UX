<?php 
    spl_autoload_register(function($classname){
        $filename = 'C:/xampp/htdocs/MVC/App/Modals/' . ucfirst($classname) . ".php";
        require $filename;
    });

    #so it will be easier to include all the files inside core without requiring one by one 
    require 'config.php';
    require 'functions.php';
    require 'Database.php';
    require 'Modal.php';
    require 'Controller.php';
    require 'App.php';
?>