<?php
include 'configpost.php';

$pname=$_POST['pname'];
$email=$_POST['email'];
$pid=$_POST['pid'];
$address=$_POST['address'];


$inserQuery="INSERT INTO `product`(`pname`, `email`, `pid`, `address`) VALUES ('$pname','$email','$pid','$address')";
 if(  !mysqli_query($conn, $inserQuery)){
  die ("Registration Not Completed?????????????????????????!");
 }else{
    
  echo"<script>alert('Registration Completed')</script>";
    
  echo"<script>location.href='cricket.php'</script>";
 }

