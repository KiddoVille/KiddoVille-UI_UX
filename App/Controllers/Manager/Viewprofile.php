<?php

   namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class Viewprofile {
    use MainController;

    public function index() {
        $data = $this->all_users();
        $this->view('Manager/Viewprofile/Account', $data);
    }

    public function all_users() {
        $data = [];
        $AllusersModal = new \Modal\Allusers;
        $Allusersrecords = $AllusersModal->findAll();
        $data['allusers'] = $Allusersrecords;
        return $data;
    }

    
}
