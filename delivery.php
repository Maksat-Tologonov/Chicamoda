<?php
require_once ("database.php");
require_once ("models/articles.php");
$link = db_delivery();
$articles = delivery_all($link);
include ('blocks/header.php');?>
<div style="margin: 50px">
<h5>
    <?=$articles['delivery']?>
</h5></div>
<?php
include ('blocks/footer.php'); ?>