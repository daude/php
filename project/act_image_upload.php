<?php

	if(isset($_POST['updbtn'])){
		echo '<pre>';
		print_r($_FILES);
		echo '</pre>';

		$img=$_FILES['userImg']['name'];
		$img_tmp=$_FILES['userImg']['tmp_name'];
	
		$ext=pathinfo($img,PATHINFO_EXTENSION);
		$newName=sha1(time()).".".$ext;
		
		
		// upload function

		move_uploaded_file($img_tmp, 'image/'.$newName);
	}


?>