<?php

	require 'connection.php';
	require 'checkstatus.php';

	if(isset($_POST['naddbtn'])){

		$title=$_POST['ntitle'];
		$description=$_POST['ndesc'];
		$author=$_POST['nauthor'];
		$date=$_POST['ndate'];
		$status=$_POST['nstatus'];
		$image=$_FILES['nimage']['name'];
		$imagename="";
		if(!empty($image)){

			$image_tmp=$_FILES['nimage']['tmp_name'];

			$ext=strtolower(pathinfo($image,PATHINFO_EXTENSION));
			$exts=array('jpg','png','gif');

			if(!in_array($ext, $exts)){
				$_SESSION['err']='INVALID file extension';
				header('location:addnews.php');
				exit();
			}

			/*new name*/

			$imagename=sha1(time()).".".$ext;

			move_uploaded_file($image_tmp, '../img/'.$imagename);
		}

		$ins="Insert into tbl_news(title,description,author,date,status,image) values('$title','$description','$author','$date','$status','$imagename')";

		if($link->query($ins)){
			$_SESSION['msg']="News Added Successfully";
			header('location:addnews.php');
		}else{
			$_SESSION['err']="Failed to add news";
			header('location:addnews.php');
		}

	}


?>