<?php
namespace Marwa\Mvc;


class Request{
    public function QueryString(){
    return $_SERVER['QUERY_STRING'];
}
}