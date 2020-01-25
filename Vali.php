<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$email = $_SESSION['email'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$description =$_POST['description'];
$time=$_POST['time'];
$district =$_POST['district'];
$address=$_POST['address'];
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["userfile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file);


$reg="insert into locations(email,lat, lng, description,date,time,district,address,photos) values ('$email','$lat','$lng','$description',curdate(),'$time','$district','$address','$target_file')";
    mysqli_query($con,$reg);
    header('location:Wait.php');

?>
