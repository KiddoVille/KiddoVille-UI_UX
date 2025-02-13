<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Meeting{
        use Modal;

        protected $table = 'meetingtimes';
        protected $allowedColumns = [
            'Date',
            'Time',
            "ParentID",
            "Scheduled"
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