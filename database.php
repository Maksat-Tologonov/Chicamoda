<?php
define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'shop');//база галерея для сумок
define('MYSQL_DEFINE_DB', 'delivery');//база доставки
define('MYSQL_REVIEWS', 'reviews');//база отзывы
define('MYSQL_CONTACTS', 'contacts');//база контакты
function db_connct(){
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER,
        MYSQL_PASSWORD, MYSQL_DB)
        or die("error: ".mysqli_error($link));
    if(!mysqli_set_charset($link, "utf8")){
        printf("Error: ".mysqli_error($link));
    }
    return $link;
}//для сумок
function db_delivery(){
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER,
        MYSQL_PASSWORD, MYSQL_DEFINE_DB)
    or die("error: ".mysqli_error($link));
    if(!mysqli_set_charset($link, "utf8")){
        printf("Error: ".mysqli_error($link));
    }
    return $link;
}//для доставки
function db_reviews(){
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER,
        MYSQL_PASSWORD, MYSQL_REVIEWS)
    or die("error: ".mysqli_error($link));
    if(!mysqli_set_charset($link, "utf8")){
        printf("Error: ".mysqli_error($link));
    }
    return $link;
}//для отзыва
function db_contacts(){
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER,
        MYSQL_PASSWORD, MYSQL_CONTACTS)
    or die("error: ".mysqli_error($link));
    if(!mysqli_set_charset($link, "utf8")){
        printf("Error: ".mysqli_error($link));
    }
    return $link;
}//для контактов