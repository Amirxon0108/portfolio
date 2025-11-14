<?php
session_start();

$servername="localhost";
$username="root";
$pass="";
$db_name ="portfolio";
mysqli_report((MYSQLI_REPORT_ERROR)MYSQLI_REPORT_STRICT);
$conn= new mysqli($servername,$pass,$username,$db_name);

if($conn->connected_error()){
    die("Connected error". $conn_error);
} ?>