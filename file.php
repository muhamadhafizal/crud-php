<?php
// include database connection file
include_once("connection/config.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id

$sql  = mysqli_query($mysqli, "SELECT * FROM file WHERE user_id=$id");



?>

<?php
	


?>

<html>
<head>    
    <title>Attach File</title>
</head>
<body>

<form action="addFile.php" method="POST" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>FirstName</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr> 
				<td>LastName</td>
				<td><input type="text" name="file"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="user_id" value=" <?php echo $id; ?> "</td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
		<a href="index.php">Home</a>
</form>
	


<table width='80%' border=1>
	<tr>
		<th>FirstName</th>
		<th>LastName</th>
		<th>Update</th>
	</tr>

    <?php  

    while($user_data = mysqli_fetch_array($sql)) {     

        echo "<tr>";
        echo "<td>".$user_data['title']."</td>";
        echo "<td>".$user_data['file']."</td>";
        echo "<td><a href='editchild.php?id=$user_data[id]'>Edit</a> |<a href='deletechild.php?id=$user_data[id]'>Delete</a></td></tr>";      
    }
    ?>
</table>
</body>
</html>

