<?php
session_start();
if(isset($_SESSION['errors'])){
  foreach($_SESSION['errors'] as $error){
    ?>
<div class="w-75 m-auto my-2 alert alert-danger"><?= $error ?></div>
    <?php 
  }
  unset($_SESSION['errors']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
<form class="w-75 m-auto mt-3" method="post" action="index.php">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">user name</label>
    <input type="text" name="username" class="form-control" id="exampleInputPassword1">
  </div>


  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">age</label>
    <input type="number" name="age" class="form-control" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
  </div>




  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>


