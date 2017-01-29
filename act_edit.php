<?php
require 'connection.php';
if(isset($_POST["submit"])){

	$id=$_POST['editId'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];


	$upd="UPDATE tbl_student set name='$name',address='$address', email='$email',phone='$phone' where id='$id'";
	if($link->query($upd)){
		$_SESSION['msg']="Record successfully updated";
		header('location:display.php');
	}else{
		$_SESSION['msg']="Record Failed to update";
		header('location:display.php');
	}

	$link->close();
}

?>