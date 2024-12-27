<?php
    defined('ROOTPATH') or exit('Access denied');

    if($_SERVER['SERVER_NAME'] == 'localhost'){

        //Database config
        // define('DBNAME','my_db');
        // define('DBHOST','localhost');
        // define('DBUSER', 'root');
        // define('DBPASS', '');
        // define('DBDRIVER', '');

        define('DBNAME','abdullaaurad_my_db');
        define('DBHOST','mysql-abdullaaurad.alwaysdata.net');
        define('DBUSER', '387928_abdulla');
        define('DBPASS', 'yunus2017');
        define('DBDRIVER', 'mysql');

        define('IMAGE',"http://localhost/MVC/Public/Assets/Images");
        define('JS',"http://localhost/MVC/Public/Assets/JS");
        define('CSS',"http://localhost/MVC/Public/Assets/CSS");
        define('VIDEO',"http://localhost/MVC/Public/Assets/videos");
        define('ROOT',"http://localhost/MVC/Public");
        define('UPLOADS',"http://localhost/MVC/Public/Uploads");
    }
    else{
        
    }

    define ('APP_NAME', "KIDDOVILLE");
    define ("APP_DESC", "Daycare web site");

    // true means show errors
    define ('DEBUG', true);


?>