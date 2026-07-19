<?php

require 'dbc.php';

if(isset($_GET['id'])){
$id = $_GET['id'];
$query = "DELETE FROM customers WHERE id = $id";

$result =  mysqli_query($connection,$query);

header('location:selectAll.php');
exit();
}
else{
    echo "send valid id";
}

// if(mysqli_num_rows($result)== 0){
   
// }
// else{

// }