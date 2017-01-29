<?php


	// echo $_COOKIE['user']."<br/>";
	// echo $_COOKIE['timelimit'];

if(isset($_POST['submit'])){

	$user=$_POST['uid'];
	$check=$_POST['rem'];

	if($check==1){
		setcookie("user",$user);
	}else{
		setcookie("user","");
	}

}

?>
