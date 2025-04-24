<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class AssignTeacher{
        use Modal;

        protected $table = 'assignteacher';
        protected $allowedColumns = [
            'WorkID',
            'TeacherID',
            'Date',
            'Start_Time',
            'End_Time',
            'AgeGroup',
            'Activity'
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