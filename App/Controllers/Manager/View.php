<?php

namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class View
{
    use MainController;

    public function index($id)
    {
        // Instantiate the Package model
        $packages = new \Modal\Packages;

        // Fetch the package from the database by its ID
        $package = $packages->findById($id);
        // var_dump($package);

        // Check if the package exists
        if ($package) {
            // Render the view
            $this->view('Manager/View', ['package' => $package]);
        } else {
            echo "Package not found.";
        }
    }
}


