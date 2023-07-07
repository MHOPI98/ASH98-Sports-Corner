<?php
include 'configpost.php';
$pid=$_GET['updatedid'];
$sql="Select * from `product` where pid=$pid";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$pname=$row['pname'];
$email=$row['email'];
$pid=$row['pid'];
$address=$row['address'];
    

if(isset($_POST['update'])){
    $pname=$_POST['pname'];
    $email=$_POST['email'];
    $pid=$_POST['pid'];
    $address=$_POST['address'];

    $sql="update `product` set pid=$pid, pname='$pname',email='$email',  address='$address' where pid=$pid";
    $result=mysqli_query($conn,$sql);
    if($result){
        
        header('location:display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <title>Crud Operation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div clasas="login-page">
        <form method="post">
            <div class="form">
            
                <input type="text" class="form-control" placeholder="Enter your name" name="pname" autocomplete="off" value=<?php echo $pname;?>>
                
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email;?>>
                
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="pid" autocomplete="off" value=<?php echo $pid;?>>
                    
                <input type="text" class="form-control" placeholder="Enter your payment information" name="address" autocomplete="off" value=<?php echo $address;?>>
                    <button type="update" class="btn btn-primary" name="update">Update</button>
            </div>      
        </form>
    </div>

    <!-- footer section starts here -->
    <section class="footer">
        <div class="credit">&copy; MH OPI</div>
       </section>
       <!-- footer section ends -->
</body>

</html>

