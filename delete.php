<?php
include 'configpost.php';
if(isset($_GET['deletedid'])){
    $pid=$_GET['deletedid'];
    $sql="delete from `product` where pid=$pid";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "deleted successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>