<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Guardian{
        use Modal;

        protected $table = 'guardian';
        protected $allowedColumns = [
            'Parent_Name',
            'Last_Name',
            'First_Name',
            'Relation',
            'Phone_Number',
            'Language',
            'Address',
            'NID',
            'Email',
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