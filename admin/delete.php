<?php
require_once('db.php');
$conn = db_connect();
$id = $_GET['id'];
$stmt = $conn->query("DELETE FROM `product` WHERE id='$id'");
header( 'location:index.php');