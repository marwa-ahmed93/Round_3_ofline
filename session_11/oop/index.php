<?php
/** oop 
 * Encapsulation
 * inherit
 * ploimarpthem
 * abstract
 */

// class Car{
     
//  public $model ;
//  public $color ;
//  public $speed ;

//  function __construct($model ,$color , $speed)
//  {
//     $this->model  = $model;
//     $this->color  = $color;
//     $this->speed  = $speed;
//     // echo "hi";
//  }

// public function  drive(){
//     echo "the model is: $this->model car color is: $this->color and speed is: $this->speed  ";
// }

// public function  engine(){
//     echo "start engine";
// }

// public function __destruct()
// {
//   echo "destroy";
// }
// }


// $car =  new Car('iu','red',100);

// echo gettype($car);
// echo "<br>";
// echo $car->model = "BMW";
// echo "<br>";
// echo $car->color = "red";
// echo "<br>";
// echo $car->speed = 200 ;
// echo "<br>";
// $car->drive();
// echo "<br>";
// $car->engine();
// echo "<br>";


// echo "<hr>";
// $car1 =  new Car;
// echo $car1->model = "Toyota";
// $car1->drive();




/***               * inherit     */

// class Movie{




//     public function move(){
//         echo "move";
//     }


// }

// class Animal extends Movie{
//     public $age ;
//     public $name ;

// public function __construct($age=2 ,$name="po")
// {
//   echo "hi";
// }
    
//     public function makeSound(){
//         echo "how how";
//     }


//        public function eat(){
//         echo "start eat";
//     }
// }

// class Dog extends Animal {
//     #[Override]
//     public function __construct()
//     {
//        parent::__construct('lion',6);
//     }
   

    
//     }
 
// $dog = new Dog;
// echo $dog->name = "German";
// echo "<br>";
// $dog->makeSound();
// echo "<br>";
// $dog->move();
// echo "<br>";




// class Cat extends Animal{ 
// #[Override]
// 	public function makeSound()
//     {
//         echo "meow meow";
//     }

// public function walk(){
//     echo "start";
// }

// }
// $cat = new Cat();
// $cat->eat();
// echo "<br>";
// $cat->makeSound();
// echo "<br>";
// $cat->walk();


/**trait */


// trait Dog{
//  public $age ;
//     public $name ;

    
//     public function eat(){
//         echo "how eat";
//     }
// }

// trait Animal{
//  public $age ;
//     public $name ;

    
//     public function makeSound(){
//         echo "how how";
//     }
// }
// class German{
// use Dog ;
// use Animal;
// }
// $g =  new German ;
// $g->eat();





/**     Abstract   class method   */

// abstract class Animal{
// public $name ;
// public $age ;

// public function eat(){
// echo "Eat";
// } 

// abstract public function makeSound();

// }
// class Dog extends Animal{
// public function makeSound(){

// }
// }



// abstract class PaymentGatway{
//      abstract  public function pay($amount);
// }

// class paypal extends PaymentGatway{

// public function pay($amount){
//     echo "with paypal ".$amount;
// }
// }

// class stripe extends PaymentGatway{
//     public function pay($amount){
//   echo "with stripe ".$amount;
//     }
// }
// // $paypal = new paypal;
// // $paypal->pay(2000);

// // $stripe = new stripe;
// // $stripe->pay(2000);

// function proccessPayment($getWay , $amount){
//       echo $getWay->pay($amount);
// }
// proccessPayment(new stripe ,1000);
// echo "<br>";
// proccessPayment(new paypal  ,2000);




/**      const   */

// class User{

// const ROLE = "user";  
// public $model ;
// public function getRole(){
//     return User::ROLE;
//     // $this->model; 
// }


// }




/**   Encapsulation  
 * 
 * access modifier
 * public
 * private
 * protected
*/


// class Animal{

// protected $age ;

// public function eat(){
//     echo "eat";
// }

// }

// $animal = new Animal;
// $animal->age;


class BanckAccount{
    
    private $balance ;


    public function setBalance($balance){
    $this->balance = $balance ;
    }

    public function getBalance(){
        return $this->balance ;
    }

}

$account = new BanckAccount ;
echo $account->getBalance();

echo "<br>";
 $account->setBalance(1000);
echo "<br>";
 echo $account->getBalance();