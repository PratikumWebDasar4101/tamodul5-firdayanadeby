<?php
if(isset($_POST['login'])){
	session_start();
	$data = array(
				array(
					"id"=>"1",
					"username"=>"admin",
					"password"=>"admin",
				)
			);
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$i = 0;
		$data_valid = 0;
		while($i < count($data)){
			if($username == $data[$i]['username'] && $password == $data[$i]['password'] ){
				$_SESSION['username'] = $username;
				$_SESSION['akses'] = $data[$i]['akses'];
				$_SESSION['id'] = $data[$i]['id'];
				$data_valid = 1;
			}
			$i++;
		}
		if ($data_valid < 1) {
			echo "Login Gagal";
		} else {
			header('location: registrasi.php');
		}
	}
}
?>
