<?php 
require_once "connect.php";
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
mysqli_query($connect, "INSERT INTO `orders`( `name`, `mail`, `phone`) VALUES ('$name','$mail','$phone')");
header('Location: ../basket.php');
?>