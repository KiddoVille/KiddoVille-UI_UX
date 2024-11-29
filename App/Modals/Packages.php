<?php

namespace Modal;

defined('ROOTPATH') or exit('Access Denied!');

class Packages
{
    use Modal;

    protected $table = 'packages';
    protected $allowedColumns = [
        'name',
        'services',
        'price',
        'days'
    ];

    public function validate($data)
    {
        $this->errors = [];

        if (empty($this->errors)) {
            return true;
        }
        return false;
    }

    public function findById($id)
{
    $query = "SELECT * FROM packages WHERE id = :id";
    $params = ['id' => $id];
    
    // Assuming query() is defined in the Model trait and returns a result
    return $this->query($query, $params); // 'fetch' fetches a single result
    
}

    

    public function delete($id) {
        $query = "DELETE FROM {$this->table} WHERE id = :id";
        $params = ['id' => $id];
    
        // Assuming $this->query() is a method in the Database trait
        return $this->query($query, $params); // Returns true if successful
    }

    public function update($id, $data)
    {
        $query = "UPDATE {$this->table} SET 
                  name = :name, 
                  services = :services, 
                  price = :price, 
                  days = :days 
                  WHERE id = :id";
    
        $data['id'] = $id;
    
        return $this->query($query, $data);
    }
    
    
}
