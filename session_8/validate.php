<?php




$validates = [

'username'=>[
'filter' => FILTER_VALIDATE_REGEXP ,
'my_options' => ['options'=> ['regexp'=> '/^[A-Z][a-z]{3,8}$/'] ],
'error' => 'enter valid username'

],


'age'=>[
'filter' => FILTER_VALIDATE_INT ,
'my_options' => ['options'=> ['min_range'=>15 , 'max_range'=>50]],
'error' => 'enter valid age'

],

'password'=>[
'filter' => FILTER_VALIDATE_REGEXP ,
'my_options' => ['options'=> ['regexp'=> '/^[a-z0-9]{3,8}$/'] ],
'error' => 'enter valid password'

],

'email'=>[
'filter' => FILTER_VALIDATE_EMAIL ,
'error' => 'enter valid email'

],


];
