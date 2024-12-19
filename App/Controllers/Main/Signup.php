<?php

namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class Signup {
    use MainController;

    public function index() {
        $Data = [];
        $Data['errors'] = null;  // Initialize the error array

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validate the fields: NIC, Contact, and Email
            $errors = [];

            $existing = new \Modal\Meeting_Request;
            $result =  $existing->where_norder(['NIC'=>$_POST['NIC']]);

            if(!empty($result)){
                $errors['request'] = 'Request already exists';
            }

            // Validate NIC: Only numbers, max 12 digits
            if (!preg_match('/^\d{12}$/', $_POST['NIC'])) {
                $errors['NIC'] = 'NIC must be exactly 12 digits and contain only numbers.';
            }

            // Validate Contact: Only numbers, max 10 digits
            if (!preg_match('/^\d{10}$/', $_POST['Contact'])) {
                $errors['Contact'] = 'Contact must be exactly 10 digits and contain only numbers.';
            }

            // Validate Email: Standard email validation
            if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
                $errors['Email'] = 'Please enter a valid email address.';
            }

            // If there are validation errors, send them to the view
            if (!empty($errors)) {
                $Data['errors'] = $errors;
            } else {
                // Proceed with the insertion if no errors
                $meeting = new \Modal\Meeting_Request;
                $meeting->insert($_POST);

                redirect('Main/Home');
            }
        }
        $this->view('main/signup', $Data);
    }
}
?>
