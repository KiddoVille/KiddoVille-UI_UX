<?php

namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class ChildEditProfile
{
    use MainController;
    public function index()
    {

        $session = new \Core\Session;
        $session->check_login();

        $Username = $session->get('USERNAME');
        $Child_Id = $session->get('CHILD_ID');

        $child = new \Modal\Child;
        $children = $child->first(["Child_Id" => $Child_Id]);

        $session->set('CHILDNAME', $children->First_Name);
        $Child_Name = $session->get('CHILDNAME');

        $par = new \Modal\ParentUser;
        $parent = $par->first(["Username" => $Username]);

        $childrenimage = getProfileImageUrl($Username, $Child_Name);

        $prescription = getFilesByType($Username, $Child_Name, 'prescriptions');
        $prescription = array_map(function ($filePath) {
            return ROOT . '/' . $filePath;
        }, $prescription);
        $prescription = array_values($prescription);

        $documents = getFilesByType($Username, $Child_Name, 'documents');
        $documents = array_map(function ($filePath, $index) {
            $fileName = basename($filePath);

            return [
                'name' => 'document' . ($index + 1),
                'path' => ROOT . '/' . $filePath
            ];
        }, $documents, array_keys($documents));

        if ($children) {
            $children->profile = $childrenimage;
            $children->Mobile = $parent->Phone_Number;
            $children->Email = $parent->Email;
            $children->prescription = $prescription;
            $children->documents = $documents;
        }

        $data = [];
        $data[] = $children;

        $this->view('Child/childeditprofile', $data);
    }

    public function Savedetails()
    {
        defined('ROOTPATH') or define('ROOTPATH', __DIR__);
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        header('Content-Type: application/json');

        $response = [
            'success' => true,
            'message' => '',
            'errors' => []
        ];

        try {
            $session = new \Core\Session;
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                throw new \Exception('Invalid request method.');
            }

            if (!empty($_POST)) { // Ensure $_POST is not empty
                
                $files = $_POST['remaining_files'];
                $images = $_POST['remaining_images'];
            
                // Unset files and images from $_POST
                unset($_POST['remaining_files']);
                unset($_POST['remaining_images']);

                $_SESSION['test'] = $_POST;
                $Child_Id = $session->get('CHILD_ID');

                $child = new \Modal\Child;
                $child->update(['Child_Id'=>$Child_Id], $_POST);
            }
            
            $Username = $session->get('USERNAME');
            $Child_Name = $session->get('CHILDNAME');

            // Handle file uploads
            if (isset($_FILES['profileimage'])) {
                $profileimage = $_FILES['profileimage'];
                $_SESSION['test']['profile'] = $profileimage;

                uploadFile($Username, $Child_Name, 'profile', $profileimage);
            }

            if (isset($files)) {
                $_SESSION['test'] = $files;
                foreach ($files as $file) { // Correct syntax: loop through each item in $files
                    $results = uploadFileURL($Username, $Child_Name, 'documents', $file);
                    $_SESSION['error'] = $results;
                }
            }
            
            if (isset($images)) {
                foreach ($images as $image) { // Correct syntax: loop through each item in $images
                    uploadFileURL($Username, $Child_Name, 'prescriptions', $image);
                }
            }            

        } catch (\Exception $e) {
            $response['success'] = false;
            $response['errors'][] = $e->getMessage();
        }

        echo json_encode($response);
        exit;
    }
}
