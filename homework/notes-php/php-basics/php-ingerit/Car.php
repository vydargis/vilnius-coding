<?php 

	

	class Car extends Vehicle {
		private $wheels;

		function __construct($seats, $color, $wheels, $type) {
			parent::__construct($seats, $color);
			$this->wheels = $wheels;
			$this->type = $type;
		} 

		function get_wheels() {
			return $this->wheels;
		}

		function get_color() {
			return parent::get_color(); // is Vehicle pasiimu color savybe
		}

		function get_seats() {
			return parent::get_seats(); // is Vehicle pasiimu color savybe
		}

		function get_type() {
			return $this->type;
		}

		function get_car_info() {
			return $this->get_seats()." ".$this->get_color()." ".$this->wheels." ".$this->get_type()	;
		}

	}

?>