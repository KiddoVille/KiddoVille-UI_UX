<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Maidactivity{
        use Modal;

        protected $table = 'maidactivity';
        protected $allowedColumns = [
            'WorkID',
            'MaidID',
            'Date',
            'Activity'
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