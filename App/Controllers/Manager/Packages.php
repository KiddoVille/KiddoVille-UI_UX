<?php

    namespace Controller;

    defined('ROOTPATH') or exit('Access denied');

    class Packages{
        use MainController;
        
        public function index(){
            $packages = new \Modal\Packages;
            $result = $packages->findall();
            $data = ['packageData' => $result];
            $this->view('Manager/Packages', $data);
        }
    }

    public function deletepackage($PackageID)
    {
        $model = new \Modal\Package;
        if ($model->delete($PackageID,"PackageID")) {
            echo "Succecfully deleted";
        } else {
            echo "Failed to delete";
        }

        header("Location: " . ROOT . "/Manager/Packages");
        exit();
    }

    public function getPackageDetails($packageId) 
{
    $model = new \Modal\Package;
    $package = $model->findById($packageId); // Assuming findById is the correct method
    
    if ($package) {
        // Return as JSON
        header('Content-Type: application/json');
        echo json_encode($package);
    } else {
        // Return error
        header('HTTP/1.1 404 Not Found');
        echo json_encode(['error' => 'Package not found']);
    }
    exit;
}

public function updatepackage($PackageID)
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

        $idArray = ['PackageID' => $PackageID];

        if($model->update($idArray, $data)){
            // Success - redirect with success message
            $_SESSION['message'] = "Package successfully updated";
            $_SESSION['message_type'] = "success";
        }
        else{
            // Failure - redirect with error message
            $_SESSION['message'] = "Failed to update package";
            $_SESSION['message_type'] = "error";
        }

        header("Location: " . ROOT . "/Manager/Packages");
        exit();
    }
    else {
        // This branch should only be reached if someone navigates directly to /updatepackage/{id}
        $package = $model->findById($PackageID);
        if ($package) {
            $this->view('Manager/updatePackage', ['package' => $package]);
        } else {
            echo "Package not found";
        }
    }
}
}
