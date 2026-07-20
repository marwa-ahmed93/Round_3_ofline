
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Document</title>
 </head>
 <body>
    

<a href="create.php" class="btn btn-warning m-4">create</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">email</th>
      <th scope="col">gender</th>
      <th scope="col">money</th>
      <th scope="col">city</th>
      <th scope="col">country</th>
      <th scope="col">country_code</th>
      <th>Update</th>
      <th>Delete</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
    $i =0; 
     foreach($data as $customer)  
    // while($row = mysqli_fetch_assoc($result))
    {?>

    <tr>
       <th scope="row"><?php echo $i++ ?></th>
      <th scope="row"><?php echo $customer['first_name'] ?></th>
      <td><?php echo $customer['last_name'] ?></td>
      <td><?php echo $customer['email'] ?></td>
      <td><?php echo $customer['gender'] ?></td>
      <td><?php echo $customer['money'] ?></td>
      <td><?php echo $customer['city'] ?></td>
      <td><?php echo $customer['country'] ?></td>
      <td><?php echo $customer['country_code'] ?></td>
      <td><a href="updateCustomer.php?id=<?php echo $customer['id'] ?>" class="btn btn-success">Update</a></td>
      <td><a href="deleteCustomer.php?id=<?php echo $customer['id'] ?>" class="btn btn-danger">Delete</a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>


 </body>
 </html>