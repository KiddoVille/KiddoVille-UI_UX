<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class User{
        use Modal;

        protected $table = 'user';
        protected $allowedColumns = [
            'Username',
            'Password',
            'Role'
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