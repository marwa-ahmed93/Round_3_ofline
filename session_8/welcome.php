<?php
// session_start();

// echo "WELCOME ". $_SESSION['username'];

// include('text.php');
// echo $x ;
// echo "marwa"+"ahmed";

// function age(){

// } 
// function age(){
    
// } 

// echo "wel

// include_once
// require 'test.php';
// echo "HEllo";


// echo "welcome" ,"php" , "session_8" ,"friday";
// print("welcome");

// readfile('text.txt');

// $file = fopen('text.txt','r');
// echo fread($file,filesize('text.txt')/2);
// fclose($file);



// $file = fopen('text.txt','a');
// echo fwrite($file,"welcome at nit fullstack php");
// fclose($file);



$file = fopen('text.txt','r');
// echo fgets($file);
// fclose($file);

while($row  = fgets($file) ){
    echo $row;
}