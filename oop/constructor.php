<?php


	class NewClass{
		var $name;

		function __destruct(){
			echo "Destructor Executed";
			echo "<Br/>";
		}
		// constructor
		function __construct($x=null){
			echo "Constructor Executed";
			if(!empty($x)){
				$this->name=$x;
			}
			echo "<Br/>";
			echo "I'm, inside ".__CLASS__;
			echo "<Br/>";
		}

		function setTask($x){
			$this->name=$x;
		}

		function getTask(){
			echo $this->name." is completed";
			echo "<Br/>";
		}

	}

	$obj=new NewClass("homework");
	$obj->getTask();
	// $obj->setTask("OOP");
	

	$obj->setTask("Washing Cloth");
	$obj->getTask();


?>