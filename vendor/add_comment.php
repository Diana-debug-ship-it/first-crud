<?php
require_once '../config/connect_php.php';
global $connect;

$goods_id = $_POST['id'];
$comment = $_POST['comment_area'];


mysqli_query($connect, "INSERT INTO comments (id, product_id, comment) VALUES (NULL, '$goods_id', '$comment')");
header('location: /comment.php?id='.$goods_id);