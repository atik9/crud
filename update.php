<?php
include "config.php";
$id=$_GET['id']; 
$slec="SELECT * FROM users WHERE id='$id'";
$sle=mysqli_query($connection,$slec);

?>
<?php
 foreach ($sle as $value) {
 	
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title>add</title>
</head>
<body>
	<form action="" method="POST">
		<table align="center" border="1">
			<tr>
				<td>name:<input type="text" name="name" value="<?php echo $value['name'] ;?>"></td>
				
			</tr>
			<tr>
				<td>emeil:<input type="text" name="email" value="<?php echo $value['email'] ;?>"></td>
				
			</tr>
			<tr>                                           
				<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
				<td>Add user in database:<input type="submit" name="submit"></td>
				
			</tr>
		</table>
	</form>

</body>
</html>
<?php if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  // die($id);
 	$sq="UPDATE users SET name='$name',email='$email' WHERE id ='$id'";
	$update =mysqli_query($connection,$sq);


	 header("Location:index.php");

}