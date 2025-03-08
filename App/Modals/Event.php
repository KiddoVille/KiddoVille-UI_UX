<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Event{
        use Modal;

        protected $table = 'event';
        protected $allowedColumns = [
            'EventID',
            'EventName',
            'Date',
            'TeacherID',
            'Descrption',
            'Image',
            'BlogID'
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