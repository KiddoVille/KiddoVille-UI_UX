<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Child{
        use Modal;

        protected $table = 'child';
        protected $allowedColumns = [
            'ChildID',
            'ParentID',
            'Last_Name',
            'First_Name',
            'DOB',
            'Relation',
            'Language',
            'Nickname',
            'Religion',
            'Language',
            'Allergies',
            'Gender',
            'Image',
            'PackageID',
            'ImageType'
        ];

        public function validate() {
            $errors = [];
            if (!is_string($_POST['First_Name'])) {
                $errors['First_Name'] = "First Name must be a valid string";
            }

            if (!is_string($_POST['Last_Name'])) {
                $errors['Last_Name'] = "Last Name must be a valid string";
            }
        
            $ageValidation = agecalculate($_POST['DOB']);
            if (is_string($ageValidation)) {
                // Set error only if the validation result is an error message
                if ($ageValidation === "Age must be at least 2 years" || 
                    $ageValidation === "Age must be less than or equal to 12 years" || 
                    $ageValidation === "Birthdate cannot be in the future") {
                    $errors['DOB'] = $ageValidation;
                }
            }
        
            if (!is_string($_POST['Relation'])) {
                $errors['Relation'] = "Relation must be a valid string";
            }
            return $errors;
        }
    }
?>