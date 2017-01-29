<?php

	require 'connection.php';

	if(isset($_POST['changepwdbtn'])){
		$old=sha1($link->real_escape_string(trim($_POST['Opwd'])));
		$new=sha1($link->real_escape_string(trim($_POST['Npwd'])));
		$cnew=sha1($link->real_escape_string(trim($_POST['Cpwd'])));
		$user=$_SESSION['user'];
		$email=$_SESSION['email'];
		$sel="SELECT * from tbl_login where username='$user' AND password='$old'";
		$query=$link->query($sel);
		if($query->num_rows > 0){
			if($new==$cnew){
				$upd="update tbl_login set password='$new' where  username='$user' AND email='$email'";
				if($link->query($upd)){
					$_SESSION['msg']="Password Changed";
					header('location:changepassword.php');
				}
				else{
					$_SESSION['err']="Please Try Again Later";
					header('location:changepassword.php');
				}
			}else{
				$_SESSION['err']="Password Mismatched";
				header('location:changepassword.php');
			}
		}else{
			$_SESSION['err']="Old password doesnot match";
			header('location:changepassword.php');
		}
	}


?>