<?php


$servername="localhost";
$username="root";
$pass="";
$db_name ="portfolio";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn= new mysqli($servername,$username,$pass,$db_name);

if($conn->connect_error){
    die("Connected error". $conn->connect_error);
} ?>