<?php

namespace Controller;

defined('ROOTPATH') or exit('Access denied');

use Core\Mailer;

class Viewprofile
{
    use MainController;

    public function index()
    {
        $user = new \Modal\User;
        $result = $user->findall();
        $data = ['userData' => $result];
        $this->view('Manager/Viewprofile/Account', $data);
    }

    public function store_users()
    {
        header('Content-Type: application/json');
        $requestData = json_decode(file_get_contents("php://input"), true);
        $TeacherModal = new \Modal\Teacher;
        $MaidModal = new \Modal\Maid;
        $ChildModal = new \Modal\Child;
        $DoctorModal = new \Modal\Doctor;
        $ManagerModal = new \Modal\Manager;
        $ReceptionistModal = new \Modal\Receptionist;
        $ParentModal = new \Modal\ParentUser;

        // Get role and ID from request
        $Role = isset($requestData['role']) ? $requestData['role'] : 'All';
        $UserID = isset($requestData['id']) ? $requestData['id'] : null; // Default is null if not provided

        $UsersModal = new \Modal\User;
        $Usersrecords = $UsersModal->findAll();

        foreach ($Usersrecords as $User) {
            // Fetch partner data based on role.
            switch ($User->Role) {
                case 'User':
                    $Data = $ParentModal->first(["UserID" => $User->UserID]);
                    break;
                case 'Teacher':
                    $Data = $TeacherModal->first(["UserID" => $User->UserID]);
                    break;
                case 'Maid':
                    $Data = $MaidModal->first(["UserID" => $User->UserID]);
                    break;
                case 'Child':
                    $Data = $ParentModal->first(["UserID" => $User->UserID]);
                    break;
                case 'Doctor':
                    $Data = $DoctorModal->first(["UserID" => $User->UserID]);
                    break;
                case 'Manager':
                    $Data = $ManagerModal->first(["UserID" => $User->UserID]);
                    break;
                case 'Receptionist':
                    $Data = $ReceptionistModal->first(["UserID" => $User->UserID]);
                    break;
                default:
                    $Data = null;
                    break;
            }
    
            if ($Data && !empty($Data->Image)) {
                $imageData = $Data->Image;
                $imageType = $Data->ImageType;
                $base64Image = (!empty($imageData) && is_string($imageData))
                    ? 'data:' . $imageType . ';base64,' . base64_encode($imageData)
                    : null
                ;
            }else{
                $base64Image = IMAGE . "/ProfilePic.png";
            }
            $User->Image = $base64Image;
        }

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

        // Return filtered and processed data
        if (empty($Usersrecords)) {
            echo json_encode(['success' => false, 'message' => 'No data found for the selected filters']);
        } else {
            echo json_encode(['success' => true, 'data' => array_values($Usersrecords)]);
        }
    }

    public function adduser()
    {
        $model = new \Modal\User;
        $mailer = new \Core\Mailer;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Prepare user data
            $otherValue = null;

            if (!empty($_POST['Role']) && $_POST['Role'] == 'Teacher') {
                $otherValue = trim($_POST['Subject']);
            } elseif (!empty($_POST['Age']) && $_POST['Role'] == 'Maid') {
                $otherValue = trim($_POST['Age']);
            }
        
            // Prepare user data
            $dataInsert = [
                'Username' => trim($_POST['Username']),
                'Password' => password_hash($_POST['Password'], PASSWORD_DEFAULT),
                'Role' => trim($_POST['Role']),
                'email' => filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL),
                'Other' => $otherValue
            ];

