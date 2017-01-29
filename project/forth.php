<style type="text/css">
	ul{
		list-style: none;
		background-color: #000;
		padding: 0;

	}
	ul li{
		float: left;
		position: relative;
	}
	ul li a{
		display: block;
		padding: 10px 15px;
		color:#fff;
		font:14px Arial;
		text-transform: uppercase;
		text-decoration: none;
	}
	ul::after{
		display:table;
		clear:both;
		width: 100%;
		content: "";
	}

	ul ul{
		background: #f00;
		position: absolute;
		min-width: 150px;
		display: none
	}
	ul ul li{
		float: none;
	}

	ul ul li a{
		text-transform: initial;
		border-bottom:1px solid #900;
	}
	ul li:hover{
		background-color: #900;
	}

	ul li:hover ul{
		display: block;
	}

</style>

<?php
	
	$student=array('Ramesh','Suresh','Hari','Rita','Sita','Anil','Manisha');
	$address=['Jamal','Ason','Tripureshwor','Teku'];
	echo $student[4];
	echo '<br/>';
	echo $address[3];
	echo '<br/>';
	echo count($student);
	echo '<br/>';
	// loop.
	// sort.
	sort($student); // ascending Order
	rsort($address); // descending order
	/*
	for($i=0;$i<count($student);$i++){
		echo $student[$i]."<br/>";
	}

	*/
	// syntax.
	foreach ($student as $individual) {
		echo $individual."<br/>";
		if($individual == "Sita"){
			break;
		}
	}

	// Associative array

	$person=
	array("Ramesh"=>"Jamal",
		  "Suresh"=>"Teku" ,
		  "Sita"=>"Ason",
		  "Prakash"=>"Tripureshwor",
		  "Anil"=>"Ason",
		  "Manisha"=>"Jamal",
		  "Nita"=>'Teku');

	echo "Sita is at ".$person["Sita"];
	echo '<br/>';

	foreach ($person as $key => $value) {
		echo $key. " lives in ".$value."<br/>";
	}

	//  printing array keys.

	foreach (array_keys($person) as $name) {
		echo $name."<br/>";
	}

	// printing array values.

	foreach (array_values($person) as $address) {
		echo $address."<br/>";
	}

	/*

	$name="Bijay";
	$personName=array_keys($person);

	if(in_array($name, $personName)){
		echo "$name is found";
	}else{
		echo "$name is not found in our database";
	}


	*/

	# multidimensionl array

	$vehicles=array(
		"car"=>array("Bmw","Hyundai","Honda","Suzuki"),
		"bike"=>array("Bajaj","Honda","TVS","Suzuki"),
		"train"=>array("Metro","Bullet","Steam"),
		"aeroplane"=>array("Jet","Tween")
	);
	echo $vehicles["bike"][1];
	echo "<br/>";


	
	echo "<ul>";
	foreach ($vehicles as $name => $brands) {
		echo "<li><a href='#'>".$name."</a>";
		echo "<ul>";
		foreach($brands as $brandName){
			echo "<li> <a href='#'>".$brandName."</a></li>";
		}
		echo "</ul>";
		echo '</li>';
	}

	echo "</ul>";

?>