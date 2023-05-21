<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud1` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
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

if(isset($_POST['submit'])){
    $firstname=$_POST['fname'];
    $middlename=$_POST['mname'];
    $lastname=$_POST['lname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $birthday=$_POST['birthday'];
    $mother=$_POST['mothersname'];
    $father=$_POST['fathersname'];
  


    $sql= "update `crud1` set id =$id,fname='$firstname',mname='$middlename',lname='$lastname',age='$age',email='$email',address='$address',contactno='$contact'
    ,birthday='$birthday',mothersname='$mother',fathersname='$father' where id=$id";
    
    $result=mysqli_query($con,$sql);
    if($result){
        
        //echo "data updated successfully";
        header('location:display.php');
    } else
    {
        die(mysqli_error($conn));
    }

}  

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Update CRUD</title>
  </head>
  
  
  
  
  <body>
  <div class="container my-5">
        <form method="post">
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text"  class="form-control" name="fname" placeholder="First name" autocomplete="off"  value=<?php echo $fname;?>>
            </div>

        <div class="form-group">
            <label for="mname">Middle Name</label>
            <input type="text"  class="form-control"  placeholder="Middle name" autocomplete="off" name="mname"  value=<?php echo $mname;?>>
            </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text"  class="form-control"  placeholder="Last name" autocomplete="off" name="lname" value=<?php echo $mname;?>>
            </div>
        
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text"  class="form-control"  placeholder="Age" autocomplete="off" name="age" value=<?php echo $age;?>>
            </div>   

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text"  class="form-control"  placeholder="Email" autocomplete="off" name="email" value=<?php echo $email;?>>
            </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text"  class="form-control"  placeholder="Address" autocomplete="off" name="address" value=<?php echo $address;?>>
            </div>

        <div class="form-group">
            <label for="birthday">Contact #</label>
            <input type="text"  class="form-control"  placeholder="Contact #" autocomplete="off" name="contact" value=<?php echo $contact;?>>
            </div>

        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="date"  class="form-control"  placeholder="Birthday" autocomplete="off" name="birthday" value=<?php echo $birthday;?>>
            </div>

         <div class="form-group">
            <label for="fathersname">Mothers Namee</label>
            <input type="text"  class="form-control"  placeholder="Mothers Name" autocomplete="off" name="mothersname" value=<?php echo $mother;?>>
            </div>
        
        <div class="form-group">
            <label for="fathersname">Fathers Name</label>
            <input type="text"  class="form-control"  placeholder="Fathers Name" autocomplete="off" name="fathersname" value=<?php echo $father;?>>
            </div>

  

    <button type="submit" class="btn btn-primary" name="submit">Update</button>
     
    
    </div>
    
    </form>
    

   

  </body>
</html>