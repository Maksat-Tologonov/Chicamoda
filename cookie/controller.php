<?php

	if(isset($_COOKIE)){
	$content ='<form action="http://localhostcooki/index.php" method="POST"><ul><li>E-posta<input type="email" name="email"></li><li>Sifre<input type="password" name="password"></li><input type="submit" ></ul></form>';
	echo $content;
	}
	else{
		$cookie_name = $_POST['email'];
		$cookie_value = $_POST['password'];	
		setcookie($cookie_name, $cookie_value, time() + (7200));}

		// if (!isset($_COOKIE[$cookie_name])) {
		// 	echo "cookie_named $cookie_name";
		// 	echo "cookie_value $cookie_value";
		// }
	
?>

