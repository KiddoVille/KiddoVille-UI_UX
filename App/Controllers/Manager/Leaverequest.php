<?php

    namespace Controller;
    use App\Helpers\ManagerHelper;

    defined('ROOTPATH') or exit('Access denied');

    class Leaverequest{
        use MainController;
        public function index(){
            $Helper = new ManagerHelper;
            $Helper->Check_Manager();
            $data = $this->showleaverequest();
            $this->view('Manager/Leaverequest', $data);
        }
        

        public function showleaverequest(){
            $data = [];
            $model = new \modal\Teacher_Leave;
            $LeaveBalancemodal = new \Modal\Teacher_leave_balance;
            $records = $model->findall();

            foreach($records as $record){
                $teacherModel = new \Modal\Teacher;
                $teacherdetails = $teacherModel->first(['TeacherID' => $record->TeacherID]);

                $record->TeacherName = $teacherdetails->First_Name . ' ' . $teacherdetails->Last_Name;

                $Remainig = $LeaveBalancemodal->first(['TeacherID' => $record->TeacherID, 'LeaveType' => $record->Leave_Type]);
                if($Remainig){
                    $record->Remaining = $Remainig->Remaining;
                    $record->Used = $Remainig->Used;
                }

            }
            $data['leaverequest'] = $records;
            return $data;
        }

        public function ApproveLeave(){
            header('Content-Type: application/json');
            $request = json_decode(file_get_contents('php://input'), true);
            $response = [];
        
            $session = new \Core\Session;
            if (isset($request['LeaveID'])) {
                $TeacherLeaveModal = new \Modal\Teacher_Leave;
                $TeacherLeaveModal->update(['LeaveID' => $request['LeaveID']], ['Status' => 'Approved']);
                $response = ['success' => true, 'message' => 'Child session removed.'];
            } else {
                $response = ['success' => false, 'message' => 'No child session to remove.'];
            }
    
            echo json_encode($response);
            exit();
        }

        public function CancelLeave(){
            header('Content-Type: application/json');
            $request = json_decode(file_get_contents('php://input'), true);
            $response = [];
        
            if (isset($request['LeaveID'])) {
                $TeacherLeaveModal = new \Modal\Teacher_Leave;
                $TeacherLeaveModal->update(['LeaveID' => $request['LeaveID']], ['Status' => 'Canceled']);
                $response = ['success' => true, 'message' => 'Child session removed.'];
            } else {
                $response = ['success' => false, 'message' => 'No child session to remove.'];
            }
    
            echo json_encode($response);
            exit();
        }

        // public function teacherLeaveRequest($TeacherID){
        //     $Leavemodal = new \Modal\Teacher_leave_balance;
        //     $LeavebalanceModal = new \Modal\Teacher_Leave;
        //     $usedLeave = $Leavemodal -> usedleave($TeacherID);
        //     $allocatedLeave = $Leavemodal -> allocateLeave($TeacherID);
        //     $leaveDuration = $LeavebalanceModal -> requestLeave($TeacherID);


        //     $requestLeaveType = 'Annual Leave';
        //     if($requestLeaveType == 'Annual Leave'){

        //         $Remainig = $LeavebalanceModal->first(['TeacherID' => $TeacherID, 'Lave_Type' => 'Annual Leave']);
        //         if($Remainig->Remaining > $leaveDuration){
        //             $remainingLeave = $Remainig->Remaining  - $leaveDuration;
        //             $usedLeave = $usedLeave + $leaveDuration;


        //             $LeavebalanceModal->update(['TeacherID' => $TeacherID, 'Leave_Type' => 'Annual Leave'], ['Remaining' => $remainingLeave, 'Used' => $usedLeave]);

        //             ///accept leave request
        //         }
        //         else if($leaveDuration > 3){
        //             //Pending leave request
        //         }
        //         else if($remainingLeave == $leaveDuration){
        //             //Accept leave request
        //         }
        //         else if($remainingLeave == 0){
        //             //reject leave request
        //         } 
        //     }
        //     else if($requestLeaveType == 'Sick Leave'){
        //         if($remainingLeave > $leaveDuration){
        //             $remainingLeave = $remainingLeave - $leaveDuration;
        //             $usedLeave = $usedLeave + $leaveDuration;
        //             ///accept leave request
        //         }
        //         else if($leaveDuration > 3){
        //             //Pending leave request
        //         }
        //         else if($remainingLeave == $leaveDuration){
        //             //Accept leave request
        //         }
        //         else if($remainingLeave == 0){
        //             //pending leave request
        //         }
        //     }
        //     else if($requestLeaveType == 'Compassionate Leave'){
        //         //accept leave request
        //     }
        // }
    }