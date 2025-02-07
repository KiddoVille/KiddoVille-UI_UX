<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Event{
        use MainController;
        public function index(){
            $data = $this-> show_events();
            $this->view('Manager/Event',$data);
        }


        public function addEvent(){
            $model = new \Modal\Event;
        
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [
                    'EName'   => $_POST['EName'],
                    'EDate'        => $_POST['EDate'],
                    'Edescription' => $_POST['Edescription'],
                ];
        
                if ($model->validate($data)) {
                    $result = $model->insert($data);
        
                    if ($result) {
                        echo "Failed to add Event";
                    } else {
                        echo "Event Added Successfully";
                    }
                    header("Location: " . ROOT . "/Manager/Event");
                } else {
                    $this->view('Manager/Event');
                }
            }
        }
        

        public function show_events(){
            $data = [];
            $ShowEventsModel = new \Modal\Event;
            $EventsRecords = $ShowEventsModel->findall();
            $data['allevents'] = $EventsRecords;
            return $data;
        }

        public function deleteEvent($EventID){
            $model = new \Modal\Event;
            if($model -> delete($EventID)){
                echo "Failed to delete event";
            }
            else{
                echo "Event Deleted Succesfully";
            }
            header("Location: " . ROOT . "/Manager/Event");
        }
        
    }