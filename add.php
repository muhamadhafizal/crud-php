<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home Testing</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>first name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Last name</td>
				<td><input type="text" name="last_name"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$first_name = $_POST['name'];
		$email = $_POST['email'];
		$last_name = $_POST['last_name'];
		
		// include database connection file
		include_once("connection/config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(first_name,email,last_name) VALUES('$first_name','$email','$last_name')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>