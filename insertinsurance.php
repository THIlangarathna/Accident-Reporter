<?php

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'demo');

$msg=$_REQUEST['msg'];
$fromemail=$_REQUEST['fromemail'];
$toemail=$_REQUEST['toemail'];


$insert="insert into chat(fromemail,toemail,msg) values ('$fromemail','$toemail','$msg')";

mysqli_query($con,$insert);



?>