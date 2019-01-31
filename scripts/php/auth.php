<?php
    require_once "db_connection.php";

    $login = $_POST['login'];

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
		$user = $con->query("SELECT * FROM users WHERE login = '{$_POST['login']}'");
		if ($user->num_rows > 0) {
			$userData = $user->fetch_assoc();
			if ($_POST['password'] == $userData['password']) {
				session_start();
				$_SESSION['login'] = $userData['login'];
                header("location: ../../index.php");
			}
		} 
    }
