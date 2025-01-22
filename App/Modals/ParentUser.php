<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class ParentUser{
        use Modal;

        protected $table = 'parent';
        protected $allowedColumns = [
            'UserID',
            'Last_Name',
            'First_Name',
            'Phone_Number',
            'Address',
            'NID',
            'Email',
            'Gender',
            'Language',
            'Last_Seen',
            'Image',
            'ImageType'
        ];

        public function validate() {
            $errors = [];
            if (!isString($_POST['First_Name'])) {
                $errors['First_Name'] = "First Name must be a valid string";
            }
            if (!isString($_POST['Last_Name'])) {
                $errors['Last_Name'] = "Last Name must be a valid string";
            }
            if (!isNumber($_POST['NID'])) {
                $errors['NID'] = "NID must be a valid number";
            }
            if (!isEmail($_POST['Email'])) {
                $errors['Email'] = "Email is not valid";
            }
            return $errors;
        }
    }
?>