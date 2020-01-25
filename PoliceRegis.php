<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$name=$_POST['Name'];
$branch=$_POST['Branch'];
$address=$_POST['Address'];
$telno=$_POST['TelNo'];
$MTDtelno=$_POST['MTDTelNo'];
$email=$_POST['Email'];
$password=$_POST['password'];
;

	$reg="insert into police(name,branch,address,telno,MTDtelno,email,password) values ('$name','$branch','$address','$telno','$MTDtelno','$email','$password')";
	mysqli_query($con,$reg);
	header('location:adminconfirm.php');

?>