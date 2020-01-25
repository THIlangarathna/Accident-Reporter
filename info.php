<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$name = $_POST['uname'];
$email = $_SESSION['email'];
$phoneno = $_POST['phoneno'];
$msg =$_POST['msg'];


$reg="insert into info(uname,email,phoneno,msg) values ('$name','$email','$phoneno','$msg')";
    mysqli_query($con,$reg);
    header('location:Thankyou.php');

?>