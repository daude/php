<?php
  	
  	require 'connection.php';

  	if(isset($_POST['submit'])){
  		$name=$_POST['name'];
  		$address=$_POST['address'];
  		$email=$_POST['email'];
  		$phone=$_POST['phone'];

  		$ins="INSERT into tbl_student(name,address,email,
        phone) values
  		  		('$name','$address','$email',
              '$phone')	";

  		// mysqli_query($link,$ins);

  		if($link->query($ins)){
        $_SESSION['msg']="Record Inserted";
  			header('location:display.php');
  		}else{
         $_SESSION['msg']="Failed to add Record";
  			header('location:display.php');
  		}
  	}


?>