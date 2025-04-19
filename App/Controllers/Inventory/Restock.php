<?php

    namespace Controller;

    class Restock{
        use MainController;

        public function index(){
            $session = new \Core\Session;
            $session->check_login();
            $data = [];

            $this->view('Inventory/Restock', $data);
        }
    }

?>