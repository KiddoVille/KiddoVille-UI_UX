<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Allusers{
        use Modal;

        protected $table = 'user';
        protected $allowedColumns = [
            'UserID',
            'UserName',
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