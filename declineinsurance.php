<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$id=$_POST['id'];


	$reg="update insurance set approve='0' where ID='$id'";
	mysqli_query($con,$reg);
	header('location:webmaster.php');

?>