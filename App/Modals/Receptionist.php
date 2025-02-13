<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Receptionist{
        use Modal;

        protected $table = 'receptionist';
        protected $allowedColumns = [
            "UserID",
            'First_Name',
            'Last_Name',
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