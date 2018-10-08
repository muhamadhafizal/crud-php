
<?php
include_once("connection/config.php");
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM file WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$first_name = $user_data['title'];
	$last_name = $user_data['file'];
	$parentid  = $user_data['user_id'];
}
?>
<html>
<head>	
	<title>Edit Child</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update" method="post" action="updatechild.php">
		<table border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="title" value=<?php echo $first_name;?>></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="file" value=<?php echo $last_name;?>></td>
			</tr>
			<tr>
				<input type="hidden" name="parentid" value=<?php echo $parentid;?>>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>