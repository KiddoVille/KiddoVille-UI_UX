<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Packages{
        use MainController;
        
        public function index(){
            $packages = new \Modal\Packages;
            $result = $packages->findall();
            $data = ['packageData' => $result];
            $this->view('Manager/Packages', $data);
        }
    }
?>