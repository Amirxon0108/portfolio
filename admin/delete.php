<?php
require '../config/db.php';
if($_SERVER['REQUEST_METHOD']== 'POST'){
$id=$_POST['id'] ?? '' ;

$stmt = $conn->prepare("DELETE FROM portfolio WHERE id = ?");
$stmt->bind_param('s',$id);

if($stmt->execute()==TRUE){
        $_SESSION["delete"]="Malumotlar o'chirildi";
        header("Location:tables.php");
        exit;
    }
}