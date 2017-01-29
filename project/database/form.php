<html>
<head>
	<title>Insert</title>
</head>
<body>
	<form method="post" action="_act-insert.php">
		<div>
			Fullname<Br/>
			<input type='text' name="fname">
		</div>
		<div>
			Email<Br/>
			<input type='text' name="email">
		</div>
		<div>
			Address<Br/>
			<input type='text' name="add">
		</div>
		<div>
			Phone<Br/>
			<input type='text' name="phn">
		</div>
		<div>
			Gender<Br/>
			<input type='radio' name="gen" value="m"> Male
			<input type='radio' name="gen" value="f"> Female
		</div>
		<div>
			Age<Br/>
			<input type='text' name="age">
		</div>
		<div>
			Date of Admission<Br/>
			<input type='date' name="doj">
		</div>
		<div>
			<input type="submit" name="addstd" value='Add Student'>
		</div>

	</form>
</body>
</html>