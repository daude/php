<?php
	include 'vehicle.php';

	class Bus extends Vehicle{
		public $doors;
		public $window;

		public function __construct($n,$b,$c,$w,$d){
			$this->name=$n;
			$this->brand=$b;
			$this->color=$c;
			$this->wheels=$w;
			$this->doors=$d;
		}

		// public function setName($x){
		// 	$this->name=$x;
		// }
		public function getName(){
			echo "Vehicle Name = ".$this->name;
		}
		public function getColor(){
			echo $this->color;
		}

		// public function setDoors($x){
		// 	$this->doors=$x;
		// }

		// public function setWindow($x){
		// 	$this->window=$x;
		// }

		// public function getDoors(){
		// 	echo "No. of Doors = ".$this->doors;
		// }

		public function getWindow(){
			echo "No. of window = ".$this->window;
		}

		public function setKm($x){
			$this->km=$x;
		}
		public function getKm(){
			echo $this->km;
		}
	}


	$obj=new Bus("Bus","Tata","red","6","1");
	echo $obj->getColor();
	$obj->setKm(1200);
   $obj->getKm();
?>	