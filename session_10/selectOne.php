<?php
require 'dbc.php';



$id = $_GET['id'];

$query = "SELECT * FROM `customers` WHERE id = $id";

 $result =   mysqli_query($connection , $query); 
 if(mysqli_num_rows($result) > 0){
 $customer =  mysqli_fetch_assoc($result);
 echo "<pre>";
 print_r($customer);
 }
else{
    echo "not valid id";
}