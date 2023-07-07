

<?php

$serverName="localhost";
$userName="root";
$passworld="";
$dbName="mh_opi";


$conn = mysqli_connect($serverName,$userName,$passworld,$dbName);

if(!$conn){
    die(
        "connection field". mysqli_connect_error());
}

else{
    
}



?>