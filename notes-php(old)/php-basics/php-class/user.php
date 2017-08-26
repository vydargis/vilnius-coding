<?php 
	
	class User {

		// konstanta laikomas kaip statinis kintamasis; i statinius kintamuosius yra kreipiamasisi su self:: 
		const KEOF = 1.5;

		private $name, $surname, $age, $feet_size; // klases savybes

		static $class_info = "Test"; // object property/objecto savybe
 
		function __construct($name="", $surname="", $age="", $height="") { //kosntruktorius; gali tureti argumentus
			$this->name = $name; 
			$this->surname = $surname;
			$this->age = $age;
			$this->height = $height;
		}

		function get_user_info() {
			return $this->name." ".$this->surname." ".$this->age." ".$this->height; // su $this kreipiames i klases savybes
		}

		function get_shoes_size($feet_size) {
			return $feet_size * self::KEOF;
		}

		function get_user_name() {
			return $this->name;
		}

		function get_user_surname() {
			return $this->surname;
		}

		function get_user_age() {
			return $this->age;
		}

		function get_user_height() {
			return $this->height;
		}

		// statinis metodas; statinis metodas negali prieiti prie nestatiniu savybiu
		static function get_class_info() { //statine savybe
			return "This is user class.<br>";
		}

		function __destruct() {
			// echo "deleted<br>";
		}

	}

?>