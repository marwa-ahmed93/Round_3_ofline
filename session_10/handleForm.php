<?php

require 'dbc.php';

if($_SERVER['REQUEST_METHOD']  == 'POST'){

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$money = $_POST['money'];
$country = $_POST['country'];

$query = "INSERT INTO customers(`first_name`,`last_name`,`email`,`gender`,`phone`,`money`,`country`)
VALUES('$first_name' , '$last_name' , '$email','$gender','$phone','$money','$country')";

$result =  mysqli_query($connection , $query);

if($result){
    echo "inserted susseccfully";
    header('location:selectAll.php');
    exit();
}
else{
    echo "enter valid data";
}
}else{
    echo "the method must be post";
}