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
            'Start_Time',
            'End_Time',
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