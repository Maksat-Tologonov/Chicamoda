<?php
$conn = "";
$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername; dbname=reviews", $username, $password);

$select = $conn->query("DELETE FROM `reviews` WHERE id='$id'");
header( 'location: admin/reviews.php');
