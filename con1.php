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

echo "$email";
echo "$lat";
echo "$lng";
echo "$description";
echo "$time";
echo "$district";
echo "$address";


$reg="insert into locationsnew(email,lat, lng, description,date,time,district,address) values ('$email','$lat','$lng','$description',curdate(),'$time','$district','$address')";
    mysqli_query($con,$reg);


$s="select max(id) from locationsnew";

$result=mysqli_query($con,$s);

while($rows=mysqli_fetch_array($result))
{
        $id=$rows['max(id)'];
}

$newid=$id;

	foreach ($_FILES['upload']['name'] as $key => $name){
 
		$newFilename = time() . "_" . $name;
		move_uploaded_file($_FILES['upload']['tmp_name'][$key], 'upload/' . $newFilename);
		$location = 'upload/' . $newFilename;
		$sql="insert into upload (idaccident,location) values ('$newid','$location')";
		mysqli_query($con,$sql);
	}
?>

<?php

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'demo');

    header('location:Wait.php');

?>