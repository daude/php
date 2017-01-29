<?php
	
	function checkUser($u,$p){
		if($u=="admin" && $p=="admin123"){
			return true;
		}else{
			return false;
		}
	}

	$result=checkUser("ram","ram123");
	if($result == 1){
		echo "Welcome Admin !";
	}else{
		echo "Invalid Username or Password";
	}



	echo  "<br/>";

	//  Predefined Functions

	# Math Function

	$x=34.56;
	$y=40.01;
	$z=35.12;


	// round / ceil / floor 
	echo floor($z);

	echo "<br/>";


	# string function

	#strlen(string) //calculates the length of a string.
	#ucfirst($string) // uppercase first letter of a string.
	#lcfirst($string) // lowercase first letter of a string.
	#strtoupper($string) // uppercase string;
	#strtolower($string) // lowercase string
	#strpos(haystack, needle) // gets the first occurance position of a string
	#substr() // returns the part of a string.
	$string = "Hello WORld ";
	echo strlen($string);
	echo "<Br/>";
	echo ucfirst($string);
	echo "<Br/>";
	echo lcfirst($string);
	echo "<Br/>";
	echo strtoupper($string);
	echo "<Br/>";
	echo strtolower($string);
	echo "<Br/>";

	$text= "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


	echo strpos($text,"sit");
	echo '<br/>';
	// echo $text;

	echo substr($text, 0,100).'...';
	echo "<br/>";
	echo "<br/>";

	$start=strrpos($text, "aliqua"); 
	$end=strrpos($text, "Excepteur") - $start + strlen("Excepteur");

	echo substr($text,$start,$end);

	echo "<br/>";
	#strcmp(x,y);

	$string1="username";
	$string2="username";
	echo strcmp($string1, $string2);

	echo htmlspecialchars_decode("&copy;");

	echo "<br/>";
	// md5(); sha1();
	$password="a";
	echo md5($password);
	echo "<br/>";
	echo sha1($password);


?>

