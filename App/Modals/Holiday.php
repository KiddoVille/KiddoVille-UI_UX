<?php

namespace Modal;

defined('ROOTPATH') or exit('Access Denied!');

class  Holiday{
    use \Modal\Modal;

    protected $table = 'holiday';   
    protected $allowedColumns = [
        'HolidayID',
        'Leave_Type',
        'Date_of_Holiday',
        'About'
    ];

    public function validate($data) {
        $this->errors = [];

        if (empty($data['Leave_Type'])) {
            $this->errors['Leave_Type'] = "Leave type is required.";
        }
        if (empty($data['Date_of_Holiday'])) {
            $this->errors['Date_of_Holiday'] = "Date is required.";
        }
        if (empty($data['About'])) {
            $this->errors['About'] = "Description is required.";
        }

        return empty($this->errors);
    }

    public function delete($id){
        $query = "DELETE FROM holiday WHERE HolidayID = :HolidayID";
        $params = [':HolidayID' => $id];
        return $this->query($query,$params);
    }
}