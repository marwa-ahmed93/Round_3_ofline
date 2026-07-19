<?php
require "dbc.php";
$data = json_decode(file_get_contents('php://input'),true);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

// if(isset($_POST['first_name']) && !empty($_POST['first_name']) 
    
//     && isset($_POST['last_name']) && !empty($_POST['last_name']) 
//     && isset($_POST['email']) && !empty($_POST['email']) 
//     && isset($_POST['gender']) && !empty($_POST['gender']) 
//     && isset($_POST['phone']) && !empty($_POST['phone']) 
//     && isset($_POST['money']) && !empty($_POST['money']) 
//     && isset($_POST['country']) && !empty($_POST['country']) 
    
//     )
//     {



$first_name = $data['first_name'] ?? $_POST['first_name'];
$last_name =  $data['last_name'] ?? $_POST['last_name'];
$email = $data['email'] ?? $_POST['email'];
$gender = $data['gender'] ?? $_POST['gender'];
$phone = $data['phone'] ?? $_POST['phone'];
$money = $data['money'] ?? $_POST['money'];
$country = $data['country'] ?? $_POST['country'];

$query = "INSERT INTO customers(`first_name`,`last_name`,`email`,`gender`,`phone`,`money`,`country`)
VALUES('$first_name' , '$last_name' , '$email','$gender','$phone','$money','$country')";

$result =  mysqli_query($connection , $query);
if($result){
        echo json_encode(['message'=>'Data inserted successfully ']);

}



//     }
// else{
//     echo json_encode(['message'=>'you must fill data']);
// }



}
else{
    echo json_encode(['message'=>'method must be post ']);
}