<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'demo');

$email=$_POST['Email'];
$pass=$_POST['Password'];

$s="select id from driver where email='$email' && password='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);


if($num==1)
{
	$_SESSION['email']=$email;
	header('location:driver.php');
}
else{
	header('location:Driversignin.html');
}

?>