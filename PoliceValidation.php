<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'demo');

$email=$_POST['Email'];
$pass=$_POST['Password'];

if($email=="12345" && $pass=="12345")
{
	header('location:webmaster.php');
}
else{
$s="select id from police where email='$email' && password='$pass' && approve='1'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);


if($num==1)
{
	$_SESSION['email']=$email;
	header('location:Police.php');
}
else{
	header('location:Policesignin.html');
}
}


?>