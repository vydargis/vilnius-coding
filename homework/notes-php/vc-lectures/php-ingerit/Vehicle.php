<?php 

	class Vehicle implements iVehicle {
		private $seats, $color;
	

		function __construct($seats, $color) {
			$this->seats = $seats;
			$this->color = $color;
		}

		protected function get_seats() {
			return $this->seats;
		}

		protected function get_color() {
			return $this->color;
		}

	}

?>