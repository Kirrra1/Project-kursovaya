<?php 
session_start();
unset($_SESSION['mes']);
unset($_SESSION['user']);
unset($_SESSION['cart']);
header("Location: ../");
?>