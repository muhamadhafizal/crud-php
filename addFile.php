	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$title = $_POST['title'];
		$file = $_POST['file'];
		$user_id = $_POST['user_id'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$sql = mysqli_query($mysqli, "INSERT INTO file(title,file,user_id) VALUES('$title','$file','$user_id')");
		echo "User added successfully. <a href='file.php?id=$user_id'>Back</a>";
	
	}
	?>

