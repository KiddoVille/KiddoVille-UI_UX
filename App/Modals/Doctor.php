<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Doctor{
        use Modal;

        protected $table = 'doctor';
        protected $allowedColumns = [
            'Username',
            'First_Name',
            'Last_Name',
            'Phone_Number',
            'SLMC',
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