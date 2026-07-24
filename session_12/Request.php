<?php

class Request{

 public function postData($key ,$value ){
   $_POST[$key] = $value ;

 }
 public function getData($key){
    return $_GET[$key];
 }


}