<?php
$connect = mysqli_connect( '127.0.0.1', 'root', '', 'kirill');

if (!$connect) {
    die('ошибка базы данных');
}