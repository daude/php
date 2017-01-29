<?php
require 'connection.php';
if(isset($_POST["editstd"])){

	$id=$_POST['editId'];
	$fullname=$_POST['fname'];
	$address=$_POST['add'];
	$email=$_POST['email'];
	$phone=$_POST['phn'];
	$age=$_POST['age'];
	$gender=$_POST['gen'];
	$doa=$_POST['doj'];

	$upd="UPDATE tbl_student set name='$fullname',address='$address', email='$email',age='$age',phone='$phone',gender='$gender',date_of_join='$doa' where id='$id'";
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
