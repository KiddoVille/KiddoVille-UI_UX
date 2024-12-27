<?php 
    defined('ROOTPATH') or exit('Access denied');

    spl_autoload_register(function($classname) {
        $classnameParts = explode("\\", $classname);
        $classname = end($classnameParts);

        $directories = [
            'C:/xampp/htdocs/MVC/App/Modals/',
            'C:/xampp/htdocs/MVC/App/core/',
            'C:/xampp/htdocs/MVC/App/Controllers/',
        ];
    
        foreach ($directories as $directory) {
            $filename = $directory . ucfirst($classname) . ".php";
            if (file_exists($filename)) {
                require $filename;
                return;
            }
        }
        trigger_error("Unable to load class: $classname", E_USER_ERROR);
    });

    #so it will be easier to include all the files inside core without requiring one by one 
    require 'config.php';
    require 'functions.php';
    require 'Database.php';
    require 'Modal.php';
    require 'Controller.php';
    require 'App.php';
    require 'Mailer.php';
    require 'SMS.php';
    require 'Whatsapp.php';
    require 'Quail.php';
    require 'Payment.php';
?>