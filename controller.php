<?php
$name = $_POST('name');
$mail = $_POST('email');
$number = $_POST('number');

mail("maksattologonovn@gmail.com", "Сообщение от клиента CHICOMODA", "$name \n $mail \n $number");
header('Location:/index.php');
exit();
?>  