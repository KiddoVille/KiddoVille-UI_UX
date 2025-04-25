<?php
    namespace Controller;

    class Dashboard{
         use MainController;

        public function index(){

           $doctor = new \Modal\Doctor;
           $child = new \Modal\Child;
           $slot = new \Modal\TimeSlot;
           $appoint = new \Modal\Appointment;

           $DoctorID = $this->findID();

           $row = $slot->where_norder(['DoctorID' => $DoctorID, 'Slot_Date' => date('Y-m-d')]);
            // var_dump($row);
            // exit();
           foreach($row as $time){
            // var_dump($time);
            // exit();
            
               // 
                if($time->Status == 'available'){
                    $data[] = [
                        'SlotID' => $time->SlotID,
                        'Start_Time' => $time->Start_Time,
                        'End_Time' => $time->End_Time,
                        'Status' => $time->Status,
                        'ChildName' => 'No Booking'
                    ];
                }else{
                    $appointments = $appoint->where_norder(['SlotID' =>$time->SlotID]);
                    $childInfo = $child->first(['ChildID' => $appointments[0]->ChildID]);
                    // var_dump($appointments[0]->AppointmentID);
                    // exit();
                    $data[] = [
                        'SlotID' => $appointments[0]->AppointmentID,
                        'Start_Time' => $time->Start_Time,
                        'End_Time' => $time->End_Time,
                        'Status' => $time->Status,
                        'ChildName' => $childInfo->First_Name . ' ' . $childInfo->Last_Name,
                    ];
                
                }
        //    var_dump($data);
        //         exit()
           
        }
        
        if(!empty($row)){
            $this->view('Doctor/Dashboard',['times' => $data]);
       }else{
        $this->view('Teacher/Funzone', ['message' => 'Error ']);
       }
    }
        
        public function findID(){

            $doctor = new \Modal\Doctor;
            $session = new \Core\Session;
    
            $userID = $session->get('USERID'); 
            // var_dump($userID);
            // exit();
    
            $row = $doctor->first(['UserID' => $userID]);
            $result = $row->DoctorID;
    
            return $result;
    
    
        }

        public function editBooking(){
            $DoctorID = $this->findID();

            
           $doctor = new \Modal\Doctor;
           $child = new \Modal\Child;
           $slot = new \Modal\TimeSlot;
           $appoint = new \Modal\Appointment;

        }
     }
?>