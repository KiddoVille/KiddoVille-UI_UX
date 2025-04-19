<?php

    namespace Controller;

    class Dashboard{
        use MainController;

        public function index(){
            $session = new \Core\Session;
            $session->check_login();
            $data = [];

            $this->view('Inventory/UsageReport', $data);
        }
    }

?>