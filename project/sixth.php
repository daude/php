<?php

	// echo time();
	echo date_default_timezone_set('America/New_York');
	echo "<br/>";
	echo date('dS D j l w z W F m M L Y   --- h:i:s A');

	echo date_default_timezone_get();

	$date='2016/05/14';
	$d=date_create($date);
	echo "<br/>";

	echo date_format($d,'D, d M Y');

	$add=date_add($d,date_interval_create_from_date_string('15 days'));

	echo date_format($add,'D, d M Y');
	?>