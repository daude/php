<?php
	
	class Vehicle{

		public $name;
		public $wheels;
		public $brand;
		public  $color;
		protected $km;


		public function setWheels($x=4){
			$this->wheels=$x;
		}

		public function setColor($x="white"){
			$this->color=$x;
		}



	}

?>