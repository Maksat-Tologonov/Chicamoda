<?php
require_once ("../database.php");
require_once ("../models/articles.php");
$link = db_connct();
$articles = articles_all($link)?>
<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <link rel="stylesheet" href="../css/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&display=swap" rel="stylesheet">
    <title>CHICOModa</title>
</head>
<body>
<div class="container">
    <header class="header">
        <label class="tops">
            <a href="#" class="fill"><img src="../images/filter.svg" ></a>
            <a href="tel:+996709449495" class="call"> 0550422231 </a>
            <a href="https://wa.me/<996709449495">
                <img src="../images/whapp.svg"  class="social" alt="Whatsapp">
            </a>
            <a href="https://www.instagram.com/chicomoda_kg/"><img src="../images/instagram.svg" alt="" class="social"></a>
            <div class="menu-burger"><span></span></div> </label>
<nav class="menu">
    <ul>
        <li><h1 class="icon">CHICOMODA</h1></li>
        <li><a href="index.php">Главная</a></li>
        <li><a href="delivery_input.php">Доставка</a></li>
        <li><a href="reviews.php">Отзывы</a></li>
        <li><a href="contacts.php">Контакты</a></li>

    </ul>
</nav>

<div class="wrapper">

    <form action="const.php" method="post" enctype="multipart/form-data" style="font-size: 10pt"><label>
        Заголовок<input name="title" type="text"  style="width: 200px; display:flex; flex-wrap: wrap; height: 25px;">
        Загрузить изображение<input type="file" name="img" style="width: 200px; display:flex; flex-wrap: wrap; height: 25px;">
        Загрузить изображение<input type="file" name="img1" style="width: 200px; display:flex; flex-wrap: wrap; height: 25px;">
        Загрузить изображение<input type="file" name="img2" style="width: 200px; display:flex; flex-wrap: wrap; height: 25px;">
        Цена<input name="price" type="text" style="width: 200px; display:flex; flex-wrap: wrap; height: 25px;">
        Цвет<input name="color" type="text" style="width: 200px; display:flex; flex-wrap: wrap; height: 25px;">
        Старая цена<input name="old_price" type="text" style="width: 200px; display:flex; flex-wrap: wrap; height: 25px;">
        Описание к сумке<input name="desc" type="text" style="width: 200px; display:flex; flex-wrap: wrap; height: 25px;">
        Дата загрузки<input name="date" type="date" style="width: 200px; display:flex; flex-wrap: wrap; height: 25px;">
        <input type="submit" value="Сохранить" name="upload">
    </label>
    </form>
    <?php

    foreach ($articles as $a):
        $s = base64_encode($a['image']); ?>

        <div class="card">
            <div class="up"><?=$a['title']?></div>
            <div class="mid" ><img src="data:image;base64, <?=$s?>" class="content-icon""></div>
            <div class="bottom">
                <?php if(empty($a['old_price'])):?><?=$a['price']?>
                <?php else:?>
                <strike><?=$a['old_price']?>сом</strike> &nbsp &nbsp <?=$a['price']?><?php endif?>сом</div>

            <form action="delete.php?id=<?=$a['id']?>" method="post">
            <button style="width: 100%">Удалить</button>
            </form>
        </div>
    <?php endforeach; ?>

</div></div>
<div class="footer">
<div class="foot">
    <div class="header_top"><a href="../index.php">
            <h1 class="icon-bottom">CHICOMODA</h1></a>
        <ul>
            <li  class="bottom-links"><a href="../index.php">Главная</a></li>
            <li  class="bottom-links"><a href="../new-bags.php">Новинки</a></li>
            <li  class="bottom-links"><a href="../delivery.php">Доставка</a></li>
            <li  class="bottom-links"><a href="../reviews.php">Отзывы</a></li>
            <li  class="bottom-links"><a href="../contacts.php">Контакты</a></li>

        </ul>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
