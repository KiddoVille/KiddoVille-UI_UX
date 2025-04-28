<?php

    namespace Controller;
    use App\Helpers\ManagerHelper;

    defined('ROOTPATH') or exit('Access denied');

    class Profile{
        use MainController;
        public function index(){
            $Helper = new ManagerHelper;
            $Helper->Check_Manager();
            $this->view('Manager/profile/Editprofile');
        }

        public function editprofile(){
            $this->view('Manager/profile/Editprofileinput');
        }
    }
?>