<?php
require "dbc.php";

header('content-type:application/json');

$query =   "SELECT * FROM `customers`";
$result =  mysqli_query($connection,$query);
 $customers =  mysqli_fetch_all($result , MYSQLI_ASSOC);

 echo json_encode($customers);

// echo "<pre>";
// print_r($customers);

// $customer =  mysqli_fetch_assoc($result);
// echo "<pre>";
// print_r($customer);