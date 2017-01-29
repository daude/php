<?php
	require 'connection.php';
?>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
			echo "<br/>";
		}

	?>
	<a href="project.php">Add Student</a>
	<table  width=100%>
	<tr>
		<th align="left">S.N</th>
		<th align="left">Name</th>
		<th align="left">Email</th>
		<th align="left">Address</th>
		<th align="left">Phone</th>
	</tr>
	<?php
		$sel="SELECT * FROM tbl_student order by id desc";
		// (mysqli_query($link,$sel)

		if($query=$link->query($sel)){
			$count=$query->num_rows;
			
			if($count > 0){
				$i=1;
				while($rows=$query->fetch_array()){
	?>
	
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $rows['name'];?></td>
		<td><?php echo $rows['email'];?></td>
		<td><?php echo $rows['address'];?></td>
		<td><?php echo $rows['phone'];?></td>
		<td>
		<a href="edit.php?eid=<?php echo $rows['id']; ?>">Edit </a>/ 
	<a href="delete.php?did=<?php echo $rows['id']; ?>" 
		onclick="return confirm('Do you want to delete this record');">Delete</a></td>
	</tr>

	<?php	
	}

			}else{
				echo "NO RECORDS FOUND";
			}
		}else{
			echo "Error";
		}
	?>
	
	</table>

</body>
</html>
