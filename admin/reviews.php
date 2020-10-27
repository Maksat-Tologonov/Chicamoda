<?php
include ("../blocks/header-admin.php");
$link = mysqli_connect("localhost", "root", "", "reviews");
$query = "Select * From reviews";
$result = mysqli_query($link, $query);
$n = mysqli_num_rows($result);
$articles = array();
while ($articles = mysqli_fetch_assoc($result)):?>
    <div class="container" style="margin: 30px; background-color: #f0f0f0;">
        <div class="content">
            <div class="" style="font-size: 12pt; overflow-x:hidden"><?=$articles['reviews']?></div>
            <span class="navbar-brand" style="font-size: 12pt"><?=$articles['text']?></span>
        </div>
        <form action="delete_reviews.php?id=<?=$articles['id']?>" method="post">
            <button style="width: 100%">Удалить</button>
        </form>
    </div>
<?php endwhile;
include ('../blocks/footer_admin.php');