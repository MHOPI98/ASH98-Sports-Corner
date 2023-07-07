<?php
include 'configpost.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="abc">
        <button class="btn btn-primary my-5"><a href="card.php" class="text-light">Card</a></button>

        <table class="table">
            <thead>
            
                <tr>
                    <th scope="col">pname</th>
                    <th scope="col">email</th>
                    <th scope="col">pid</th>
                    <th scope="col">address</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php

    $sql= "Select * from `product`";
    $result=mysqli_query($conn, $sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $pname=$row['pname'];
            $email=$row['email'];
            $pid=$row['pid'];
            $address=$row['address'];
            echo '<tr>
            <th scope="row">
            <td>'.$pname.'</td>
            <td>'.$email.'</td>
            <td>'.$pid.'</td>
            <td>'.$address.'</td>
            <td>
            <button class=btn btn-primary><a href="update.php?updatedid='.$pid.'" class="text-light">Update</a></button> 
            <button class=btn btn-danger><a href="delete.php?deletedid='.$pid.'" class="text-light">Delete</a></button>
            </td>
          </tr>';
        }
    }
    ?>

            </tbody>
        </table>

    </div>

    <!-- footer section starts here -->
    <section class="footer">
        <div class="credit">&copy; MH OPI</div>
       </section>
       <!-- footer section ends -->

</body>

</html>