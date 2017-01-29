<?php
	if(isset($_POST['lbtn'])){
	// print_r($_GET);

	$user=$_POST['uname'];
	$pass=$_POST['pass'];

	echo "Hello ".$user."!";
	}else{
		header("location:form1.php?err=Please Login To Continue");
	} 

?>