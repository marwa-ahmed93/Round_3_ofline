<?php
require 'Database.php';
class Mysql implements Database{
 
private $connection ;
  public function __construct($connection , $username , $password)
  {
     $this->connection  =  new PDO($connection , $username ,$password) ;
  }
  public function select($column ,  $table ,$condation ,$key ,$operators , $value){

  $query = "SELECT $column FROM  $table $condation $key $operators  $value";
    $result =  $this->connection->query($query);
    $data =  $result->fetch(PDO::FETCH_ASSOC);
     return $data ;
  }
public function selectAll($column , $table){
    $query = "SELECT $column FROM $table";
     $result =  $this->connection->query($query);
    $data =  $result->fetchAll(PDO::FETCH_ASSOC);
     return $data ;
}
public function insert(){}
public function update(){}
public function delete(){}

}
$mysql = new Mysql('mysql:host=localhost;dbname=nti_r_3' ,'root','');
//print_r($mysql->select('first_name','customers','WHERE','id','=',6));
echo "<pre>";
print_r($mysql->selectAll('*' , 'customers'));

// $dsn = new PDO('mysql:host=localhost;dbname=nti_r_3' ,'root','');

// require_once "Database.php";

// class Mysql implements Database{ 

// private $connection;

// public function __construct($connection , $username , $password)
// {
//     $this->connection = new PDO($connection,$username,$password);
// }

// public function select($columns,$table,$condation,$operator,$value){

// $query = "SELECT $columns FROM $table WHERE $condation $operator $value ";
// $result = $this->connection->query($query);
// $data = $result->fetch(PDO::FETCH_ASSOC);
// return $data;
// }

// public function selectAll($columns ,$table){
// $query = "SELECT $columns FROM $table  ";
// $result = $this->connection->query($query);
// $data = $result->fetchAll(PDO::FETCH_ASSOC);
// return $data;
// }

// public function insert($table,$columns,$value){
//     $query = "INSERT INTO $table($columns)VALUES('$value')";
//    $result =  $this->connection->query($query);
//    return $result;
// }

// public function update($table ,$columns , $columnValue,$condation , $operator ,$value){
//       $query = "UPDATE $table SET $columns = $columnValue WHERE $condation $operator $value ";
//    $result =  $this->connection->query($query);
//    return $result;
// }

// public function delete($table ,$condation , $operator  ,$value ){
//      $query = "DELETE FROM $table  WHERE $condation $operator $value ";
//      $result =  $this->connection->query($query);
//      return $result;
// }

// }

// $mysql = new Mysql("mysql:host=localhost;dbname=session_9_test",'root','');
// // print_r($mysql->selectAll('*','employees'));
// // print_r($mysql->select('name','employees','id','=',5));

// // print_r($mysql->insert('employees','name','malk'));

// print_r($mysql->delete('employees','id','=' , 6));