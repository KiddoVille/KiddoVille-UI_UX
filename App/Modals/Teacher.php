<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Teacher{
        use Modal;

        protected $table = 'teacher';
        protected $allowedColumns = [
            'Username',
            'First_Name',
            'Lastt_Name',
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