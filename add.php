
<?php include "config.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>add</title>
</head>
<body>
	<form action="" method="POST">
		<table align="center" border="1">
			<tr>
				<td>name:<input type="text" name="name"></td>
				
			</tr>
			<tr>
				<td>emeil:<input type="text" name="email"></td>
				
			</tr>
			<tr>
				<td>Add user in database:<input type="submit" name="submit" value="Add"></td>
				
			</tr>
		</table>
	</form>

</body>
</html>
<?php
if(isset($_POST['submit'])){

	$name= $_POST['name'];
	$email= $_POST['email'];
	// var_dump($name);
	$sq="INSERT INTO users (name,email) VALUES ('$name','$email')";
	$add =mysqli_query($connection,$sq);


	header("Location:index.php");


}
?>