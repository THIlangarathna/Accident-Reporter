<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$id=$_POST['id'];
$description=$_POST['editdescription'];

echo $id;
echo $description;

	$reg="update locationsnew set description='$description' where id='$id'";
	mysqli_query($con,$reg);
	header('location:editaccident.php');

?>