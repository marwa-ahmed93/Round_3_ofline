
<?php 
session_start();

if(isset($_SESSION['errors'])){
  foreach( $_SESSION['errors']  as $error){
    ?>
 <div class="alert alert-danger w-75 m-auto mt-3">

 <?php echo $error ."<br>"; ?>
 </div>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    

<!-- <form class="w-75 m-auto my-4"  action="index.php" method="post">


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User name</label>
    <input type="test" name="name"
     value="<?php if(isset($_COOKIE['username'] )) echo $_COOKIE['username'] ; ?>" class="form-control" id="exampleInputEmail1" >
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password"
     value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'] ; ?>" class="form-control" id="exampleInputPassword1">
  </div>


  <div class="mb-3 form-check">
    <input type="checkbox" name="rememberMe" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">remember me</label>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->


<!-- <form class="w-75 m-auto my-4"  action="index.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Number</label>
    <input type="number" name="num1" class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Second Number</label>
    <input type="number" name="num2" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">

<select name="operators" class="form-control" id="">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="/">/</option>
    <option value="*">*</option>
</select>
 </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->









<!-- <form action="index.php" method="post" class="w-75 m-auto my-4 ">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" >

  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->





<form action="index.php"
 method="post" class="w-75 m-auto my-4 " enctype="multipart/form-data" >
 
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="file" name="image"  class="form-control" id="exampleInputEmail1" >

  </div>


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>




</body>
</html>