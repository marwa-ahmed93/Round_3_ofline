<?php

// echo "hello world" ;



// echo "hell";
// echo "hell";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";


// echo 5+5 ;  


//   $userName = "ahmed";
//   echo $userName;

// echo "<br>";

//   $number = 5+5 ;
//   $x= $number+100;
// echo $x;

//  $userName = "ahmed";   //string
//  $userName = 5;        //number
//  echo $userName;

//  $isAcive = true ;   // boolean

// echo  gettype($isAcive);

 /**data type
  * string
 int
 float
 boolean
 null

  */



//  $txt = "W3Schools.com";
// echo "I love  $txt";

/**casting */

// $x =  '5'+5 ;
// echo $x;

// $name = (int) "ahmed" + 2 ;  //0+ 2 =>2
// echo $name;


// $x = (int) 5.5 +20 ;
// echo $x;


 $age = 18;

// if($age >= 18 ){
//     echo "welcome you cat register";
// }
// else{
//       echo "Sorry you cat`t register"; 
// }



// $z =  $age < 18 ? "welcome you cat register" : "Sorry you cat`t register";
// echo $z;

//$gender = "mail";
// if($age >18 ){
//     echo "welcome you cat register";
//     if($gender == "mail"){
//     echo "welcome";
// }
// }

// if($age > 18){

// }
// elseif($age >10){

// }
// else{

// }


// if(0){
//    echo "welcome"; 
// }

$x =10 ;  //integer
$y = "10";  //string
/**
 * = 
 * ==  value value
 * === value data type
 */
// if($x == $y){
//     echo "equal";
// }
// else{
//     echo "not equal";
// }



// $a = 5;
// //   false or   false  or   false  or   true  or  false  or  false      //true
// if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
//   echo "$a is a number between 2 and 7";
// }




// $a = 13;

// if ($a > 10) {
//   echo "Above 10";
//   if ($a > 20) {
//     echo " and also above 20";
//   } else {
//     echo " but not above 20";
//   }
// }


// $day = 1;
// if($day == 1){
//     echo "saturday";
// }
// elseif($day == 2){
//         echo "sunday";
// }
// elseif($day == 3){
//         echo "monday";
// }
// elseif($day == 4){
//         echo "monday";
// }
// elseif($day == 5){
//         echo "monday";
// }
// elseif($day == 6){
//         echo "monday";
// }
// elseif($day == 7){
//         echo "friday";
// }
// else{

// }



// switch($day){
//     case 1:
//       echo "saturday";
//       break;
      
//    case 2:
//       echo "sunday";
//       break;

//          case 3:
//       echo "saturday";
//       break;

//          case 4:
//       echo "saturday";
//       break;

//          case 1:
//       echo "saturday";
//       break;



// }










// $favcolor = "blue";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue! <br>";
//      break;
//   case "green":
//     echo "Your favorite color is green! <br>";
//      break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }

//DRY

$fruit = "carrot";

switch($fruit){
      case 'apple':
      case 'orange':
        echo "this is a fruit" ;
        break;

           case 'carrot':
           case 'tomato':
        echo "this is a vegetable" ;
        break;

        default :
        echo "not found0";
}








