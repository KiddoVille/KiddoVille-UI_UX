<?php

namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class Home
{
    use MainController;
    public function index()
    {

        $data = $this->store_stats();
        $data = $data + $this->visitors_log();
        $data = $data + $this->show_emergency();
        $this->view('Manager/Home', $data);
    }

    private function store_stats()
    {
        $data = [];
        //Child Attendance

        $AttendanceModal = new \Modal\Attendance;  //To accecess the attendance tabel modal name is Attendance 
        $Records = $AttendanceModal->where_norder(["Status" => "Present"]); //store

        $ChildModal = new \modal\Child;
        $Child = $ChildModal->findall();

        $data['Totalchild'] = count($Records) . '/' . count($Child);


        //Employee Attendance
        $EmployeeAttendanceModal = new \Modal\Employeeattendance;
        $Employeerecords = $EmployeeAttendanceModal->where_norder(['Status' => 'Present']);

        $EmployeeModal = new \modal\user;
        $User = $EmployeeModal->where_norder([], ["Role" => "User"]);

        $data['Totaluser'] = count($Employeerecords) . '/' . count($User);

        //Enroll child
        $EnrollModal = new \Modal\Enrollments;

        $currentYear = date('Y');
        $currentMonth = date('m');

        // Step 2: Generate an array of all dates in the current month
        $startOfMonth = new \DateTime("$currentYear-$currentMonth-01");
        $endOfMonth = (clone $startOfMonth)->modify('last day of this month');
        $totalEnrollments = 0;

        for ($date = $startOfMonth; $date <= $endOfMonth; $date->modify('+1 day')) {
            $currentDate = $date->format('Y-m-d');

            // Step 3: Get enrollments for the current date
            $Enrollrecords = $EnrollModal->where_norder(['EnrollDate' => $currentDate]);

            // Step 4: Add to the total count
            if (!empty($Enrollrecords)) {
                $totalEnrollments += count($Enrollrecords);
            }
        }

        // Step 5: Assign the total to the data array
        $data['Totalenroll'] = $totalEnrollments;
        return $data;
    }

    public function show_emergency()
    {
        $emodel = new \Modal\Emergency;
        $today = new \DateTime();
        $formattedDate = $today->format('Y-m-d');

        $rows = $emodel->where_norder(["Date" => $formattedDate]);
        foreach ($rows as $row) {
            $MaidModal = new \Modal\Maid;
            $maid = $MaidModal->first(["MaidID" => $row->AssigneeID]);
            $row->Name = $maid->First_Name . ' ' . $maid->Last_Name;
            $row->MaidID = $maid->MaidID;
        }

        $data['emergency'] = $rows;
        return $data;
    }

    public function emergency_delete($EmergencyID)
    {
        $emodel = new \Modal\Emergency;

        $emodel->delete($EmergencyID, 'EmergencyID');

        $this->index();
    }


    private function visitors_log()
    {
        $data = [];
        $VisitorModal = new \Modal\Visitorlog;  
        $Visitorrecords = $VisitorModal->findall();
        $data['visitorsummary'] = $Visitorrecords;
        return $data;
    }




    public function Packages()
    {
        $this->view('Manager/Packages');
    }
}
