<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Reservation{
        use Modal;

        protected $table = 'reservation';
        protected $allowedColumns = [
            'Child_Id',
            'Start_Time',
            'Date',
            'End_Time',
            'Status',
            'Notes',
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