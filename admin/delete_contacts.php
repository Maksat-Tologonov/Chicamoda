<?php
$conn = "";
$id = $_GET['id'];
try {
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername; dbname=contacts", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$select = $conn->query("DELETE FROM `contacts` WHERE id='$id'");
header( 'location: contacts.php');