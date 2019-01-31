<?php
    require_once "db_connection.php";

	$login    = $_POST['login'];
	$password = $_POST['password'];

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
		$user = $con->query("SELECT * FROM users WHERE login = '$login'");
		if ($user->num_rows > 0) {
			$userData = $user->fetch_assoc();
			if (password_verify($password, $userData['password'])) {
				session_start();
				$_SESSION['login'] = $userData['login'];
				header("location: ../../index.php");
			}
		} 
    }
