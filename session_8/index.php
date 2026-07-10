<?php
session_start();

// echo $_POST['user_name'];
// print_r($_REQUEST);


// $email ="m@ gmail.com";

// echo  filter_var($email ,FILTER_SANITIZE_EMAIL);

// $num = 22;

// echo filter_var($num,FILTER_VALIDATE_INT,
//['options'=> ['min_range'=>15 , 'max_range'=>25]]);


// $username = "ahmed";
 
// echo filter_var($username,FILTER_VALIDATE_REGEXP,

//['options'=> ['regexp'=> '/^[A-Z][a-z]{3,8}$/'] ]);



// include('validate.php');
require 'validate.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
$username = $_POST['username'];
$age = $_POST['age'];
$password = $_POST['password'];
$email = $_POST['email'];

$errors =[];


foreach($validates as $validate_name=>$validate_value){

 $value= filter_input(INPUT_POST,$validate_name,$validate_value['filter'],$validate_value['my_options']?? null);

if(empty($_POST[$validate_name])){
    $errors[$validate_name] = "You must fill ".$validate_name;
}
elseif($value == false){
$errors[$validate_name]= $validate_value['error'];
}


}

if($errors){
    $_SESSION['errors'] = $errors;
    header('location:createForm.php');
    exit();
}

$_SESSION['username'] = $username;
header('location:welcome.php');
exit();


}