<?php
$conn = "";
try {
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername; dbname=reviews", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cont = ($_POST["name"]);
    $text = ($_POST["text"]);
    if (
        !empty($cont)&&
        !empty($text)
    ) {
        $stmt = $conn->query("INSERT INTO `reviews`(`reviews`, `text`) VALUES ('$cont', '$text')");
        $cont = "";
        $text = "";
        $_POST = "";
    }}
header("location: reviews.php");?>
