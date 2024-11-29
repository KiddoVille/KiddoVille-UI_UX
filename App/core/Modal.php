<?php
    namespace Modal;

    defined('ROOTPATH') or exit('Access denied');

    Trait Modal{
        use Database;

        protected $limit = 10;
        protected $offset = 0;
        protected $order_type = "desc";
        protected $order_column = "id";
        public $errors = [];
        public $values = [];

        public function test(){
            $query = "select * from users";
            $result = $this->query($query);
            show($result);
        }

        public function findall(){
            $query = "select * from $this->table order by $this->order_column $this->order_type";
            return $this->query($query);
        }

        public function where_norder($data, $data_not = []){
            $keys = array_keys($data);
            $keys_not = array_keys($data_not);
            $query = "select * from $this->table where ";
            foreach ($keys as $key){
                $query .= $key . " = :". $key. " AND ";
            }
            foreach ($keys_not as $key){
                $query .= $key . "!=:". $key. " AND ";
            }

            $query = rtrim($query," AND ");

            $data = array_merge($data, $data_not);
            return $this->query($query, $data);
        }        

        public function where($data, $data_not = []){

            // $data = [
            //     'name' => 'John',
            //     'email' => 'john@example.com',
            //     'age' => 30
            // ];
            // $keys = ['name', 'email', 'age'];

            $keys = array_keys($data);
            $keys_not = array_keys($data_not);
            $query = "select * from $this->table where ";
            foreach ($keys as $key){
                $query .= $key . " = :". $key. " AND ";
            }
            foreach ($keys_not as $key){
                $query .= $key . "!=:". $key. " AND ";
            }

            $query = rtrim($query," AND ");
            $query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";
            //In this query, :id is a named placeholder or parameter marker used in prepared statements.

            $data = array_merge($data, $data_not);
            return $this->query($query, $data);
        }

        public function first($data, $data_not = [] ){
            $keys = array_keys($data);
            $keys_not = array_keys($data_not);
            $query = "select * from $this->table where ";
            foreach ($keys as $key){
                $query .= $key . " = :". $key. " && ";
            }
            foreach ($keys_not as $key){
                $query .= $key . "!=:". $key. " && ";
            }

            $query = trim($query," && ");
            $query .= " limit $this->limit offset $this->offset";

            $data = array_merge($data, $data_not);
            // ! can use the below
            // return $this->get_row($query, $data, $data_not);

            //! or this
            $result = $this->query($query, $data, $data_not);
            if($result){
                return $result[0];
            }
            return false;
        }

        public function insert($data) {
            // Filter to include only allowed columns
            if (!empty($this->allowedColumns)) {
                foreach ($data as $key => $value) {
                    if (!in_array($key, $this->allowedColumns)) {
                        unset($data[$key]);
                    }
                }
            }
        
            $keys = array_keys($data);
            $placeholders = array_map(fn($key) => ":$key", $keys);
            $query = "INSERT INTO $this->table (" . implode(", ", $keys) . ") VALUES (" . implode(", ", $placeholders) . ")";
            $this->query($query, $data);
            
            return false; // Optional return
        }

        //$id_column specifies the columns name we are going to use
        public function update_withid($id, $data,$id_column = 'id' ){

            if(!empty($this->allowedColumns)){
                foreach ($data as $key => $value){
                    if(!in_array($key, $this->allowedColumns)){
                        unset($data[$key]);
                    };
                };
            };
            $keys = array_keys($data);
            $query = "update $this->table set ";
            foreach ($keys as $key){
                $query .= $key . " = :". $key. " , ";
            }

            $query = trim($query,", ");
            $query .= " where $id_column = :$id_column";
            $data[$id_column] = $id;
            return ($this->query($query, $data));
        }

        public function delete( $id, $id_column = 'id'){

            $data[$id_column] = $id;
            $query = "delete from $this->table where $id_column = :$id_column";
            $this->query($query, $data);

        }

        public function update($condition, $data) {
            $conditionColumn = key($condition);
            $conditionValue = $condition[$conditionColumn];
        
            if (!empty($this->allowedColumns)) {
                foreach ($data as $key => $value) {
                    if (!in_array($key, $this->allowedColumns)) {
                        unset($data[$key]);
                    }
                }
            }
        
            $keys = array_keys($data);
            $query = "UPDATE $this->table SET ";
            foreach ($keys as $key) {
                $query .= "$key = :$key, ";
            }
    
            $query = rtrim($query, ", ");
            $query .= " WHERE $conditionColumn = :conditionValue";
            $data['conditionValue'] = $conditionValue;
            show($query);
            return $this->query($query, $data);
        }        
    }
?>