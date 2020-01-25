<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$id=$_POST['id'];
$district=$_POST['editdistrict'];

echo $id;
echo $district;

	$reg="update locationsnew set district='$district' where id='$id'";
	mysqli_query($con,$reg);
	header('location:editaccident.php');

?>