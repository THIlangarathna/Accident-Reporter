<?php

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'demo');

$msg=$_REQUEST['msg'];
$fromemail=$_REQUEST['fromemail'];


$insert="insert into chat(fromemail,msg) values ('$fromemail','$msg')";

mysqli_query($con,$insert);



?>