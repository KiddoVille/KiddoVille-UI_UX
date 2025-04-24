<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class TeacherRem{
        use Modal;

        protected $table = 'TeacherLeaveBalance';
        protected $allowedColumns = [
            'id',
            'TeacherID ',
            'LeaveType',
            'TotalAllocated',
            'Used',
            'Remaining',
            'LastUpdate'
            
        ];

   

    }
?>