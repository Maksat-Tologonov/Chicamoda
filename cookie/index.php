
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- <?php
		/*if(isset($_COOKIE)){
			if(isset($_POST)){
				$cookie_value = $_COOKIE['$_POST["name"]'];
			}

			echo $cookie_value;
		 	print_r($_COOKIE);
		 }else{*/
			?> -->
			<form action="http://localhost/cookie/controller.php" method="post">
				<ul>
				<li>Adiniz<input type="text" name="name"></li>
				<li>Soyadiniz<input type="text" name="surname"></li>
				<li>E-posta<input type="email" name="email"></li>
				<li>Sifre<input type="password" name="password"></li>
				<input type="submit" >
			</ul>
			</form>
</body>
</html>