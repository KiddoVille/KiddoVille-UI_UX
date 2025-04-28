<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Package{
        use Modal;

        protected $table = 'package';
        protected $allowedColumns = [
            'PackageID',
            'Name',
            'Price',
            'Description',
            'Monday',
            'Tuesday',
            'Wedenessday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday',
            'AgeGroup',
            'AllHours',
            'FoodAddons',
            'Everything'
        ];

        public function validate($data){
            $this->errors = [];

            if(empty($this->errors)){
                return true;
            }
            return false;
        }
        public function findById($id) {
            $sql = "SELECT * FROM package WHERE PackageID = :id LIMIT 1";
            $data = ['id' => $id];
            
            $result = $this->query($sql, $data);
            if ($result) {
                return $result[0]; // Return the first row
            }
            return false;
        }

        public function updatethis($id, $data, $id_column = 'id'){

            if(!empty($this->allowedColumns)){

                foreach($data as $key => $value){

                    if(!in_array($key, $this->allowedColumns)){

                        unset($data[$key]);
                    }
                }
            }
            
            //show($data);
            $keys = array_keys($data);
            $query = "UPDATE $this->table SET ";

            foreach($keys as $key){
                $query .= $key . " = :" . $key . ", ";
            }

            $query = trim($query, ", ");

            $query .= " WHERE $id_column = :$id_column";

            $data[$id_column] = $id;

            //show($query);
            
            //return $this->query($query, $data);
            try {
                $result = $this->query($query, $data);
                // show($result);
                if ($result !== false) {
                    return true;
                } else {
                    error_log('Update query failed. Query: ' . $query);
                    error_log('Data: ' . print_r($data, true));
                    return false;
                }
            } catch (Exception $e) {
                error_log('Database exception during update: ' . $e->getMessage());
                return false;
            }

        }

?>