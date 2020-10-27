<?php

require_once('db.php');



if(isset($_FILES['img'])){
    $img_type = substr($_FILES['img']['type'], 0, 5);
    $img_size = 2*1024*1024;
    if(!empty($_FILES['img']['tmp_name']) and $img_type === 'image' and $_FILES['img']['size'] <= $img_size){
        $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    }
}
if(isset($_FILES['img1'])){
    $img_type = substr($_FILES['img1']['type'], 0, 5);
    $img_size = 2*1024*1024;
    if(!empty($_FILES['img1']['tmp_name']) and $img_type === 'image' and $_FILES['img1']['size'] <= $img_size){
        $img1 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
    }
}
if(isset($_FILES['img2'])){
    $img_type = substr($_FILES['img2']['type'], 0, 5);
    $img_size = 2*1024*1024;
    if(!empty($_FILES['img2']['tmp_name']) and $img_type === 'image' and $_FILES['img2']['size'] <= $img_size){
        $img2 = addslashes(file_get_contents($_FILES['img2']['tmp_name']));
    }
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = test_input($_POST["title"]);
    $price = test_input($_POST["price"]);
    $color = test_input($_POST["color"]);
    $old_price = test_input($_POST["old_price"]);
    $desc = test_input($_POST["desc"]);
    $data = test_input($_POST["date"]);
    $conn = db_connect();
    if (
        !empty($title) &&
        !empty($price) &&
        !empty($color) &&
        !empty($desc) &&
        !empty($data)
    ) {
        $stmt = $conn->query("INSERT INTO `product`(`title`, `image`,`image_1`,`image_2`, `price`, `color`, `old_price`, `description`, `date`) VALUES ('$title','$img','$img1','$img2','$price','$color','$old_price','$desc','$data')");
        header( 'location:index.php');
    }

}
