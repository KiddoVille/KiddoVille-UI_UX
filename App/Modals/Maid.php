<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Maid{
        use Modal;

        protected $table = 'maid';
        protected $allowedColumns = [
            'Last_Name',
            'First_Name',
            'Phone_Number',
            'Address',
            'NID',
            'Last_Seen',
            'AgeGroup',
            'ProfileImage'
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