<?php
	
	class MyClass{

		// member variable and functions
		var $student="Ramesh";
		var $class=5;

		function setName($x){
			$this->student=$x;
		}

		function getName(){
			echo $this->student;
		}

	}

	$rec=new MyClass;
	
	// var_dump($rec);

    $rec->setName("Prakash");
	$rec->getName();


?>