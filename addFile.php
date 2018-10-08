	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$title = $_POST['title'];
		$file = $_POST['file'];
		$user_id = $_POST['user_id'];
		
		// include database connection file
		include_once("connection/config.php");
				
		// Insert user data into table
		$sql = mysqli_query($mysqli, "INSERT INTO file(title,file,user_id) VALUES('$title','$file','$user_id')");
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	
	}
	?>

