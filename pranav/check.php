<?php

session_start();
if(!isset($_SESSION['username'])){
    echo "you are being checked";
    header('location:login.php');
    die();
}
else{
   
  
     
header("Location: booking.php"); // perform correct redirect.
    }

?>