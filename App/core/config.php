<?php
    if($_SERVER['SERVER_NAME'] == 'localhost'){

        //Database config
        define('DBNAME','my_db');
        define('DBHOST','localhost');
        define('DBUSER', 'root');
        define('DBPASS', '');
        define('DBDRIVER', '');

        define('IMAGE',"http://localhost/MVC/Public/Assets/Images");
        define('JS',"http://localhost/MVC/Public/Assets/JS");
        define('CSS',"http://localhost/MVC/Public/Assets/CSS");
        define('VIDEO',"http://localhost/MVC/Public/Assets/videos");
    }

    define ('APP_NAME', "KIDDOVILLE");
    define ("APP_DESC", "Daycare web site");

    // true means show errors
    define ('DEBUG', true);


?>