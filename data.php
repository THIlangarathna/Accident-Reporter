<?php

header('Content-Type: application/json');

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'demo');


$s="select district,count(*) as quantity from locationsnew group by district";


$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

$data = array();
foreach ($result as $row){
	$data[]=$row;
	}
print json_encode($data);

?>