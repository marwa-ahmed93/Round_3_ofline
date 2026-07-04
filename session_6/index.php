<?php



//  $nameUser = "ahmed";
//  $nameUser = 5;
// echo gettype($nameUser);


// $x =10;
// $y = '10';

// if(0){
//     echo "welcome";
    
//     }
//     else{
//         echo "not valid";
//     }



// echo 2**2;


// $x= 5;
//  $x *= 2;
// echo $x;


// increment 7decrement
// //post increment
// pre increment




// $x = 5;
// echo  $x++ ;
// echo $x;

// echo  ++$x ;
// echo $x;

// $i=5;
//     5     2   7
// $y = $i++ + 2 + ++$i;
// echo $y;


// $a =10;
// $b = $a++ ;
// echo $a ;   //10   11  11
// echo "<br>";
// echo $b ;  //10    10   11





// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";


// for( $i = 10  ; $i< 100   ;$i++  ){
  
//    echo "Hello  $i  <br>";
// }


// $i = 10;
// while($i< 100 ){
//      echo "Hello  $i  <br>";
//      $i++ ;
// }

// $correctBen = 123456;
// $currentBen = null;

// while($correctBen <> $currentBen){
//     echo "please enter correct ben";
// $currentBen = 123456;
// } 




$age = 18;

// while($age >20){
//   echo "hello";
// }

// do{
//      echo "hello";
// }while($age >20);

// do{
//  echo "hello"; 
// }
// while($age >20);
 

//1234 BOOM 6789 BOOM 

// for($i=1 ; $i<20 ; $i++){
    
//     if($i%2 == 0){
//         continue;
//     }
//     echo "$i <br> ";
// }



// for($i=1 ; $i<=50 ; $i++){
//   if($i %5 == 0){
//     echo "BOOM";
//     continue;
//   }
//   echo $i."<br>";
// }


// $students1 = 'ahmed';
// $students2 = 'mohamed';
// $students3 = 'omar';


// $students =array();
//             0         1       2     3     4
// $students =['ahmed' ,'mohamed' ,'omar' ,10 , true ,30,90];
// $students[0];
// print_r($students);

//  $students[0] = "zain";
//  print_r($students);
//echo count($students);

// for($i=0 ; $i < count($students) ;$i++ ){
//     echo $students[$i]."<br>";
// }

// foreach($students as $st){
//     echo $st ."<br>";
// }

// $friends =[
//     'name' =>'ahmed'   ,
//     'age' => 20  ,
//     'gender' =>'male' ,
//    'other'=> ['f_name'=>'mohamed', 'f_age'=> 25]
// ];
// print_r($friends);
// echo $friends['gender'];
// foreach($friends as $key=>$value){
//     echo "thee user  $key : is $value <br>";



// $students = [
// //   0        1      2
//   ['ahmed' , 27 , 'male'],   //0
//   //   0        1      2
//   ['nour' , 20 , 'female'],  //1
//   //   0        1      2
//   ['mona' , 22 , 'female'],   //2
//   ['mohamed' , 25 , 'male']  //3
// ];

// // echo $friends['other']['f_age'];

// // echo count($friends);

// echo $students[0][0];




// $students = [
//   'a' => ['ahmed' , 27 , 'male'] ,
//   'b' => ['nour' , 20 , 'female'] ,
//   'c' =>['mona' , 22 , 'female'] ,
//   'd' => ['name'=>  'mohamed' , 'age'=> 25 , 'gender' => 'male']  

// ];
// echo $students['d']['name'];




// $students = [

//   'a' => ['name'=>  'mohamed' , 'age'=> 25 , 'gender' => 'male'] , 
//   'b' => ['name'=>  'ahmed' , 'age'=> 20 , 'gender' => 'male'] , 
//   'c' => ['name'=>  'malik' , 'age'=> 10 , 'gender' => 'male']  

// ];
// echo $students['a']['name'];
// foreach($students  as $student){
//     foreach($student as $key=>$value){
//         echo  "the $key : $value <br>";
//     }
// }



// $x = 10;  //125d
// echo $x ;
// echo "<br>";

// $y = &$x ; 
//  echo $y;
// echo "<br>";




//  $x = 20;

//  echo $x ;
// echo "<br>";

//  echo $y ;
// echo "<br>";








// function Clac($rev=500 , $expen=10 , $taxsRate=0.14 , $otherExpe=50){
// function calc($rev=500 ,$expen=10,$taxsRate=0.14,$otherExpe=10){

// $icome = $rev-$expen;
// $incomeWithTaxes = $icome*$taxsRate;
// $incomeAfterTaxes = $icome - $incomeWithTaxes ;
// $total = $incomeAfterTaxes - $otherExpe;
// echo $total;

// }
// calc(4000 ,100,0.14,20);
// echo "<br>";
// calc(5000 ,30,0.14,10);
// echo "<br>";
// calc(taxsRate:0.13);
// echo "<br>";
// calc();


// function sum($a=10,$b=50){
//     $result = $a+$b ;
//     echo $result;
// }
// sum(100,100);

// function greate($name){
//      echo " yes"; 
//   return "Hello ".$name;
    
// }
// echo greate('mohmed');
// $userName = 'ahmed';
// $funName=  greate($userName);
// echo $funName ;
// $user_name = 'mal ik';
// $fan_name =  greate($user_name);
// echo $fan_name ;



// $x = 10;  //global
// // $name = "mm";
// // const NAME = "ahmed";
// // define('name','ahmed');
// function sum(){
//   static  $y= 20;
//     echo $y++;  //local
//     // echo $GLOBALS['x'];
// //    echo $var;
// // global $x;
// // echo $x;
// // echo NAME;
// }
// sum();
// echo "<br>";
// sum();
// echo "<br>";
// sum();
// echo "<br>";
// sum();

// print_r($GLOBALS); 
// echo "<br>";
// echo $GLOBALS['x'];

// echo $GLOBALS['get'];

// echo $_GET['email'];
// echo $_GET['password'];



if(isset($_POST['submit'])){
  echo $_POST['email'];
echo $_POST['password'];

}
else{
  echo "please login";
}