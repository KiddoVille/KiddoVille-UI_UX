<?php

    namespace Controller;
    use App\Helpers\ChildHelper;
    defined('ROOTPATH') or exit('Access denied');

    class Attendance{
        use MainController;
        
        public function index(){
            $childModel = new \Modal\Child();
            $attend = new \Modal\Attendance();
            
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $childHelper= new ChildHelper();
                $datas['childrens'] =  $childModel->findall();
                foreach($datas['childrens'] as $child){
                    $child->ageGroup = $childHelper->getAgeGroup($child->DOB);
                }
                
                // Initialize empty array to hold filtered children
                $data['children'] = [];
                
                // Filter children by selected age group
                foreach($datas['childrens'] as $child) {
                    if($child->ageGroup === $_POST['ageGroup']){
                        // Add this child to the filtered array
                        $data['children'][] = $child;
                    }
                }

                foreach($data['children'] as $child){
                    $attends = $attend->where_norder(['ChildID' => $child->ChildID, 'Start_Date' => date('Y-m-d')],[]);
                  
                    $child->Start_Time = $attends[0]->Start_Time;
                    $child->End_Time = $attends[0]->End_Time;

                }
                $this->view('Receptionist/attendance',$data);
            }else{
            
                
                $data['children'] =  $childModel->findall();
                foreach($data['children'] as $child){
                    $attends = $attend->where_norder(['ChildID' => $child->ChildID, 'Start_Date' => date('Y-m-d')],[]);
                    //  var_dump($attends);
                    //  exit();
                    if(isset($attends[0])){
                    $child->Start_Time = $attends[0]->Start_Time;
                    $child->End_Time = $attends[0]->End_Time;
                    }
                    
                   
                    //   var_dump($child);
                    //  exit();
                    // $child->End_Time = $attends[0]->End_Time;

                }
                
                // var_dump($data['children']);
                // exit();
          $this->view('Receptionist/attendance',$data); 
        }  
           
        }
        public function markAttendance(){
            $AttendanceModel = new \Modal\Attendance();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Directly take input from the form
                
                $data = [
                    'ChildID'   => $_POST['childID'],
                    'Start_Date'    => date('Y-m-d'),
                    'Start_Time'        => date('H:i:s'),
                    'Status'        => 'Present',
                ];
               
                if ($AttendanceModel->validate($data)) {
                    // Insert the data into the database
                    $AttendanceModel->insert($data);
                    // Redirect to success page or display a success message
                    redirect('Receptionist/attendance');
                } 
        }
        //    $this->view('Receptionist/attendance');
        }
        public function finAttendance(){
            $AttendanceModel = new \Modal\Attendance();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Directly take input from the form
                
                $data = [
                    
                    'End_Time'        => date('H:i:s'),
                    'Status'        => 'Departed',
                    
                ];

                
                if ($AttendanceModel->validate($data)) {
                    // Insert the data into the database
                    $AttendanceModel->update_withid($_POST['childID'],$data,'ChildID');
                    // Redirect to success page or display a success message
                    redirect('Receptionist/attendance');
                } 
        }

        
    }
    public function search()
        {
            $AttendanceModel = new \Modal\Attendance();
        
            if (!empty($_POST['ChildID'])) {
                $childId = $_POST['ChildID'];
                $data['children'] = $AttendanceModel->where_norder(['ChildID' => $childId,'Start_Date'=> date('Y-m-d')], []);
                $childModel = new \Modal\Child();
                $child = $childModel->where_norder(['ChildID' => $childId], []);
                if(isset($child[0])){
                    $data['children'][0]->First_Name = $child[0]->First_Name;
                }
                
                // var_dump($data['children']);
                
                
            }
            $this->view('Receptionist/attendance', $data);
            
        }
}
    
    ?>