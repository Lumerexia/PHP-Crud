<?php
include 'connect.php';
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
  


    $sql= "insert into `crud1` (fname,mname,lname,age,email,address,contactno,birthday,mothersname,fathersname)
    values('$firstname','$middlename','$lastname','$age','$email','$address','$contact','$birthday','$mother','$father')";
    
    $result=mysqli_query($con,$sql);
    if($result){
    
        //echo "data inserted successfully";
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

    <title>CRUD Operation Finals</title>
  </head>
  
  
  
  
  <body>
  <div class="container my-5">
        <form method="post">
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text"  class="form-control" placeholder="First name" autocomplete="off" name="fname">
            </div>

        <div class="form-group">
            <label for="mname">Middle Name</label>
            <input type="text"  class="form-control"  placeholder="Middle name" autocomplete="off" name="mname">
            </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text"  class="form-control"  placeholder="Last name" autocomplete="off" name="lname">
            </div>
        
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text"  class="form-control"  placeholder="Age" autocomplete="off" name="age">
            </div>   

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text"  class="form-control"  placeholder="Email" autocomplete="off" name="email">
            </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text"  class="form-control"  placeholder="Address" autocomplete="off" name="address">
            </div>

        <div class="form-group">
            <label for="birthday">Contact #</label>
            <input type="text"  class="form-control"  placeholder="Contact #" autocomplete="off" name="contact">
            </div>

        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="date"  class="form-control"  placeholder="Birthday" autocomplete="off" name="birthday">
            </div>

         <div class="form-group">
            <label for="fathersname">Mothers Namee</label>
            <input type="text"  class="form-control"  placeholder="Mothers Name" autocomplete="off" name="mothersname">
            </div>
        
        <div class="form-group">
            <label for="fathersname">Fathers Name</label>
            <input type="text"  class="form-control"  placeholder="Fathers Name" autocomplete="off" name="fathersname">
            </div>

  

            <button class="btn btn-primary my-5"><a href="display.php" class="text-light">submit</a></button>
     
    
    </div>
    
    </form>
    

   

  </body>
</html>