<?php
	
	if(isset($_SESSION['status'])){
		if($_SESSION['status'] == 1){

		}
		else{
			$_SESSION['err']="Invalid Attempt To Login";
			header('location:index.php');
		}
	}
	else{
			$_SESSION['err']="Invalid Attempt To Login";
			header('location:index.php');
		}

?>