<?php
/**SOLID */

// S Single

// class User
// {
//     public function save()
//     {
//         // Save to DB
//     }

//     public function sendEmail()
//     {
//         // Send Email
//     }
// }


class User
{
    public function save()
    {
        // Save to DB
    }
}

class MailService
{
    public function sendEmail()
    {
        // Send Email
    }
}


////////////////////////////////////////////////////////////////

/*   O Open */

// class Payment
// {
//     public function pay($type)
//     {
//         if($type=="cash"){
//         }

//         if($type=="visa"){
//         }
//     }
// }



interface Payment
{
    public function pay();
}

class CashPayment implements Payment
{
    public function pay()
    {
        echo "Cash";
    }
}

class VisaPayment implements Payment
{
    public function pay()
    {
        echo "Visa";
    }
}

class PaypalPayment implements Payment
{
    public function pay()
    {
        echo "Paypal";
    }
}


//////////////////////////////////////////////////

/**l Liskov  */

// class Animal
// {
//     public function move()
//     {
//         echo "Moving";
//     }
// }

// class Dog extends Animal
// {
// }


// class Bird
// {
//     public function fly(){}
// }

// class Penguin extends Bird
// {
//     public function fly()
//     {
//         throw new Exception();
//     }
// }   



////////////////////////////////////////////////////////////////
/**I - Interface */

interface Worker
{
    public function work();
    public function eat();
}

class Robot implements Worker
{
    public function work(){}

    public function eat()
    {
     
    }
}


interface Workable
{
    public function work();
}

interface Eatable
{
    public function eat();
}




////////////////////////  Dependency   ///////////////////////////////////

// class Mysql
// {
// }

// class User
// {
//     private $db;

//     public function __construct()
//     {
//         $this->db = new Mysql();
//     }
// }




// interface Database
// {
//     public function connect();
// }

// class Mysql implements Database
// {
//     public function connect(){}
// }

// class Mongo implements Database
// {
//     public function connect(){}
// }

// class User
// {
//     private $db;

//     public function __construct(Database $db)
//     {
//         $this->db = $db;
//     }
// }