            $data = [
                'Username' => trim($_POST['Username']),
                'Password' => $_POST['Password'],
                'Role' => trim($_POST['Role']),
                'email' => filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)
            ];

            // Validate data
            if ($model->validate($data, $dataInsert)) {
                // Insert user
                $model->insert($dataInsert);

                    $subject = "Welcome to KiddoVille Daycare";
                    $body = $this->getWelcomeEmailTemplate($data);

                    // Send email
                    $emailResult = $mailer->send($data['email'], $subject, $body);

                    if ($emailResult) {
                        message("User added successfully. Welcome email sent!");
                    } else {
                        message("User added but email failed Sending ");
                    }

                redirect('Manager/Viewprofile');
            }
        }
    }

    private function getWelcomeEmailTemplate($userData)
    {
        $roleDisplay = ($userData['Role'] == 'User') ? 'Parent' : $userData['Role'];

        return  '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KiddoVille App Access Details</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
            font-family: \'Poppins\', Arial, sans-serif;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            overflow: hidden;
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .header {
            background-color: #f9f9ff;
            padding: 25px 0;
            text-align: center;
            border-bottom: 1px solid #eaeaea;
        }

        .header img {
            height: 60px;
            margin-bottom: 15px;
        }

        .header h2 {
            margin: 0;
            color: #2c3e50;
            font-weight: 600;
            font-size: 22px;
        }

        .content {
            padding: 30px 40px;
            color: #4a4a4a;
        }

        .greeting {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .message {
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .credentials {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border: 1px dashed #d1d9e6;
            margin-bottom: 25px;
        }

        .credentials p {
            font-size: 16px;
            margin: 10px 0;
        }

        .login-link {
            text-align: center;
            margin: 20px 0;
        }

        .login-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
        }

        .instructions {
            background-color: #f9fbfd;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            border-left: 4px solid #3498db;
        }

        .instructions h3 {
            margin-top: 0;
            color: #3498db;
            font-size: 16px;
        }

        .instructions ul {
            margin-bottom: 0;
            padding-left: 20px;
        }

        .instructions li {
            margin-bottom: 8px;
        }

        .support {
            text-align: center;
            margin: 30px 0 15px;
        }

        .support-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            margin-top: 10px;
        }

        .divider {
            height: 1px;
            background-color: #eaeaea;
            margin: 25px 0;
        }

        .social-links {
            text-align: center;
            padding: 0 0 15px;
        }

        .social-link {
            display: inline-block;
            margin: 0 8px;
            color: #95a5a6;
            text-decoration: none;
            font-size: 14px;
        }

        .footer {
            background-color: #f9f9ff;
            padding: 20px;
            text-align: center;
            font-size: 13px;
            color: #95a5a6;
            border-top: 1px solid #eaeaea;
        }

        .footer p {
            margin: 5px 0;
        }

        .address {
            margin-top: 15px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <img src="cid:kiddoLogo" alt="KiddoVille Logo">
            <h2>Welcome to KiddoVille</h2>
        </div>

        <div class="content">
            <p class="greeting">Hello, and welcome!</p>

            <div class="message">
                <p>You have been granted access to the KiddoVille application.</p>
                <p>Use the credentials below to log in to your' . htmlspecialchars($userData['Role']) . 'and get started</p>
            </div>

            <div class="credentials">
                <p><strong>Username:</strong> ' . htmlspecialchars($userData['Username']) . '</p>
                <p><strong>Password:</strong> ' . htmlspecialchars($userData['Password']) . '</p>
            </div>

            <div class="login-link">
                <a href="https://kiddoville.com/login" class="login-button">Go to Login</a>
            </div>

            <div class="instructions">
                <h3>Helpful Tips:</h3>
                <ul>
                    <li>After logging in, you may be asked to reset your password</li>
                    <li>Keep your credentials secure and private</li>
                    <li>If you have trouble logging in, contact support</li>
                </ul>
            </div>

            <div class="support">
                <p>Need help?</p>
                <a href="https://kiddoville.com/support" class="support-button">Contact Support</a>
            </div>

            <div class="divider"></div>

            <div class="social-links">
                <a href="https://facebook.com/kiddoville" class="social-link">Facebook</a> •
                <a href="https://instagram.com/kiddoville" class="social-link">Instagram</a> •
                <a href="https://twitter.com/kiddoville" class="social-link">Twitter</a> •
                <a href="https://pinterest.com/kiddoville" class="social-link">Pinterest</a>
            </div>
        </div>

        <div class="footer">
            <p>&copy; ' . date("Y") . ' KiddoVille Inc. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> • <a href="#">Terms of Service</a></p>
            <div class="address">
                KiddoVille Inc.,<br>
                106/37 , Nawagampura, Stace Road, Colombo 14, Sri Lanka<br>
                Phone: +94 71 481 0928<br>
            </div>
        </div>
    </div>
</body>
</html>';
    }

    public function handleusername(){
        header('Content-Type: application/json');
        $requestData = json_decode(file_get_contents("php://input"), true);

        $Username = isset($requestData['Username']) ? $requestData['Username'] : null ;

        if(!empty($Username)){
            $model = new \Modal\User;
            $result = $model->first(["Username" => $Username]);

            if($result){
                echo json_encode(['success' => false, 'message' => 'Username already exists']);
            }else{
                echo json_encode(['success' => true, 'message' => 'Username is available']);
            }
        }
    }

    public function deleteuser()
    {
        header('Content-Type: application/json');
        $requestData = json_decode(file_get_contents("php://input"), true);

        $UserID = isset($requestData['UserID']) ? $requestData['UserID'] : null ;
        $model = new \Modal\User;
        if(!empty($UserID)){
            $model->update_withid($UserID, ["Block" => 1], "UserID");
            echo json_encode(['success' => true, 'message' => 'Deleted User Successfully']);
        }else{
            echo json_encode(['success' => false, 'message' => 'Error in deleting user']);
        }

    }
}
