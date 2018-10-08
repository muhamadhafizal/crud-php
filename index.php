<?php
// Create database connection using config file
include_once("connection/config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>

 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New User</a> <a href="allfile.php">All Relation</a><br/><br/>

 
    <table width='80%' border=1>
 
    <tr>
        <th>firstname</th> <th>lastname</th> <th>Email</th> <th>Update</th> <th>Child</th>
    </tr>
    
    //view all data
    <?php  

    while($user_data = mysqli_fetch_array($result)) {     

       
        echo "<tr>";
        echo "<td>".$user_data['first_name']."</td>";
        echo "<td>".$user_data['last_name']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>";
        echo "<td><a href='file.php?id=$user_data[id]'>Add Child</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>