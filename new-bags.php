<?php
require_once ("database.php");
require_once ("models/articles.php");
$link = db_connct();
$articles = articles_all($link);
include ('blocks/header.php');?>
<div class="wrapper act"><?php
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
    </div><?php
include ('blocks/footer.php');
