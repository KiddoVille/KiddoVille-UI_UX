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
    }