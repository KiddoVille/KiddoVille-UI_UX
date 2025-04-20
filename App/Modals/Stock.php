<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Stock{
        use Modal;

        protected $table = 'Stock';
        protected $allowedColumns = [
            'ItemID',
            'Item',
            'Category',
            'Quantity',
            'MinQuantity',
            'Stock',
            'Image',
            'ImageType',
            'Description',
            'Price'
        ];

        public function validate($data){
            $this->errors = [];

            // Check if required fields exist and are not empty
            if (empty($data['ItemID']) || !is_numeric($data['ItemID'])) {
                $this->errors['ItemID'] = "ItemID is required and must be numeric.";
            }

            if (empty($data['Item']) || strlen(trim($data['Item'])) < 2) {
                $this->errors['Item'] = "Item name is required and must be at least 2 characters.";
            }

            if (!isset($data['Quantity']) || !is_numeric($data['Quantity']) || $data['Quantity'] < 0) {
                $this->errors['Quantity'] = "Quantity must be a non-negative number.";
            }

            if (!isset($data['MinQuantity']) || !is_numeric($data['MinQuantity']) || $data['MinQuantity'] < 0) {
                $this->errors['MinQuantity'] = "Minimum Quantity must be a non-negative number.";
            }

            if (!isset($data['Stock']) || !in_array($data['Stock'], ['In Stock', 'Out of Stock', 'Low Stock'])) {
                $this->errors['Stock'] = "Stock status must be 'In Stock', 'Out of Stock' or 'Low Stock'.";
            }

            if (!empty($data['Image']) && !in_array($data['ImageType'], ['image/jpeg', 'image/png', 'image/jpg'])) {
                $this->errors['Image'] = "Only JPG and PNG image types are allowed.";
            }

            if (!empty($data['Description']) && strlen($data['Description']) > 500) {
                $this->errors['Description'] = "Description cannot exceed 500 characters.";
            }

            return empty($this->errors);
        }

    }
