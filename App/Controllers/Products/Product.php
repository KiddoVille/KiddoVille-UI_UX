<?php

    #can have many functions depending on what we need 
    #info on user creation, edit delete functions and the url they are associated with
    class Products{
        use Controller;

        // The 'index' method acts as the default action for this controller.
        public function index(){
            $this->view('products/product');
        }
    }
?>