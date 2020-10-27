<?php
require_once ("database.php");
require_once ("models/articles.php");
$link = db_contacts();
$articles = contacts_all($link);
include ('blocks/header.php');?>
<div><?=$articles['contacts']?></div>
    <div><?=$articles['text']?></div>
<?php
include ('blocks/footer.php');