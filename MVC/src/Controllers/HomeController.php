<?php

namespace Marwa\Mvc\Controllers;
use Marwa\Mvc\Model\Customer;
use Marwa\Mvc\View;

class HomeController{
    public function index(){
        // echo "hi you ar into my controller";
        $data = new Customer;
        $customers = $data->all();
        // print_r($customers);
        View::render('home.php',$customers);
    }
}
