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
$id = $_GET['id'];


$query = "UPDATE  customers SET
`first_name`= '$first_name' ,
`last_name` = '$last_name',
`email` = '$email',
`gender` = '$gender' ,
`phone` =  '$phone',
`money` = '$money',
`country` = '$country'
WHERE id = $id 
 ";


$result =  mysqli_query($connection , $query);

if($result){
    echo "updated susseccfully";
    header('location:selectAll.php');
    exit();
}
else{
    echo "enter valid data";
}
}else{
    echo "the method must be post";
}