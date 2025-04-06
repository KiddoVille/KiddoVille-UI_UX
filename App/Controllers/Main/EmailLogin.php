<?php

namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class EmailLogin
{
    use MainController;
    public function index($data = null)
    {
        $session = new \Core\Session;
        $session->check_login();

        $UserID = $session->get('USERID');
        $UserModal = new \Modal\User;
        $Userdata = $UserModal->first(['UserID' => $UserID]);

        if($Userdata->Role == "User"){
            $ParentModal = new \Modal\ParentUser;
            $Person = $ParentModal->first(['ParentID' => $Userdata->UserID]);
        }
        else if($Userdata->Role == "Teacher"){
            $TeacherModal =  new \Modal\Teacher;
            $Person = $TeacherModal->first(['TeacherID' => $Userdata->UserID]);
        }
        else if($Userdata->Role == "Maid"){
            $MaidModal = new \Modal\Maid;
            $Person = $MaidModal->first(['MaidID' => $Userdata->UserID]);
        }
        else if($Userdata->Role == "Receptionist"){
            $ReceptionistModal = new \Modal\Receptionist;
            $Person = $ReceptionistModal->first(['ReceptionistID' => $Userdata->UserID]);
        }
        else if($Userdata->Role == "Doctor"){
            $DoctorModal = new \Modal\Doctor;
            $Person = $DoctorModal->first(['DoctorID' => $Userdata->UserID]);
        }
        else if($Userdata->Role == "Manager"){
            $ManagerModal = new \Modal\Manager;
            $Person = $ManagerModal->first(['ManagerID' => $Userdata->UserID]);
        }
        // else{
        //     redirect('Main/Login');
        // }
        $data = [];
        $data['Email'] = $Person->Email;

        $this->view('main/EmailLogin', $data);
    }
}

?>