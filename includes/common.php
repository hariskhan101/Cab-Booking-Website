<?php
    $con = mysqli_connect("localhost", "root", "", "cabbooking")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
