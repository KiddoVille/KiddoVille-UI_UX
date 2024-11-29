<?php

namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class Update
{
    use MainController;

    public function index($id)
    {
        $data = ['values' => [], 'errors' => []];
        $packageModel = new \Modal\Packages;

        // Check if a valid ID is provided
        if (!$id || !is_numeric($id)) {
            $data['errors']['general'] = 'Invalid package ID.';
            $this->view('Manager/Edit', $data);
            return;
        }

        // Fetch the package data
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $package = $packageModel->findById($id);

            if (!$package) {
                $data['errors']['general'] = 'Package not found.';
                $this->view('Manager/Edit', $data);
                return;
            }

            $data['values'] = (array)$package;
            $this->view('Manager/Edit', $data);
        }

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $this->handlePackageUpdate($id, $packageModel);
            if (empty($data['errors'])) {
                redirect('Manager/Packages');
            } else {
                $this->view('Manager/Edit', $data);
            }
        }
    }

    private function handlePackageUpdate($id, $packageModel)
    {
        $data = ['values' => $_POST, 'errors' => []];

        // Define required fields
        $requiredFields = ['name', 'services', 'price', 'days'];

        // Validate required fields
        if (!checkRequiredFields($requiredFields, $_POST)) {
            $data['errors']['general'] = 'All fields are required.';
        }

        // Validate name uniqueness
        $existingPackage = $packageModel->where(['name' => $_POST['name']]);
        if (!empty($existingPackage) && $existingPackage[0]->id != $id) {
            $data['errors']['name'] = 'Package name already exists.';
        }

        // Validate input data (add more validations if needed)
        if (empty($data['errors'])) {
            $updateData = [
                'name' => $_POST['name'],
                'services' => $_POST['services'],
                'price' => $_POST['price'],
                'days' => $_POST['days']
            ];
            $packageModel->update($id, $updateData);
        }

        return $data;
    }
}
