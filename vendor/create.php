<?php
require_once '../config/connect_php.php';
global $connect;

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, "INSERT INTO `goods` (id, title, description, price) VALUES (NULL, '$title', '$description', '$price')");

header('location: ../index.php');