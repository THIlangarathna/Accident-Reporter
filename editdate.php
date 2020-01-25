<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$id=$_POST['id'];
$date=$_POST['editdate'];

echo $id;
echo $date;

	$reg="update locationsnew set date='$date' where id='$id'";
	mysqli_query($con,$reg);
	header('location:editaccident.php');

?>