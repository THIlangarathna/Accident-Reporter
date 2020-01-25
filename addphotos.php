<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');
$id=$_POST['id'];

	foreach ($_FILES['upload']['name'] as $key => $name){
 
		$newFilename = time() . "_" . $name;
		move_uploaded_file($_FILES['upload']['tmp_name'][$key], 'upload/' . $newFilename);
		$location = 'upload/' . $newFilename;
		$sql="insert into upload (idaccident,location) values ('$id','$location')";
		mysqli_query($con,$sql);
	}
?>

<?php

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

    header('location:editaccident.php');

?>