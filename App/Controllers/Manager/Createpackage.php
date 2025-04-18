<?php

namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class CreatePackage
{
    use MainController;

    public function index()
    {
        // Initialize data for the view
        $data = ['values' => [], 'errors' => []];

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $this->handlePackageForm();
            if (empty($data['errors'])) { // Redirect only if no errors exist
                redirect('Manager/Packages');
            }
        }

        // Load the view
        $this->view('Manager/CreatePackage', $data);
    }

    private function handlePackageForm()
    {
        // Initialize data array
        $data = ['values' => $_POST, 'errors' => []];

        // Define required fields
        $requiredFields = ['name', 'services', 'price', 'days'];

        $package = new \Modal\Packages;
        $result = $package->where(['name'=> $_POST['name']]);

        if(!empty($result)){
            $data['errors']['name'] = 'Package name already exists';
        }

        // Validate required fields
        if (!checkRequiredFields($requiredFields, $_POST)) {
            $data['errors']['general'] = 'All fields are required.';
        }
        //Validate name
        if(is_numeric($data['values']['name']) || strlen($data['values']['name']) < 3){
            $data['errors']['name'] = 'Invalid package name';
        }

        // Validate price
        if (!is_numeric($data['values']['price']) || $data['values']['price'] <= 0 || $data['values']['price'] > 20000) {
            $data['errors']['price'] = 'Price must be a positive number and less than Rs.20000.';
        }

        // Validate services
        if (strlen($data['values']['services']) > 120) {
            $data['errors']['services'] = 'Services description must be under 255 characters.';
        }

        // If there are errors, return the data including errors and form values
        if (empty($data['errors'])) {
            // If no errors, proceed to insert the package
            $packageModel = new \Modal\Packages;
            $packageModel->insert($_POST);

            // After insert, reset form values (optional)
            $data['values'] = ['name' => '', 'services' => '', 'price' => '', 'days' => ''];

            // Optionally, you can add a success message or something else here
            // $data['success'] = 'Package created successfully!';
        }

        // Return the data including errors and form values
        return $data;
    }
}
