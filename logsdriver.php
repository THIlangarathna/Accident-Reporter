<?php
session_start();

$email=$_SESSION['email'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'demo');


$select ="select * from chat where fromemail='$email' or toemail='$email' order by id asc";
$rs=mysqli_query($con,$select);
$count = mysqli_num_rows($rs);
if($count>0){
	while ($row = mysqli_fetch_array($rs)) {
		echo $row['fromemail'] . " : " . $row['msg']. " ------- " . $row['date']. "<br>";
	}
}

?>