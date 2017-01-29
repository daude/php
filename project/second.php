<?php
	$x=105;

	// echo ($x%2==0)?"Even Number":"Odd Number";

	if($x%2==0){
		echo "Even Number";
	}else{
		echo "Odd Number";
	}

	echo "<br/>";
	//leap year

	$y=2012;

	if($y%4==0 && $y%100!=0){
		echo $y." is a leap year";
	}

	//loop


	//do-while loop

	$z=2;

	do{
		echo $z;
		$z++;
	}while($z <=20);
	
	echo "<Br/>";

	// while loop
	$z=5;
	while($z<=20){
		echo $z;
		$z++;
	}
	echo "<Br/>";
	//for loop

	for($z=5;$z<=20;$z++){
		echo $z;
	}
	echo "<Br/>";
	//mutiplication table

	$x=13;

	// 13 x 1 = 13

	for($i=1;$i<=10;$i++){

		echo $x." x ".$i." = ".$x*$i."<br/>";
	}
	echo "<Br/>";
	//nested loop

	for($i=1;$i<=5;$i++){
		for($j=1;$j<=5;$j++){
			echo ' * ';
		}

		echo "<br/>";
	}

	// 

?>