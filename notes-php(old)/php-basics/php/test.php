<?php 
	
	ini_set('session.gc_maxlifetime', 10);
	session_start();

	$username = "admin";
	$password = "123";

	if (isset($_SERVER["PHP_AUTH_USER"]) && isset($_SERVER["PHP_AUTH_PW"])) {

		if($_SERVER["PHP_AUTH_USER"] == $username && $_SERVER["PHP_AUTH_PW"] == $password) {
			$_SESSION["username"] = $_SERVER["PHP_AUTH_USER"];
			header("Location: main.php");
		} else {
			echo "Wrong!";
			header('WWW-Authenticate: Basic realm="Restricted Section"');
		}

	} else {
		header('WWW-Authenticate: Basic realm="Restricted Section"');
	// header('HTTP/1.0 401 Unauthorized');
	}
?>