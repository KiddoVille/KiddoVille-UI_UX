<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class MaidLeave{
        use Modal;

        protected $table = 'MaidLeave';
        protected $allowedColumns = [
            'MaidID',
            'Date',
            'Emergency',
            'LeaveType'
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