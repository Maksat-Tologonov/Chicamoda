<?php
include ('blocks/header.php');?>
    <div class="container">
        <h1>Оставить отзыв</h1>
        <form action="rev.php" method="post">
            <input type="email" name="name" class="form-control" placeholder="Введите ваш Email"><br>
            <input type="text" class="form-control" name="text" placeholder="Введите ваш коментарий"><br>
            <button class="btn btn-success" type="submit">Отправить</button>
        </form>
    </div>
<?php
    $link = mysqli_connect("localhost", "root", "", "reviews");
    $query = "Select * From reviews";
    $result = mysqli_query($link, $query);
    $n = mysqli_num_rows($result);
    $articles = array();
    while ($articles = mysqli_fetch_assoc($result)):?>
    <div>
            <div class="container" style="margin: 30px; background-color: #f0f0f0;">
                <div class="content">
                <div class="" style="font-size: 12pt; overflow-x:hidden"><?=$articles['reviews']?></div>
                <span class="navbar-brand" style="font-size: 12pt"><?=$articles['text']?></span>
                </div>
            </div></div>
        <?php endwhile;
include ('blocks/footer.php');