<?php
include ('../blocks/header-admin.php');
$conn = "";
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cont = ($_POST["title"]);
    $text = ($_POST["text"]);
    if (
    !empty($cont)&&
    !empty($text)
    ) {
        $stmt = $conn->query("INSERT INTO `contacts`(`contacts`, `text`) VALUES ('$cont', '$text')");
        header( 'location:index.php');
    }}?>
    <form action="contacts.php" method="post">
        <input type="text"placeholder="номера писать здесь"  style="height: 10vh; width: 20vw;" name="title">
        <input type="text" placeholder="Еще информация"style="height: 20vh; width: 70vw;" name="text">
        <input type="submit" value="Отправить">
    </form>
<?php
$connect = mysqli_connect("localhost",'root', '', 'contacts');
if(!mysqli_set_charset($connect, "utf8"))
    printf("Error: ".mysqli_error($connect));
$query = "Select * From `contacts`";
$result = mysqli_query($connect, $query);
if(!$result)
    die(mysqli_error($connect));
$articles = array();
while ($articles = mysqli_fetch_assoc($result)):?>
    <div style="margin: 50px">
        <h5><?=$articles['contacts']?></h5>
        <h5><?=$articles['text']?></h5>
    </div>
    <form action="delete_contacts.php?id=<?=$articles['id']?>" method="post">
        <button style="width: 100%">Удалить</button>
    </form>
<?php endwhile;?>
<?php include ('../blocks/footer_admin.php');
