<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$id=$_POST['id'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

echo $id;
echo $lat;
echo $lng;

	$reg="update locationsnew set lat='$lat',lng='$lng' where id='$id'";
	mysqli_query($con,$reg);
	header('location:editaccident.php');

?>