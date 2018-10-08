<?php
// include database connection file
include_once("connection/config.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM file WHERE id=$id");
 
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>