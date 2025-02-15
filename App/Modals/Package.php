<?php

namespace Modal;

defined('ROOTPATH') or exit('Access Denied!');

class Package
{
    use Modal;

    protected $table = 'package';
    protected $allowedColumns = [
        'Name',
        'Price',
        'Description',
        'Monday',
        'Tuesday',
        'Wedenessday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday',
        'AgeGroup',
        'AllHours',
        'FoodAddons',
        'Everything'
    ];

    public function validate($data)
    {
        $this->errors = [];
        if (empty($data['Name'])) {
            $errors['Name'] = "Package name is required";
        }
        if (empty($data['Price']) || $data['price'] <= 0) {
            $errors['Price'] = "Valid price is required";
        }
        if (empty($data['Description'])) {
            $errors['services'] = "Services list is required";
        }
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday','Friday','Saturday','Sunday'];

        if (!array_filter(array_intersect_key($data, array_flip($days)))) {
            foreach ($days as $day) {
                $errors[$day] = "Select at least one day";
            }
        }

        if (empty($this->errors)) {
            return true;
        }
        return false;
    }

    public function delete($PackageID)
    {
        $query = "DELETE FROM package WHERE PackageID = :PackageID";
        $params = [':PackageID' => $PackageID];
        return $this->query($query, $params);
    }
}
