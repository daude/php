<?php
	require 'connection.php';
	$id=$_GET['did'];
	$del="DELETE FROM tbl_student where id='$id'";
	if($link->query($del)){
		$_SESSION['msg']="Record Deleted";
		header("location:display.php");
	}else{
		$_SESSION['msg']="Failed to Delete Record";
		header('location:display.php');
	}

?>