<?php

	$name=array('Ramesh','Suresh','Ajay','Bijay');

	# echo $name;

	//implode  = Array to String

	echo implode('_', $name);

	echo "<br/>";


	$frontend= "Html5,Css3,Javascript,Jquery,Ajax,React,Gulp,Webpack";
	echo $frontend;

	// explode = string to array convert

	$ind=explode(",", $frontend);
	echo "<br/>";
	echo $ind[4];


?>