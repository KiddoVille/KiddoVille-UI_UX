<?php
namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class Editview
{
    use MainController;

    public function index($id)
    {
        $packages = new \Modal\Packages;
        $package = $packages->findById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $updatedData = [
                'name' => $_POST['name'] ?? '',
                'services' => $_POST['services'] ?? '',
                'price' => $_POST['price'] ?? ''
            ];

            //var_dump($_POST);

            $errors = [];
            //var_dump($updatedData['price']);

            if(is_numeric($updatedData['name']) || strlen($updatedData['name']) < 3){
                $errors['name'] = 'Invalid package name';
            }
            if (empty($updatedData['services'])) {
                $errors['services'] = 'Services are required.';
            }
            if (!is_numeric($updatedData['price']) || $updatedData['price'] <= 0 || $updatedData['price'] >= 20000 ) {
                $errors['price'] = 'Price must be a positive number. and less than 20000';
            }

            //var_dump($errors);

            if (empty($errors)) {
                $packages->update_withid($id, $updatedData , 'id');
                header('Location: ' . ROOT . '/Manager/Packages'); // Redirect after update
                exit();
            } else {
                $this->view('Manager/Edit', ['package' => $package, 'errors' => $errors]);
            }
        } else {
            if ($package) {
                $this->view('Manager/Edit', ['package' => $package]);
            } else {
                echo "Package not found.";
            }
        }
    }
}

