<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$name=$_POST['Name'];
$address=$_POST['Address'];
$NIC=$_POST['NIC'];
$license=$_POST['License'];
$DOB=$_POST['Date'];
$gender=$_POST['Gender'];
$telno=$_POST['TelNo'];
$email=$_POST['Email'];
$vehicle=$_POST['Vehicle'];
$insuranceNo=$_POST['InsuranceNo'];
$insuranceCom=$_POST['InsuranceCom'];
$vehicleNo=$_POST['VehicleNo'];
$password=$_POST['password'];

$_SESSION['email']=$email;

	$reg="insert into driver(name,address,NIC,licenseno,DOB,gender,telno,email,vehicle,insuranceno,insurancecom,vehicleno,password) values ('$name','$address','$NIC','$license','$DOB','$gender','$telno','$email','$vehicle','$insuranceNo','$insuranceCom','$vehicleNo','$password')";
	mysqli_query($con,$reg);
	header('location:DriverSuc.php');

?>