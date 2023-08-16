<?php
require_once '../config/connect_php.php';
global $connect;

$goods_id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, "UPDATE `goods` SET title = '$title', description = '$description', price = '$price' WHERE id = '$goods_id'");

header('location: ../index.php');
