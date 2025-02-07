<?php

namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class Packages
{
    use MainController;

    public function index()
    {
        $packages = new \Modal\Package;
        $result = $packages->findall();
        $data = ['packageData' => $result];
        $this->view('Manager/Packages', $data);
    }

    public function addpackage()
    {
        $model = new \Modal\Package;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $features = isset($_POST['features']) ? $_POST['features'] : '';

            $data = [
                'Name' => $_POST['Name'],
                'Price' => $_POST['Price'],
                'Description' => $_POST['Description'],
                'AgeGroup' => $_POST['AgeGroup'],
                'FoodAddons' => $features == 'FoodAddons' ? 1 : 0,
                'AllHours' => $features == 'AllHours' ? 1 : 0,
                'Everything' => $features == 'Everything' ? 1 : 0,
                'Monday' => isset($_POST['Monday']) ? 1 : 0,
                'Tuesday' => isset($_POST['Tuesday']) ? 1 : 0,
                'Wednesday' => isset($_POST['Wednesday']) ? 1 : 0,
                'Thursday' => isset($_POST['Thursday']) ? 1 : 0,
                'Friday' => isset($_POST['Friday']) ? 1 : 0,
                'Saturday' => isset($_POST['Saturday']) ? 1 : 0,
                'Sunday' => isset($_POST['Sunday']) ? 1 : 0
            ];          

            if ($model->validate($data)) {
                $result = $model->insert($data);
                if ($result) {
                    echo "Package Succecfully added";
                } else {
                    echo "Failed to add package";
                }


                redirect("Manager/Packages");
            } else {
                $this->view('Manager/publish_holiday/Holiday');
            }
        }
    }

    public function deletepackage($PackageID)
    {
        $model = new \Modal\Package;
        if ($model->delete($PackageID)) {
            echo "Succecfully deleted";
        } else {
            echo "Failed to delete";
        }

        header("Location: " . ROOT . "/Manager/Packages");
        exit();
    }
};
