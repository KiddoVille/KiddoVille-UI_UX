<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Task{
        use Modal;

        protected $table = 'daily_task';
        protected $allowedColumns = [
            'Task_ID',
            'Title',
            'Description',
            'Date'
        ];

        public function validate($data){

            $this->errors = [];
    
            if (empty($arr['name'])) {
                $errors['name'] = 'Name is required';
            }
        
            if (empty($arr['email'])) {
                $errors['email'] = 'Email is required';
            } elseif (!filter_var($arr['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Invalid email format';
            }
    
            if(empty($this->errors)){
                return true;
            }
            return false;
        }
    
        public function deleteTask($id, $id_column = 'id') {
            $data[$id_column] = $id;
            $query = "DELETE FROM $this->table WHERE $id_column = :$id_column";
    
            // Execute the query and check the result
            $result = $this->query($query, $data);
    
            // Return true if rows were affected, otherwise false
            return $result ? true : false;
    }

    }
?>