<?php
    Trait Modal{
        use Database;

        protected $limit = 10;
        protected $offset = 0;
        protected $order_type = "desc";
        protected $order_column = "id";

        public function test(){
            $query = "select * from users";
            $result = $this->query($query);
            show($result);
        }

        public function findall(){
            $query = "select * from $this->table order by $this->order_column $this->order_type";
            return $this->query($query);
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
                $query .= $key . " = :". $key. " && ";
            }
            foreach ($keys_not as $key){
                $query .= $key . "!=:". $key. " && ";
            }

            $query = trim($query," && ");
            $query .= "order by $this->order_column $this->order_type limit $this->limit offset $this->offset";
            //In this query, :id is a named placeholder or parameter marker used in prepared statements.

            $data = array_merge($data, $data_not);
            return $this->query($query, $data, $data_not);
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

        public function insert($data){

            if(!empty($this->allowedColumns)){
                foreach ($data as $key => $value){
                    if(!in_array($key, $this->allowedColumns)){
                        unset($data[$key]);
                    };
                };
            };

            $keys = array_keys($data);
            $date = date('Y-m-d H:i:s');
            $data['date'] = $date;
            $keys = array_keys($data);
            $query = "insert into $this->table (".implode(",",$keys).") values (:".implode(", :", $keys).") ";
            show($query);

            $this->query($query, $data);
            return false;
        }

        //$id_column specifies the columns name we are going to use
        public function update($id, $data,$id_column = 'id' ){

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
            show($this->query($query, $data));
        }

        public function delete( $id, $id_column = 'id'){

            $data[$id_column] = $id;
            $query = "delete from $this->table where $id_column = :$id_column";
            $this->query($query, $data);

        }
    }
?>