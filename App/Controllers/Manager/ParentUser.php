<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class User{
        use Modal;

        protected $table = 'parent';
        protected $allowedColumns = [
            'UserID',
            'Firstname',
            'Lastname',
            'Phone_Number',
            'Address',
            'Email',
            'NID',
            'Image'
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