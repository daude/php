<?php
  	
  	require 'connection.php';

  	if(isset($_POST['addstd'])){
  		$fullname=$_POST['fname'];
  		$address=$_POST['add'];
  		$email=$_POST['email'];
  		$phone=$_POST['phn'];
  		$age=$_POST['age'];
  		$gender=$_POST['gen'];
  		$doa=$_POST['doj'];

  		$ins="INSERT into tbl_student(name,address,email,
        phone,age,gender,date_of_join) values
  		  		('$fullname','$address','$email',
              '$phone','$age','$gender','$doa')	";

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