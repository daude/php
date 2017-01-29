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
<form method="post" action="_act-edit.php">
		<div>
			<input type="hidden" name="editId" value="<?php echo $row['id'];?>">
		</div>
		<div>
			Fullname<Br/>
			<input type='text' name="fname" value="<?php echo $row['name']; ?>">
		</div>
		<div>
			Email<Br/>
			<input type='text' name="email" value="<?php echo $row['email']; ?>">
		</div>
		<div>
			Address<Br/>
			<input type='text' name="add" value="<?php echo $row['address']; ?>">
		</div>
		<div>
			Phone<Br/>
			<input type='text' name="phn" value="<?php echo $row['phone']; ?>">
		</div>
		<div>
			Gender<Br/>
			<input type='radio' name="gen" value="m" <?php echo ($row['gender']=="m")?"checked":"" ?>> Male
			<input type='radio' name="gen" value="f" <?php echo ($row['gender']=="f")?"checked":"" ?>> Female
		</div>
		<div>
			Age<Br/>
			<input type='text' name="age" value="<?php echo $row['age']; ?>">
		</div>
		<div>
			Date of Admission<Br/>
			<input type='date' name="doj" value="<?php echo $row['date_of_join']; ?>">
		</div>
		<div>
			<input type="submit" name="editstd" value='Update Student'>
		</div>

</form>