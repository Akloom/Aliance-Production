<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "aliance-production";

try {
    $connect = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
} catch (PDOException $error) {
    echo "Ошибка соединения с БД" . $error->getMessage();
}
