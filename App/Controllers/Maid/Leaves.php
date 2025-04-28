<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Leaves{
        use MainController;
        public function index(){
            $leavesModel = new \Modal\MaidLeave;
            $data['leaves']  = $leavesModel->findall();
            
            $this->view('Maid/leaves', $data);
        }
        public function edit(){
            
        }
    }
?>