<?php 
session_start();
if (isset($_SESSION["username"])) {
	header("location: registrasi.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="prosesLogin.php" method="POST">
		<input type="text" name="username" placeholder="Username"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="submit" name="login" value="Login">
	</form>
</body>
</html>
