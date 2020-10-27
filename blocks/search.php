
<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <link rel="stylesheet" href="../js/nouislider.min.js">
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

        <div class="header_top"><a href="">
                <h1 class="icon">CHICOMODA</h1></a>
            <form action="">
                <button class="btn-top" id="tap">Заказать звонок</button>
            </form>
        </div>

        <nav class="menu">
            <ul>
                <li><a href="../index.php">Главная</a></li>
                <li><a href="../new-bags.php">Новинки</a></li>
                <li><a href="../delivery.php">Доставка</a></li>
                <li><a href="../reviews.php">Отзывы</a></li>
                <li><a href="../contacts.php">Контакты</a></li>
                <li><label><div class="cart">корзина<div>/1000 сом</div>
                        </div>
                    </label></li>
            </ul>
        </nav>



<?php

$connect = mysqli_connect("localhost", "root", "", "shop");

$search_get = $_GET['search'];


$sql = "SELECT * FROM `product` WHERE `title` LIKE '%$search_get%' ";

$select = mysqli_query($connect, $sql);

while ($a = mysqli_fetch_assoc($select)) {
    $s = base64_encode($a['image']);?>
    <div class="card">
    <div class="up"><?=$a['title']?></div>
    <div class="mid" ><img src="data:image;base64, <?=$s?>" class="content-icon""></div>
    <div class="bottom">
        <?php if(empty($a['old_price'])):?><?=$a['price']?>
        <?php else:?>
            <strike><?=$a['old_price']?>сом</strike> &nbsp &nbsp <?=$a['price']?><?php endif?>сом</div></div>
        <form action="../index.php" style="position: absolute; float: right">
            <button class="btn-top">Вернутся</button></form>
    <?php
}


include ('footer.php');
?>
