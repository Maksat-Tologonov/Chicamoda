<?php
$conn = "";
try {
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername; dbname=delivery", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$id = $_GET['id'];
$stmt = $conn->query("DELETE FROM `delivery` WHERE id='$id'");
header( 'location:delivery_input.php');