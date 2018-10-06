<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM file ORDER BY id DESC");
$result1 = mysqli_query($mysqli, "SELECT * FROM file JOIN users ON file.user_id=users.id");

?>

 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="index.php">Back</a> 
<br><br>

 
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th><th>Title</th> <th>File</th> <th>Email</th>
    </tr>
    
    <?php  

    while($file = mysqli_fetch_array($result1)) {     

       
        echo "<tr>";
        echo "<td>".$file['first_name']."</td>"; 
        echo "<td>".$file['title']."</td>";
        echo "<td>".$file['file']."</td>";
        echo "<td>".$file['email']."</td>";
           
      
    }
    ?>
    </table>
</body>
</html>