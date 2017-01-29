<form  method="post" action="form2.php">
	<p>
		username<br/>
		<input type="text" name="uname">
	</p>
	<p>
		password<br/>
		<input type="password" name="pass">
	</p>
	<p>
		<input type="submit" name="lbtn" value="Login">	
	</p>
</form>

<p>
	<?php
		if(isset($_GET['err'])){
			echo $_GET['err'];
		}

	?>
</p>
