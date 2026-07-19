<?php

require "dbc.php";

$query = "SELECT * FROM `customers` ORDER BY id DESC ";

 $result =   mysqli_query($connection , $query); 

  // $customers =   mysqli_fetch_all($result,MYSQLI_ASSOC);
//   echo "<pre>";
//   print_r($customers);
//   die();
// $customer =  mysqli_fetch_assoc($result);


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
    


<a class="btn btn-primary m-1" href="createCustomer.php">Create</a>

<table class="table table-dark table-striped">
 
<thead>
    <th>index</th>
    <th>first_name</th>
    <th>last_name</th>
    <th>email</th>
    <th>gender</th>
    <th>phone</th>
    <th>money</th>
    <th>country</th>
    <th>update</th>
    <th>Delete</th>
</thead>


<tbody>

<?php 
$i=1 ;
// foreach($customers as $customer)  { 

while($row = mysqli_fetch_assoc($result) ) {
?>
<tr>
    <td><?= $i++ ?></td>
<td><?php echo $row['first_name'] ?></td>
<td><?php echo $row['last_name'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['gender'] ?></td>
<td><?php echo $row['phone'] ?></td>
<td><?php echo $row['money'] ?></td>
<td><?php echo $row['country'] ?></td>
<td><a class="btn btn-warning" href="UpdateCustomer.php?id=<?= $row['id']   ?>">Update</a></td>
<td><a class="btn btn-danger" href="deleteCustomer.php?id=<?= $row['id'] ?> ">Delete</a></td>

</tr>
<?php } ?>


</tbody>

</table>





  </body>
  </html>