<?php
require_once 'config/connect_php.php';
global $connect;

$goods_id = $_GET['id'];
$good = mysqli_query($connect, "SELECT * FROM goods WHERE id='$goods_id'");
$good = mysqli_fetch_assoc($good);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Просмотр товара</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="index.php">Главная</a>

<div>
    <h2><?= $good['title'] ?></h2>
    <p><em><?= $good['description'] ?></em></p>
    <p><span><b>Цена: </b></span><span><em><?= $good['price'] ?></em></span></p>
</div>

<h3>Добавить товар</h3>
<form method="post" action="vendor/add_comment.php">
    <input type="hidden" name="id" value="<?= $goods_id ?>">
    <textarea name="comment_area" placeholder="Комментарий"></textarea>
    <button type="submit">Отправить</button>
</form>

<div>
    <h5>Комментарии</h5>
    <?php
    $comments = mysqli_query($connect, "SELECT * FROM comments WHERE product_id='$goods_id'");
    $comments = mysqli_fetch_all($comments);
    foreach ($comments as $comment) {
        ?>
        <li><?= $comment[2] ?></li>
        <?php
    }
    ?>
</div>
</body>
</html>
