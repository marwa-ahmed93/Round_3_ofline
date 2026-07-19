
<?php 
$id = $_GET['id'];

require "dbc.php";
$query = "SELECT * FROM `customers` WHERE id = $id";
 $result = mysqli_query($connection ,$query);
   $customer =   mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<form action="handleUpdate.php?id=<?php echo $customer['id'] ?>"  method="post" class="w-75 m-auto mt-3">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">First Name</label>
    <input type="text" name="first_name" class="form-control" value="<?= $customer['first_name'] ?>" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">last_name </label>
    <input type="text" name="last_name"  value="<?= $customer['last_name'] ?>" class="form-control" id="exampleInputPassword1">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email"  value="<?= $customer['email'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">gender </label>
    <input type="text" name="gender"  value="<?= $customer['gender'] ?>" class="form-control" id="exampleInputPassword1">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">phone </label>
    <input type="text" name="phone"  value="<?= $customer['phone'] ?>" class="form-control" id="exampleInputPassword1">
  </div>



<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">money </label>
    <input type="number" name="money"  value="<?= $customer['money'] ?>" class="form-control" id="exampleInputPassword1">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">country </label>
    <input type="text" name="country"  value="<?= $customer['country'] ?>" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>




</body>
</html>