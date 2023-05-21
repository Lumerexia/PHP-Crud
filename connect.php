<?php

$con=new mysqli('localhost','root','','crud');

if($con)
{
    //echo "connected succesfully";
}

else
{
    die(mysqli_error($con));
}


?>