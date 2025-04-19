<?php

    namespace Controller;

    class MyUsage{
        use MainController;

        public function index(){
            $session = new \Core\Session;
            $session->check_login();
            $data = [];

            $this->view('Inventory/MyUsage', $data);
        }
    }

?>