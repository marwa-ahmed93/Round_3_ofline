<?php


/////Final //////
// final class Animal
// {
//     public $name;
//     public $color;
//     public $age;

//   final  public function eat()
//     {
//         echo "eat";
//     }
// }


// class German{

// }


// class Dog   {

// }


// $dog = new Dog;
// $dog->eat();





/////////////////  interface  /////////////////////

// interface payemnt{



// public function pay();

// }
// interface Stripe{

// }


// class Paypal implements payemnt ,Stripe{
// public function pay(){

// }
// }


/////////////////////    methodcahning  ///////////////////////////
/**$x = 10
 * $x += 20   $x = $x+20
 */
// class Calc{
  
// private $result ;

// public function sum($a,$b){

// $this->result = $a+$b;
// return $this;

// }

// public function sub($a){

// $this->result -= $a;
// return $this;
// }

// public function mult($a){

// $this->result *= $a;
// return $this;
// }

// public function div($a){

// $this->result /= $a;
// return $this;
// }
// public function result(){

//  echo $this->result;

// }



// }
// $clac = new Calc;
// $clac->sum(5,10)->sub(10)->mult(10)->div(30)->result();
// echo "<br>";
// $clac->sub(5,10);
// echo "<br>";

// $clac->mult(5,10);
// echo "<br>";

// $clac->div(5,10);





/////////////////////////////      namespace      ///////////////////////////////////////


// require 'User.php';
// require 'admin/test.php';
// use Customer\User ;
// use Admin\User  as admin;


// /*User */
// $user = new User ;
// echo $user->role = "customer <br>";
// $user->walk();


// /*admin */
// $user = new admin ;
// echo $user->role = "Admin <br>";
// $user->walk();




/////////////////////////////   pdo  /////////////////////////////////////////////

// $connection = mysqli_connect('localhost','root','','nti_r_3');

// $query = "SELECT * FROM `customers`";
// $result =  mysqli_query($connection ,$query);
// $customers =  mysqli_fetch_all($result ,MYSQLI_ASSOC);
// echo "<pre>";
// print_r($customers);



////////////////////  oop /////////////////////////////

// $connection = new mysqli('localhost','root','','nti_r_3');
// $query = "SELECT * FROM `customers`";
//    $result  =  $connection->query($query);
//    $customers =   $result->fetch_all() ; 
//    echo "<pre>";
// print_r($customers);


////////////////////// PDO  ///////////////////////////////
/** select */

// $dsn = new PDO('mysql:host=localhost;dbname=nti_r_3' ,'root','');
//  $query = "SELECT * FROM `customers`";
//     $result  =  $dsn->query($query);
//    $customers =   $result->fetchAll(PDO::FETCH_ASSOC) ; 
//    echo "<pre>";
// print_r($customers);


/** insert */

// $dsn = new PDO('mysql:host=localhost;dbname=nti_r_3' ,'root','');

// $query  = "INSERT INTO departments(`name`)
// VALUES(:name)";

// $result  =  $dsn->prepare($query);
// $name = "technical";
// $result->bindParam(':name' ,$name);
// $result->execute();
// // $result->execute(['name' => $name]);
// echo "inserted";



////////////////////////////// ploy /////////////////////////////////////////



// class Animal{
//    public $name ;

//    public function eat(){
// echo "eating now";
//    }

// public function calc($a,$b){
//    echo $a+$b;
// }

// }

// class Dog extends Animal{

// //  #[Override]
// //  public function eat()
// //  {
// //     return parent::eat();
// //  }

// public function calc($a=10,$b=10 ,$c=0){
//    echo $a+$b+$c;
// }

// }