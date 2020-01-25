<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$id=$_POST['id'];

echo $id;


	$reg="delete from upload where id='$id'";
	mysqli_query($con,$reg);
	header('location:editaccident.php');

?>