<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Manager{
        use Modal;

        protected $table = 'manager';
        protected $allowedColumns = [
            'Last_Name',
<<<<<<< HEAD
            'UserID',
            'Last_Seen'
=======
>>>>>>> origin/main
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