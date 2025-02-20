<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class TeacherRem{
        use Modal;

        protected $table = 'teacher_rem_leaves';
        protected $allowedColumns = [
            'id',
            'TeacherID ',
            'Remaining_Leaves'
            
        ];

   

    }
?>