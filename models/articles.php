<?php

function articles_all($link){
    $query = "Select * From product ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));


    $n = mysqli_num_rows($result);
    $articles = array();
    for ($i=0; $i<$n; $i++){
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }
    return $articles;
}//взять из базы галерея
function delivery_all($link){
    $query = "Select * From delivery ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));
    $articles = array();
    $articles = mysqli_fetch_assoc($result);
    return $articles;
}//взять из базы достаква
function reviews_all($link){
    $query = "Select * From reviews ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));
    $articles = array();
    $articles = mysqli_fetch_assoc($result);
    return $articles;
}//взять из базы отзыввы
function contacts_all($link){
    $query = "Select * From contacts ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));
    $articles = array();
    $articles = mysqli_fetch_assoc($result);
    return $articles;
}//взять из базы контакты
function sql_insert(){}
function articles_new(){}
function articles_edit($id, $title, $date, $content){

}
function articles_delete($id){

}
?>