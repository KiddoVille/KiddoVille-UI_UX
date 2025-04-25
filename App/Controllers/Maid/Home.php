<?php

    namespace Controller;
    use App\Helpers\ChildHelper;
    defined('ROOTPATH') or exit('Access denied');

    class Home{
        use MainController;
        public function index(){
            $childModel = new \Modal\Child();
            $AttendanceModel = new \Modal\Attendance();
            $maidassignModel = new \Modal\AssignMaid();
            $maidattendance = new \Modal\Employeeattendance;
            $maiddata = new \Modal\Maid;
            $maids =  $maiddata->findall();
            foreach($maids as $maid){
                $attend = $maidattendance->where_norder(['UserID' => $maid->UserID, 'Start_Date' => date('Y-m-d')],[]);
                if(isset($attend[0])){
                    $maid->Status = $attend[0]->Status;
                }
            }
            $attendchilds = $AttendanceModel->where_order(['Status' => 'Present' , 'Start_Date' => date('Y-m-d')], [], 'Start_Time');
           
                $assign = $maidassignModel->where_norder(['Date' => date('Y-m-d')],[]);

                $presentChildIds = array_map(function($child) {
                    return $child->ChildID;
                }, $attendchilds);
            //var_dump($presentChildIds);    
               
                $assignedChildIds = array_map(function($assig) {
                    return $assig->ChildID;
                }, $assign);
           // var_dump($assignedChildIds);    
              
                $notAssignedButPresent = array_diff($presentChildIds, $assignedChildIds);
                $presentMaids = [];
    
                foreach ($maids as $maid) {
                    if (isset($maid->Status) && $maid->Status === 'Present') {
                        $presentMaids[] = $maid;
                    }
                }
                
                foreach ($presentMaids as $maid) {
                   
                    $maidAssignments = $maidassignModel->where_norder(['MaidID' => $maid->MaidID, 'Date' => date('Y-m-d')], []);
                    
        
                    if (is_array($maidAssignments)) {
                        $maid->AssignmentCount = count($maidAssignments);
                       
                    } else {
                       
                        $maid->AssignmentCount = 0;
                       
                    }
                }
                $children = [];
                $childHelper= new ChildHelper();
                foreach ($notAssignedButPresent as $childID) {
                    $childData = $childModel->where_norder(['ChildID' => $childID], []);
                    if (is_array($childData) && !empty($childData)) {
                        $child = $childData[0];        
                        $child->AgeGroup = $childHelper->getAgeGroup($child->DOB);       
                        $children[] = $child;
                    }
                }
                //  foreach ($children as $child) {
                //     foreac
                //  }
                     
                
            
               
             
        //     show($children);
        //    exit();
             
            
             $this->view('Maid/home');
        }
    }
?>