<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'demo');

$email=$_POST['Email'];
$pass=$_POST['Password'];

$s="select id from insurance where email='$email' && password='$pass' && approve='1'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);


if($num==1)
{
	$_SESSION['insuemail']=$email;
	header('location:Insurance.php');
}
else{
	header('location:Insurancesignin.html');
}

?>