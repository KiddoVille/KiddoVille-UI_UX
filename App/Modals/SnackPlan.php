<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class SnackPlan{
        use Modal;

        protected $table = 'snackplan';
        protected $allowedColumns = [
            'Date',
            'Time',
            'Food',
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