<?php
$connection = mysqli_connect("localhost","root","","cms2");

if(!$connection){
    die("Database Connection Failed! " . mysqli_error($connection));
}else{
    echo "Connection Established!";
}
?>