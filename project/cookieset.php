<?php

	// setcookie("user",'john_admin');
	// setcookie('timelimit','This text has time limit',time()+15);
	
	// echo 'Cookie Set';


?>

<form action="cookieget.php" method="post">
<p>
	<input type="text" name="uid" 
    value="<?php  echo isset($_COOKIE['user'])?$_COOKIE['user']:'';?>">
</p>
<p>
	<input type="checkbox" name="rem" value="1"> Remember me.
</p>
<p>
	<input type="submit" name='submit'>
</p>
</form>