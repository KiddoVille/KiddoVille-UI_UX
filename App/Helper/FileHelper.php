<?php

namespace App\Helpers;

class FileHelper {
    public static function store_file($file) {
        $uploadDir = 'Funzone/'; // Folder where files will be stored
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileSize = $file['size']; // File size
        $fileExt = pathinfo($file['name'], PATHINFO_EXTENSION); // File extension
        $uniqueFileName = uniqid('file_', true) . '.' . $fileExt; // Unique file name
        $filePath = $uploadDir . $uniqueFileName;

        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            $baseURL = "http://localhost/MVC/Public/";

            return [
                'url' => $baseURL . $filePath,
                'size' => $fileSize,
                'format' => $fileExt
            ];
        }

        return false;
    }
}
