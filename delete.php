<?php
include "config.php";

$id =$_GET['id'];
// die($id);
$de = "DELETE FROM users WHERE id='$id'";
$delele = mysqli_query($connection,$de);
header("Location:index.php");

?>