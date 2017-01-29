<?php

	require 'connection.php';

	if(isset($_POST['loginbtn'])){

		$username=$link->real_escape_string(trim($_POST['uname']));
		$password=$link->real_escape_string(trim($_POST['pass']));

		$password=sha1($password);

		$sel="SELECT username,email from tbl_login where (username=? OR email=?) AND password=?";
		$stmt=$link->prepare($sel);
		$stmt->bind_param('sss',$username,$username,$password);
		$stmt->bind_result($user,$email);
		$stmt->execute();

		$stmt->store_result();

		if($stmt->num_rows > 0){
			while($stmt->fetch()){
				$_SESSION['user']=$user;
				$_SESSION['email']=$email;
				$_SESSION['status']=1;

				header('location:dashboard.php');

			}

		}else{
			$_SESSION['err']="Invalid Username or password";
			header('location:index.php');
		}


	}else{
		$_SESSION['err']="Invalid attempt to login";
		header('location:index.php');
	}

$stmt->close();
$link->close();


?>