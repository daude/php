<?php

	require 'connection.php';
	require 'checkstatus.php';

	if(isset($_POST['nupdbtn'])){
		$id=$_POST['hid'];
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
				header('location:news.php');
				exit();
			}

			/*new name*/

			$imagename=sha1(time()).".".$ext;

			move_uploaded_file($image_tmp, '../img/'.$imagename);

			$upd="UPDATE tbl_news set title='$title', description='$description',author='$author',status='$status',`date`='$date', image='$imagename' where id='$id'";
		}else{

		$upd="UPDATE tbl_news set title='$title', description='$description',author='$author',status='$status',`date`='$date' where id='$id'";

		}

		if($link->query($upd)){
			$_SESSION['msg']="News Updated Successfully";
			header('location:news.php');
		}else{
			$_SESSION['err']="Failed to update news";
			header('location:news.php');
		}

	}


?>