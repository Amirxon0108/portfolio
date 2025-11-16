<?php

require '../config/db.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
$name=$_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$theme= $_POST['subject'] ?? '';
$msg= $_POST['message'] ?? '';
$empty=[];
if(empty($name)) $empty['name']= "Ismingiz kiritilmagan";
if(empty($email)) $empty['email'] = "Emailingizni kiriting";
if(empty($theme)) $empty['theme']="Nima xaqidaligini yozmadingiz";
if(empty($msg)) $empty['message']="Xabar kiritmadingiz";
if(!empty($empty)){
    $_SESSION['contact_error']=$empty;
    header("Location:../pages/index.php#contact");
    exit;
}
    $stmt=$conn->prepare("INSERT INTO portfolio(name, email, theme, message) VALUES (?,?,?,?)");
$stmt->bind_param('ssss',$name,$email,$theme,$msg);
if($stmt->execute()){
$_SESSION['contact_success']= "Xabar muofaqiyatli yuborildi";
header("Location:../pages/index.php#contact");
exit;
}

}

