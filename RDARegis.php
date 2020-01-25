<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$name=$_POST['Name'];
$branch=$_POST['Branch'];
$address=$_POST['Address'];
$telno=$_POST['TelNo'];
$email=$_POST['Email'];
$password=$_POST['password'];


	$reg="insert into RDA(name,branch,address,telno,email,password) values ('$name','$branch','$address','$telno','$email','$password')";
	mysqli_query($con,$reg);
	header('location:adminconfirm.php');

?>