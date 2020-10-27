<?php
require_once ("database.php");
require_once ("models/articles.php");
$link = db_connct();
$articles = articles_all($link);
?>

<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" href="/js/nouislider.min.js">
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&display=swap" rel="stylesheet">
    <title>CHICOModa</title>
</head>
<body>
<div class="all">
<div class="container">
    <header class="header">
        <label class="tops">
            <a href="#" class="fill"><img src="images/filter.svg" ></a>
            <a href="tel:+996709449495" class="call"> 0550422231 </a>
            <a href="https://wa.me/<996709449495">
                <img src="/images/whapp.svg"  class="social" alt="Whatsapp">
            </a>
            <a href="https://www.instagram.com/chicomoda_kg/"><img src="images/instagram.svg" alt="" class="social"></a>
            <div class="menu-burger"><span></span></div> </label>

        <div class="header_top"><a href="">
                <h1 class="icon">CHICOMODA</h1></a>
            <form action="">
                <button class="btn-top" id="tap">Заказать звонок</button>
            </form>
            <label>
                <form action="blocks/search.php " method="get">

                    <input type="search"required class="link" placeholder="  Что искать?" name="search">
                    <button class="btn-top">Поиск</button>

                </form></label>
</div>

        <nav class="menu">
            <ul>
                <li><a href="/index.php">Главная</a></li>
                <li><a href="new-bags.php">Новинки</a></li>
                <li><a href="delivery.php">Доставка</a></li>
                <li><a href="/reviews.php">Отзывы</a></li>
                <li><a href="contacts.php">Контакты</a></li>
                <li><label><div class="cart">корзина<div>/1000 сом</div>
                        </div>
                    </label></li>
            </ul>
        </nav>


    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slick1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>cовременный дизайн и качество</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slick2.jpg" class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>многообразие и лаконичность</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slick3.webp" class="d-bloc1 w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>уникальный дизайн</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slick4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>на любой вкус и бюджет</h1>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="wrapper">
        <?php

        foreach ($articles as $a):
        $s = base64_encode($a['image']);?>

            <div class="card">
                <div class="up"><?=$a['title']?></div>
                <div class="desc"><?=$a['desc']?></div>
                <div class="mid" ><a href="image.php?id=<?=$a['id']?>"><img src="data:image;base64, <?=$s?>" class="content-icon""></a></div>
                <div class="bottom">
                    <?php if(empty($a['old_price'])):?><?=$a['price']?>
                    <?php else:?>
                        <strike><?=$a['old_price']?>сом</strike> &nbsp &nbsp <?=$a['price']?><?php endif?>сом</div>
            </div>
            <?php endforeach; ?>
        </div>
    <?php include ('blocks/footer.php');?>
</div>
</body>
</html>