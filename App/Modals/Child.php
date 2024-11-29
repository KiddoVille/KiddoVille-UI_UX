<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Child{
        use Modal;

        protected $table = 'child';
        protected $allowedColumns = [
            'Parent_Name',
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
        ];

        public function validate($data){
            $this->errors = [];

            if(empty($this->errors)){
                return true;
            }
            return false;
        }
    }
?>