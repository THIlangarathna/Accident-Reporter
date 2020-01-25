<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$id=$_POST['id'];
$address=$_POST['editaddress'];

echo $id;
echo $address;

	$reg="update locationsnew set address='$address' where id='$id'";
	mysqli_query($con,$reg);
	header('location:editaccident.php');

?>