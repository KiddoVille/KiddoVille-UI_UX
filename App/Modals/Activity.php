<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Activity{
        use Modal;

        protected $table = 'activity';
        protected $allowedColumns = [
            'WorkID',
            'TeacherID',
            'Description',
            'CreatedBy',
            'CreatedAt',
            'UpdatedBy',
            'UpdatedAt'
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