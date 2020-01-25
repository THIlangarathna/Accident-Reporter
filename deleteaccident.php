<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$id=$_POST['id'];


	$reg="delete from locationsnew where id='$id'";
	$reg1="delete from upload where idaccident='$id'";
	mysqli_query($con,$reg);
	mysqli_query($con,$reg1);
	header('location:webmaster.php');

?>