<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Pickup{
        use Modal;

        protected $table = 'pickup';
        protected $allowedColumns = [
            'ChildID',
            'Date',
            'Time',
            'Person',
            'OTP',
            'Description',
            'Image',
            'ImageType',
            'AllChild'
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