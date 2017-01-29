<html>
<head>
	<title></title>
</head>
<body>
	<?php

		session_start();

		if(isset($_SESSION['err'])){
			echo $_SESSION['err'];
			unset($_SESSION['err']);
		}
	?>
	<form method="post" action='act_login.php'> 
	 	<div>
	 		Username<br/>
	 		<input type="text" name="uname"><br/>
	 	</div>
	 	<div>
 			Password<br/>
	 		<input type="password" name="pass"><br/>
	 	</div>
	 		<input type="submit" name="loginbtn" value="login">
	</form>
</body>
</html>