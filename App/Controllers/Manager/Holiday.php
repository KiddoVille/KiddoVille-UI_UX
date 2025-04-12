<?php

namespace Controller;

use Modal\Modal;

defined('ROOTPATH') or exit('Access denied');

class Holiday
{
    use MainController;
    public function index()
    {   
        $data = $this->show_holidays();
        $this->view('Manager/publish_holiday/Holiday',$data);
    }

    public function addleave()
    {
        $model = new \Modal\Holiday;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'Leave_Type' => $_POST['Leave_Type'],
                'About' => $_POST['About'],
                'Date_of_Holiday' => $_POST['Date_of_Holiday']
            ];

            if ($model->validate($data)) {
                $result = $model->insert($data);
                if ($result) {
                    echo "Holiday added successfully";                    
                } else {
                    echo "Failed to add holiday.";
                }
                
                        
                header("Location: " . ROOT . "/Manager/Holiday");

            } else {
                $this->view('Manager/publish_holiday/Holiday');
            }
        }
    }

    public function show_holidays(){
        $data = [];
        $ShowHolidayModel = new \Modal\Holiday;
        $HolidayRecords = $ShowHolidayModel -> findall();
        $data['allholidays'] = $HolidayRecords;
        return $data;
    }

    public function deleteholiday($HolidayID){
        $model = new \Modal\Holiday;
        if ($model->delete($HolidayID)) {
            echo "Successfully deleted";
        } else {
            echo "Failed to delete";
        }
        header("Location: " . ROOT . "/Manager/Holiday");
        exit();
    }
    
}
