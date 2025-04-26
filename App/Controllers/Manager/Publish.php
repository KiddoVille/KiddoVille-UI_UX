<?php

    namespace Controller;
    use App\Helpers\ManagerHelper;

    defined('ROOTPATH') or exit('Access denied');

    class Publish{
        use MainController;
        public function index(){
            $Helper = new ManagerHelper;
            $Helper->Check_Manager();
            $this->view('Manager/publish holiday/Publish');
        }
}