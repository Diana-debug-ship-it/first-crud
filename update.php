<?php
require_once 'config/connect_php.php';
global $connect;
$goods_id = $_GET['id'];
$good = mysqli_query($connect, "SELECT * FROM `goods` WHERE id='$goods_id'");
$good = mysqli_fetch_assoc($good);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Обновить товар</title>
</head>
<body>
<h2>Обновить товар</h2>
<form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value=<?=$goods_id ?>
    <p>Название</p>
    <input type="text" name="title" value="<?=$good['title']?>">
    <p>Описание</p>
    <textarea name="description"><?=$good['description']?></textarea>
    <p>Цена</p>
    <input type="number" name="price" value="<?=$good['price']?>">
    <button type="submit">Сохранить изменения</button>
</form>
</body>
</html>