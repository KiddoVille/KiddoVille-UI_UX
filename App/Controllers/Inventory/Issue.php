<?php

    namespace Controller;

    class Issue{
        use MainController;

        public function index(){
            $session = new \Core\Session;
            $session->check_login();
            $data = [];

            $this->view('Inventory/Issue', $data);
        }
    }
?>