<?php
require_once '../config/connect_php.php';
global $connect;

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM goods WHERE id = '$id'");
header('location: /');