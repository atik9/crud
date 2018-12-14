<?php include "config.php" ?>
<?php
// $id=$_GET['id'];
$sq="SELECT * FROM users";
$sel= mysqli_query($connection,$sq);

?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
	<table border="1" align="center">
		<tr>
			<td>id</td>
			<td>name</td>
			<td>email</td>
			<td>action</td>
		</tr>

	<?php foreach ($sel as  $value) {?>
		
	
		<tr>
			<td><?php echo $value['id'];?></td>
			<td><?php echo $value['name'];?></td>
			<td><?php echo $value['email'];?></td>
			<td>
				<a href="add.php">Add</a
				<a href="update.php?id=<?php echo $value['id']; ?>">Update</a>
				<a href="delete.php?id=<?php echo $value['id']?>">Delete</a>
			</td>
		</tr>

	<?php }?>
	</table>

</body>
</html>
