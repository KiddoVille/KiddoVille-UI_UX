<?php
    class User{
        use Modal;

        protected $table = 'users';
        protected $allowedColumns = [
            'name',
            'age'
        ];

    }
?>