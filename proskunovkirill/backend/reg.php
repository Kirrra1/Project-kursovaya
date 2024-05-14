<?php
require_once 'connect.php';
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordlog = $_POST['passwordlog'];
$hash = md5($password);
$hash2 = md5($passwordlog);

if (strlen($password) < 6) {
    $_SESSION['mes'] = '<p>Длина пароля меньше 6 символов</p>';
    header('Location: ../registration.php');
} else {
    mysqli_query($connect, "INSERT INTO `user`(`id`, `name`, `email`, `password`) VALUES ( NULL,'$name','$email','$hash')");
    $_SESSION['mes'] = '<p>Регистрация прошла успешно</p>' ;
    header('Location: ../registration.php');
}
if (!$password) {
   $login = mysqli_query($connect, "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$hash2'");
if (mysqli_num_rows($login) > 0){
    $user = mysqli_fetch_assoc($login);
    $_SESSION['user'] = $user;
    header('Location: ../catalog.php');
}else{
$_SESSION['mes'] = '<p>Неправильный логин или пароль</p>' ;
header('Location: ../registration.php');
}
}



?>