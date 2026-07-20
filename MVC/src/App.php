<?php

// echo $_SERVER['QUERY_STRING'];

namespace Marwa\Mvc;

class App{
private $url ;
private $controller;
private $method;
public function __construct($request)
{
     $this->url = $request->QueryString();
     // echo $this->url;
     $this->bootUrl();
     $this->callMethod();
}
public function bootUrl(){
     $urlArray = explode('/',$this->url);
     // print_r($urlArray);
     $this->controller = $urlArray[0];
     $this->method = $urlArray[1];
}
public function callMethod(){
     $this->controller = "Marwa\Mvc\Controllers\\" . $this->controller ."controller";
     if(class_exists($this->controller)){
          // echo "hi";
          $object = new $this->controller;
          if(method_exists($this->controller , $this->method)){
               //  echo "Hello Method";
               call_user_func([$object , $this->method]);
          }
          else{
               echo "method not found";
          }
     }
     else{
          echo "class not exist";
     }
}

}