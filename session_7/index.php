<?php


// echo $_GET['email'];
// echo "<br>";
// echo $_GET['password'];

// print_r($GLOBALS);






// if(isset($_POST['submit'])){

// echo $_POST['email'];
// echo "<br>";
// echo $_POST['password'];
// }
// else{
//     echo "please login first";
// }

// $arr=[
//     'userName'=>'ahmed',
//     'password'=> '123456'
// ];



// if(isset($_POST['submit'])){
    
//      $userName =    $_POST['name'] ;
//      $password =    $_POST['password'] ;

//      if($userName == $arr['userName'] &&  $password == $arr['password']){
//          echo "welcome";
//      }
//      else{
//         echo "enter valid data";
//      }

// }


// if(isset($_POST['submit'])){
    
//   $num_1 =  $_POST['num1'];
//   $num_2 =  $_POST['num2'];
//   $operators = $_POST['operators'];

// switch($operators){
     
//     case '+':
//     echo $num_1 + $num_2;
//     break;

//       case '-':
//     echo $num_1 -$num_2;
//     break;


//   case '/':
//     echo $num_1 / $num_2;
//     break;

//       case '*':
//     echo $num_1 * $num_2;
//     break;

//     default:
//     echo "invalid number";

// }  




// }












/**
 * session  => server  
 * cookie =>  Browser  string 
 * 
 */


//  $userName =  $_POST['name'];
//  $password =  $_POST['password'];


//  echo $_COOKIE['username'];


//  if(isset($_POST['submit'])){

//  $userName =  $_POST['name'];
//  $password =  $_POST['password'];

// if(isset($_POST['rememberMe']) && $_POST['rememberMe'] == true ){
//     setcookie('username', $userName , time()+60);
//     setcookie('password',$password , time()+60);

// }

 


//  }







/////////////////////sessions//////////////////

// session_start();

//  if(isset($_POST['submit'])){

//  $userName =  $_POST['name'];
//  $password =  $_POST['password'];


//   $_SESSION['username'] = $_POST['name'];
//   $_SESSION['password'] = $_POST['password'] ;

//   print_r($_SESSION);

// //   session_destroy();
// // unset( $_SESSION['username'] );

//  }




/**ex_1 */
session_start();

// $userName = "mohamed";

// $_SESSION['userName'] = $userName ;

// header('location:welcome.php');


// $userName = $_POST['name'];  //input

// $_SESSION['userName'] = $userName ;

// header('location:welcome.php');


// echo "<pre>";
// print_r($_SERVER);

// if(isset($_POST['submit'])){

// }

// if($_SERVER['REQUEST_METHOD'] == 'POST'){

// $userName = $_POST['name'];
// $password = $_POST['password'];
// $errors = [];

// if(strlen($userName) < 6 ||  strlen($userName) > 12){
  
// $errors[] = "the user name should be between 6 and 12"; 
  
// }

// if(strlen($password) < 6 ||  strlen($password) > 12){
  
// $errors[] = "the user password should be between 6 and 12"; 
  
// }
// if($errors){
//     $_SESSION['errors'] = $errors;
//     header('location:home.php');
//     exit();
// }
   
// $_SESSION['userName'] = $userName ;
// header('location:welcome.php');

// }



// print_r($_POST);
//  $_POST['image'];



if($_SERVER['REQUEST_METHOD'] == 'POST'){

echo "<pre>";
print_r($_FILES);  // $files =['image' => ['name'=> '1.jpeg' , '']]  $files['image]['name']

$image = $_FILES['image'];
$imageName = $image['name'];  
$tempName  = $image['tmp_name'];

$exten = pathinfo($imageName,PATHINFO_EXTENSION);  //jpg

$newName = uniqid().".".$exten;

move_uploaded_file($tempName,$newName);


}