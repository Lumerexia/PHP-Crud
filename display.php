<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
    </button>
  
   
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Contact #</th>
      <th scope="col">Birthday</th>
      <th scope="col">Mothers Name</th>
      <th scope="col">Fathers Name</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="Select * from `crud1`";
  $result=mysqli_query($con,$sql);

  if($result){
    while( $row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $fname=$row['fname'];
      $mname=$row['mname'];
      $lname=$row['lname'];
      $age=$row['age'];
      $email=$row['email'];
      $address=$row['address'];
      $contact=$row['contactno'];
      $birthday=$row['birthday'];
      $mother=$row['mothersname'];
      $father=$row['fathersname'];
     
     
     
      echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$fname.'</td>
      <td>'.$mname.'</td>
      <td>'.$lname.'</td>
      <td>'.$age.'</td>
      <td>'.$email.'</td>
      <td>'.$address.'</td>
      <td>'.$contact.'</td>
      <td>'.$birthday.'</td>
      <td>'.$mother.'</td>
      <td>'.$father.'</td>
      <td><button class="btn btn-primary my-5"><a href="update.php? updateid='.$id.' "class="text-light">Update</a></button>
      <td><button class="btn btn-danger"><a href="delete.php? deleteid='.$id.' "class="text-light">Delete</a></button>
      </td>
      
      </tr>';
    }
  }
  


  ?>


    
</body>
</html>