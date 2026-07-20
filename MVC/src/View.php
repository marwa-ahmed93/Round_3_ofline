<?php
namespace Marwa\Mvc;
class View{
    public static function render($fileName,$data){
        $viewFile = __DIR__."\View\\".$fileName;
        if(file_exists($viewFile)){
            include($viewFile); 
        }else{
            echo "file not found";
        }
    }
}