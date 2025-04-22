
<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Mark{
        use Modal;

        protected $table = 'report_marks';
        protected $allowedColumns = [
            'Report_ID',
            'Subject_ID',
            'Teacher_ID',
            'Marks',
            'Submitted_at'
           
        ];

    
    }
?>