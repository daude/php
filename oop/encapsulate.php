<?php
	
	class Encapsulate{

		// static $vehicle="Honda";

		private $student;

		private function setName($x){
			$this->student=$x;
		}

		public function studentname($name){
			$this->setName($name);
		}

		public function getName(){
			echo $this->student;
		}

	}

	$obj=new Encapsulate();
	$obj->studentname("Ajay");
	$obj->getName();
	// static
	// echo Encapsulate::$vehicle;
?>