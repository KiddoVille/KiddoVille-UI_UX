<?php

    //to work with pages that do not exist in our code but the user tries to access using the url
    class _404{
        use Controller;

        // The 'index' method acts as the default action for this controller.
        public function index(){
            echo "404 not found controller";
        }
    }
?>