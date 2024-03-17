<!DOCTYPE html> 
<html> 
<head> 
<title> Table</title> 
</head> 
 //use clear language
<body bgcolor="skyblue"> 
<table border="1"> 
<tr><td>ID</td><td>FirstName</td><td>Lastname</td><td>RegNo</td><td colspan="4">Operation
</td></tr> 
<?php 
$conn=mysqli_connect("mysql","root","","schooldb")or 
die(mysqli_connect_error()); // connect to database 
//Query to select all in Table 
$sql="SELECT * FROM tbl_student"; 
$query=mysqli_query($conn,$sql); 
while($data=mysqli_fetch_assoc($query)){ 
?> 

<tr> <td><?php echo $data['id']?></td> 
<td><?php echo $data['firstname']?></td> 
<td><?php echo $data['lastname']?></td> 
<td><?php echo $data['regno']?></td> 

<td><a href="view.php?id=<?=$data['id']?>">READ</td> 
<td><a href="update.php?id=<?=$data['id']?>">UPDATE</td> 
<td><a href="delete.php?id=<?=$data['id']?>">DELETE</td> </tr> 
<?php 
 
} 
?> 
</table>  
<a href="index.php"><h2>Register Here</h2></a>  
</body>  
</html> 
