<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Package{
        use Modal;

        protected $table = 'package';
        protected $allowedColumns = [
            'Name',
            'Price',
            'Description',
            'Monday',
            'Tuesday',
            'Wedenessday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday',
            'AgeGroup',
            'AllHours',
            'FoodAddons',
            'Everything'
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