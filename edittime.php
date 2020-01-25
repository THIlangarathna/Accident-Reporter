<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$id=$_POST['id'];
$time=$_POST['edittime'];

echo $id;
echo $time;

	$reg="update locationsnew set time='$time' where id='$id'";
	mysqli_query($con,$reg);
	header('location:editaccident.php');

?>