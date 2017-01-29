<?php

	require 'connection.php';
	require 'checkstatus.php';

	if(isset($_GET['did'])){
		$id=$_GET['did'];
		$sel="SELECT image from tbl_news where id='$id'";

		$query=$link->query($sel);
		$row=$query->fetch_array();

		if(unlink('../img/'.$row['image'])){
			$del="DELETE FROM tbl_news where id='$id'";
			if($link->query($del))
			{
				$_SESSION['msg']="SUCCESSFULLY DELETED";
				header('location:news.php');
			}else{
				$_SESSION['err']="Failed to delete";
				header('location:news.php');
			}
		}
		

	}


?>