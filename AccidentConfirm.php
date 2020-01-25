<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$id=$_POST['id'];
$status=$_POST['status'];


	$reg="update locationsnew set status='$status' where id='$id'";
	mysqli_query($con,$reg);
	header('location:Police.php');

?>