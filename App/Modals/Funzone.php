<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Funzone{
        use Modal;

        protected $table = 'media';
        protected $allowedColumns = [
            'AgeGroup',
            'MediaType',
            'Title',
            'Description',
            'UserID',
            'URL',
            'Size',
            'Format',
            
            
            
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