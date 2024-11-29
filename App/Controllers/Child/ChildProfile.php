<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class ChildProfile{
        use MainController;
        public function index(){

            $session = new \Core\Session;
            $session->check_login();

            $Username = $session->get('USERNAME');
            $Child_Id = $session->get('CHILD_ID');
            $Child_Name = $session->get('CHILDNAME');

            $child = new \Modal\Child;
            $children = $child->first(["Child_Id" => $Child_Id]);
            $childrenimage = getProfileImageUrl($Username, $Child_Name);

            $par = new \Modal\ParentUser;
            $parent = $par->first(["Username"=> $Username]);

            $prescription = getFilesByType("Abu", "Aahil", 'prescriptions');
            $prescription = array_map(function($filePath) {
                return ROOT . '/' . $filePath;
            }, $prescription);
            $prescription = array_values($prescription);

            $documents = getFilesByType($Username, $Child_Name, 'documents');
            $documents = array_map(function($filePath, $index) {
                $fileName = basename($filePath);
                
                return [
                    'name' => 'document' . ($index + 1),
                    'path' => ROOT . '/' . $filePath
                ];
            }, $documents, array_keys($documents));

            if($children){
                // $children->Gender = genderconvert($children->Gender);
                $children->profile = $childrenimage;
                $children->Mobile = $parent->Phone_Number;
                $children->Email = $parent->Email;
                $children->prescription = $prescription;
                $children->documents = $documents;
            }

            $data = [];
            $data[] = $children;

            $this->view('Child/childprofile',$data);
        }
    }
?>