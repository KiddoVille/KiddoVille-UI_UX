<?php

   namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class Viewprofile {
    use MainController;

    public function index() {
        $this->view('Manager/Viewprofile/Account');
    }

    public function store_users() {
        header('Content-Type: application/json');
    
        // Get the request data from the JSON request body
        $requestData = json_decode(file_get_contents("php://input"), true);
        
        // Get role and ID from request
        $Role = isset($requestData['role']) ? $requestData['role'] : 'All';
        $UserID = isset($requestData['id']) ? $requestData['id'] : null; // Default is null if not provided
    
        $UsersModal = new \Modal\User;
        $Usersrecords = $UsersModal->findAll();
    
        // Remove "Manager" role
        $Usersrecords = array_filter($Usersrecords, function ($user) {
            return $user->Role !== "Manager";
        });
    
        // Filter by Role if specified
        if ($Role !== 'All') {
            $Usersrecords = array_filter($Usersrecords, function ($user) use ($Role) {
                return $user->Role === $Role;
            });
        }
    
        // Filter by UserID if provided
        if (!empty($UserID)) {
            $Usersrecords = array_filter($Usersrecords, function ($user) use ($UserID) {
                return $user->UserID == $UserID;
            });
        }
    
        // Process users to fetch full name from related tables
        foreach ($Usersrecords as $user) {
            switch ($user->Role) {
                case "User":
                    $UserModal = new \Modal\ParentUser;
                    break;
                case "Teacher":
                    $UserModal = new \Modal\Teacher;
                    break;
                case "Maid":
                    $UserModal = new \Modal\Maid;
                    break;
                case "Receptionist":
                    $UserModal = new \Modal\Receptionist;
                    break;
                case "Doctor":
                    $UserModal = new \Modal\Doctor;
                    break;
                default:
                    continue 2; // Skip if role is not matched
            }

            if($user->Role == 'User'){
                $user->Role = 'Parent';
            }
    
            $Userdata = $UserModal->first(["UserID" => $user->UserID]);
            if ($Userdata) {
                $user->Name = $Userdata->First_Name . ' ' . $Userdata->Last_Name;
            }
        }
    
        // Return filtered and processed data
        if (empty($Usersrecords)) {
            echo json_encode(['success' => false, 'message' => 'No data found for the selected filters']);
        } else {
            echo json_encode(['success' => true, 'data' => array_values($Usersrecords)]);
        }
    }    
}
