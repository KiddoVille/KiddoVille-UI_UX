<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class FoodPlan{
        use Modal;

        protected $table = 'foodplan';
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