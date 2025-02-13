<?php

    namespace Modal;

    defined('ROOTPATH') or exit('Access Denied!');

    class Event{
        use Modal;

        protected $table = 'events';
        protected $allowedColumns = [
            'EventID',
            'EName',
            'EDate',
            'Edescription',

        ];

        public function validate($data) {
            $this->errors = [];
    
            if (empty($data['EName'])) {
                $this->errors['EName'] = "Event name is required.";
            }
            if (empty($data['EDate'])) {
                $this->errors['EDate'] = "Date is required.";
            }
            if (empty($data['Edescription'])) {
                $this->errors['Edescription'] = "Description is required.";
            }
            return empty($this->errors);
        }

        public function delete($id){
            $query = "DELETE FROM Events WHERE EventID = :EventID";
            $params = [':EventID' => $id];

            return $this->query($query,$params);
        }
    }
?>