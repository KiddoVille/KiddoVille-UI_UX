<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class ParentUser{
        use Modal;

        protected $table = 'parent';
        protected $allowedColumns = [
            'Username',
            'Last_Name',
            'First_Name',
            'Phone_Number',
            'Address',
            'NID',
            'Email',
            'Gender',
            'Language',
            'Last_Seen'
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