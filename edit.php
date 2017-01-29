<?php
	require 'connection.php';
	if(isset($_GET['eid'])){

		$id=$_GET['eid'];
		$sel="SELECT * FROM tbl_student where id='$id'";
		if($query=$link->query($sel)){
			$row=$query->fetch_array();
		}
	}
?>
<form method="post" action="act_edit.php">
		<div>
			<input type="hidden" name="editId" value="<?php echo $row['id'];?>">
		</div>
		<div>
			name<Br/>
			<input type='text' name="name" value="<?php echo $row['name']; ?>">
		</div>
		<div>
			email<Br/>
			<input type='text' name="email" value="<?php echo $row['email']; ?>">
		</div>
		<div>
			Address<Br/>
			<input type='text' name="address" value="<?php echo $row['address']; ?>">
		</div>
		<div>
			Phone<Br/>
			<input type='text' name="phone" value="<?php echo $row['phone']; ?>">
		</div>
		
		<div>
			<input type="submit" name="submit" value='Update Student'>
		</div>

</form>