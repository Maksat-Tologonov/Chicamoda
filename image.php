<?php

include ('blocks/header.php');

$id = $_GET['id'];

$link = mysqli_connect("localhost", "root", "", "shop");
$query = "Select * From product where id='$id'";
$result = mysqli_query($link, $query);
$n = mysqli_num_rows($result);
$articles = array();
$row = mysqli_fetch_assoc($result);
$articles[] = $row;

foreach ($articles as $a):
        $s1 = base64_encode($a['image']);
        $s2 = base64_encode($a['image_1']);
        $s3 = base64_encode($a['image_2']);?>
<div class="write">
    <h4><?=$a['title']?></h4>
<div class="big-card">
    <img class="blo" src="data:image;base64, <?=$s1?>"</div>
 <div class="big-card">
     <img class="blo" src="data:image;base64, <?=$s2?>" alt="НЕТ ИЗОБРАЖЕНИЯ"></div>
<div class="big-card">
    <img class="blo" src="data:image;base64, <?=$s3?>" alt="НЕТ ИЗОБРАЖЕНИЯ"></div>
</div>

    <?php if(empty($a['old_price'])):?><?=$a['price']?>
<?php else:?>
    <strike><?=$a['old_price']?>сом</strike> &nbsp &nbsp <?=$a['price']?><?php endif?>сом</div>
    <div class="description"><?=$a['description']?></div>
    <div class="but"><button class="butt">Добавить в корзину</button></div>
    <form action="index.php" class="but"><button class="butt">Вернутся</button></form>
    </div></div>
<?php endforeach;?><?php
            include('blocks/footer.php'); ?>
