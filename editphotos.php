<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

$id=$_POST['id'];


$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["userfile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file);

		$reg="update upload set location='$target_file' where id='$id'";
		mysqli_query($con,$reg);

?>

<?php

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

    header('location:editaccident.php');

?>