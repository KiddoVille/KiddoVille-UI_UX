<?php

namespace Controller;

use Modal\Modal;

defined('ROOTPATH') or exit('Access denied');

class Emergency
{
    use MainController;
    public function index()
    {   
        $data = $this->show_emergency();
        $this->view('Manager/Home',$data);
    }
    
      
        public function show_emergency(){
            $data = [];
            $model= new \Modal\Emergency;
            $Records = $model -> getallemergencywithmaidName();
            $data['allemergency'] = $Records;
            return $data;
        }

        public function deleteEmergency($EmergencyID){
            $model = new \Modal\Emergency;
            if ($model->delete($EmergencyID)) {
                echo "Successfully deleted";
            } else {
                echo "Failed to delete";
            }
            header("Location: " . ROOT . "/Manager/Home");
            exit();
        }
    
}
