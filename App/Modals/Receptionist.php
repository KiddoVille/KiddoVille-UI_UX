<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Receptionist{
        use Modal;

        protected $table = 'receptionist';
        protected $allowedColumns = [
<<<<<<< HEAD
            "UserID",
            'First_Name',
=======
>>>>>>> origin/main
            'Last_Name',
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