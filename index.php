<?php
//выводит информацию о пхп
//phpinfo();

require_once 'config/connect_php.php';
global $connect;
$goods = mysqli_query($connect, "SELECT * FROM `goods`");
//var_dump($goods);
$goods = mysqli_fetch_all($goods);
//echo '<pre>';
//print_r($goods);
//echo '</pre>';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>Название</th>
        <th>Описания</th>
        <th>Цена</th>
        <th>&#9674</th>
        <th>&#9998</th>
        <th>&#10006</th>
    </tr>
    <?php
    //тупой способ
    //    foreach ($goods as $item) {
    //        echo '
    //    <tr>
    //        <td>'.$item[0].'</td>
    //        <td>'.$item[1].'</td>
    //        <td>'.$item[2].'</td>
    //        <td>'.$item[3].'</td>
    //    </tr>';
    //    }

    //умни способ
    foreach ($goods as $item) {
        ?>
        <tr>
            <td><?= $item[0] ?></td>
            <td><?= $item[1] ?></td>
            <td><?= $item[2] ?></td>
            <td><?= $item[3] ?></td>
            <td><a href="comment.php?id=<?= $item[0] ?>">Просмотр</td>
            <td><a href="update.php?id=<?= $item[0] ?>">Обновить</td>
            <td><a href="vendor/delete.php?id=<?= $item[0] ?>">Удалить</td>

        </tr>
        <?php
    }
    ?>
<!--    <tr>-->
<!--        <td>id</td>-->
<!--        <td>Товар</td>-->
<!--        <td>Описание товара</td>-->
<!--        <td>500</td>-->
<!---->
<!--    </tr>-->
</table>
<h2>Добавить новый товар</h2>
<form action="vendor/create.php" method="post">
    <p>Название</p>
    <input type="text" name="title">
    <p>Описание</p>
    <textarea name="description"></textarea>
    <p>Цена</p>
    <input type="number" name="price">
    <button type="submit">Добавить</button>
</form>
</body>
</html>
