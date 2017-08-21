<?php 
	// klases
	require_once("user.php");


	// kvieciamas objectas per klase; cia kvieciamas static metodas
	echo User::get_class_info(); 
	echo "<br>";
	echo User::$class_info;
	echo "<br>";


	// cia yra public
	// $user1 = new User; // is User sablono yra sukuriamas ob
	// $user1->name = "Jonas";
	// $user1->surname = "Jonaitis";
	// $user1->age = 21;

	// $user2 = new User; 
	// $user2->name = "Petras";
	// $user2->surname = "Petraitis";
	// $user2->age = 62;

	$user1 = new User("Petras", "Petraitis", 25, "150 cm");
	$user2 = new User("Jonas", "Jonaitis", 42, "1.92 cm");
	$user3 = new User("Jolanta", "Pavardene", 50, "1.70 cm");

	echo $user1->get_user_info();
	echo "<br>";
	echo $user2->get_user_info();
	echo "<br>";
	echo $user3->get_user_info();
	echo "<br>";
	echo $user3->get_shoes_size(15);

	echo "<br>";
	echo "<br>";

	echo $user1->get_user_surname();
	echo "<br>";
	echo $user2->get_user_surname();
	echo "<br>";
	echo $user3->get_user_age();
	echo "<br>";
	echo $user2->get_user_height();
	echo "<br>";

?>