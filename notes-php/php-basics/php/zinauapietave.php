<?php 
	if (isset($_COOKIE["lankytojas"])) {
		echo $_COOKIE["lankytojas"];
		setcookie("lankytojas", "aaa", time() -155000, "/"); // sunaikina cookie
	} else {
		echo "Cookie is expired.";
	}
?>

