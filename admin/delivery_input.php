<?php
include ('../blocks/header-admin.php');
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = ($_POST["title"]);
    if (
        !empty($title)
    ) {
        $stmt = $conn->query("INSERT INTO `delivery`(`delivery`) VALUES ('$title')");
        header( 'location:index.php');
    }}?>
    <form action="delivery_input.php" method="post">
        <input type="text" required placeholder="введите информацию про доставку"  style="height: 20vh; width: 70vw;" name="title">
    <input type="submit" value="Отправить">
    </form><?php
    $connect = mysqli_connect("localhost",'root', '', 'delivery');
    if(!mysqli_set_charset($connect, "utf8"))
    printf("Error: ".mysqli_error($connect));
        $query = "Select * From `delivery`";
        $result = mysqli_query($connect, $query);
        if(!$result)
            die(mysqli_error($connect));
        $articles = array();
        while ($articles = mysqli_fetch_assoc($result)):?>
            <div style="margin: 50px">
            <h5><?=$articles['delivery']?></h5>
            </div>
            <form action="delete_delivery.php?id=<?=$articles['id']?>" method="post">
                <button style="width: 100%">Удалить</button>
            </form>
        <?php endwhile;?>
<?php
include ('../blocks/footer_admin.php');