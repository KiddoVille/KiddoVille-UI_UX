<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Guardian{
        use Modal;

        protected $table = 'guardian';
        protected $allowedColumns = [
            'ParentID',
            'Last_Name',
            'First_Name',
            'Relation',
            'Phone_Number',
            'Language',
            'Address',
            'NID',
            'Email',
            'Gender',
            'Image',
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
            if (!IsString($_POST['Relation'])) {
                $errors['Relation'] = "Relation is not valid";
            }
            return $errors;
        }
    }
?>