<?php
namespace Marwa\Mvc\Model;

use Marwa\Mvc\Model;
use PDO;

class Customer extends Model{
protected $tableName = 'customers'; 
public function all(){
    $query = "SELECT * FROM $this->tableName";
    $result = $this->connection->query($query);
    $customers = $result->fetchAll(PDO::FETCH_ASSOC);
    return $customers;
}


}