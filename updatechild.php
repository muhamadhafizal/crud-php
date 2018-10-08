<?php
// include database connection file
include_once("connection/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$first_name=$_POST['title'];
	$last_name=$_POST['file'];
	$parentid=$_POST['parentid'];
	echo $parentid;

	// update user data
	$result = mysqli_query($mysqli, "UPDATE file SET title='$first_name', file='$last_name'WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: file.php?id=$parentid");
	}
?>