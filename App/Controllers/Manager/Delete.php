<?php

namespace Controller;

defined('ROOTPATH') or exit('Access denied');

class Delete
{
    use MainController;

    /**
     * Delete a package by ID
     * @param int $packageId
     */
    public function index($Id)
    {
        // Only allow POST requests
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
            exit;
        }
    
        $packageModel = new \Modal\Packages;
        $result = $packageModel->delete($Id);
        //var_dump($result);
        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Package deleted successfully.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to delete package.']);
        }
        exit;
    }
    
}