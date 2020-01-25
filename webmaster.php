<?php
include_once('db.php');
mysqli_select_db($connection,'demo');
$query="select * from police";
$result=mysqli_query($connection,$query);
$query1="select * from insurance";
$result1=mysqli_query($connection,$query1);
$query2="select * from rda";
$result2=mysqli_query($connection,$query2);
$query3="select * from driver";
$result3=mysqli_query($connection,$query3);
$query4="select * from locationsnew";
$result4=mysqli_query($connection,$query4);
$query5="select * from info";
$result5=mysqli_query($connection,$query5);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mr.Reporter</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		#map{
			height: 500px;
			width: 70%;
		}
	</style>
</head>
<body>

	<!--topic-->

	<h1><center><a href="main.php">Mr.Reporter</a></center></h1>
	<h3><center>Admin</center></h3>

	<!--Nav bar-->

	<ul>
		<li style="float: left";><a href="#police">Police Stations</a></li><br>
		<li style="float: left";><a href="#insurance">Insurance Companies</a></li><br>
		<li style="float: left";><a href="#rda">RDA</a></li><br>
		<li style="float: left";><a href="#drivers">Drivers</a></li><br>
        <li style="float: left";><a href="#accidents">Accidents</a></li><br>
        <li style="float: left";><a href="#Feedback">Feedbacks</a></li><br>
        <li style="float: right";><a href="Policesignin.html">Back</a></li>
	</ul>
    <br><br><br>
    <h3 id="Feedback">Feedback</h3>
<table style="width:auto;" border="1px solid black;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone No</th>
    <th>Message</th>
  </tr>
<?php
  while($rows=mysqli_fetch_array($result5)){
?>
  <tr>
    <td><?php echo $rows['ID']; ?></td>
    <td><?php echo $rows['uname']; ?></td>
    <td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['phoneno']; ?></td>
    <td><?php echo $rows['msg']; ?></td>
  </tr>
<?php
}
?>
</table>
	<br><br><br>
    <h3 id="police">Police</h3>
<table style="width:auto;" border="1px solid black;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Branch</th>
    <th>Address</th>
    <th>Tel No</th>
    <th>MTD Tel No</th>
    <th>Email</th>
    <th>Password</th>
    <th>Status</th>
    <th>Accept</th>
    <th>Decline</th>
  </tr>
<?php
  while($rows=mysqli_fetch_array($result)){
?>
  <tr>
    <td><?php echo $rows['ID']; ?></td>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['branch']; ?></td>
    <td><?php echo $rows['address']; ?></td>
    <td><?php echo $rows['telno']; ?></td>
    <td><?php echo $rows['MTDtelno']; ?></td>
    <td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['password']; ?></td>
    <td><?php echo $rows['approve']; ?></td>
    <td>
            <form action="acceptpolice.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['ID']; ?>"><button type="submit">Accept</button></form>
    </td>
    <td>
            <form action="declinepolice.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['ID']; ?>"><button type="submit">Decline</button></form>
    </td>
  </tr>
<?php
}
?>
</table>
    <br><br><br>
    <h3 id="insurance">Insurance</h3>
<table style="width:auto;" border="1px solid black;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Company</th>
    <th>Branch</th>
    <th>Address</th>
    <th>Tel No</th>
    <th>Email</th>
    <th>Password</th>
    <th>Status</th>
    <th>Accept</th>
    <th>Decline</th>
  </tr>
<?php
  while($rows=mysqli_fetch_array($result1)){
?>
  <tr>
    <td><?php echo $rows['ID']; ?></td>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['company']; ?></td>
    <td><?php echo $rows['branch']; ?></td>
    <td><?php echo $rows['address']; ?></td>
    <td><?php echo $rows['telno']; ?></td>
    <td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['password']; ?></td>
    <td><?php echo $rows['approve']; ?></td>
    <td>
            <form action="acceptinsurance.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['ID']; ?>"><button type="submit">Accept</button></form>
    </td>
    <td>
            <form action="declineinsurance.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['ID']; ?>"><button type="submit">Decline</button></form>
    </td>
  </tr>
<?php
}
?>
</table>
<br><br><br>
    <h3 id="rda">RDA</h3>
<table style="width:auto;" border="1px solid black;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Branch</th>
    <th>Address</th>
    <th>Tel No</th>
    <th>Email</th>
    <th>Password</th>
    <th>Status</th>
    <th>Accept</th>
    <th>Decline</th>
  </tr>
<?php
  while($rows=mysqli_fetch_array($result2)){
?>
  <tr>
    <td><?php echo $rows['ID']; ?></td>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['branch']; ?></td>
    <td><?php echo $rows['address']; ?></td>
    <td><?php echo $rows['telno']; ?></td>
    <td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['password']; ?></td>
    <td><?php echo $rows['approve']; ?></td>
    <td>
            <form action="acceptrda.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['ID']; ?>"><button type="submit">Accept</button></form>
    </td>
    <td>
            <form action="declinerda.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['ID']; ?>"><button type="submit">Decline</button></form>
    </td>
  </tr>
<?php
}
?>
</table>
<br><br><br>
    <h3 id="drivers">Drivers</h3>
<table style="width:auto;" border="1px solid black;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>NIC</th>
    <th>License No</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Tel No</th>
    <th>Email</th>
    <th>Vehicle type</th>
    <th>Insurance No</th>
    <th>Insurance Company</th>
    <th>Vehicle No</th>
    <th>Password</th>
    <th>Delete</th>
  </tr>
<?php
  while($rows=mysqli_fetch_array($result3)){
?>
  <tr>
    <td><?php echo $rows['ID']; ?></td>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['address']; ?></td>
    <td><?php echo $rows['NIC']; ?></td>
    <td><?php echo $rows['licenseno']; ?></td>
    <td><?php echo $rows['DOB']; ?></td>
    <td><?php echo $rows['gender']; ?></td>
    <td><?php echo $rows['telno']; ?></td>
    <td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['vehicle']; ?></td>
    <td><?php echo $rows['insuranceno']; ?></td>
    <td><?php echo $rows['insurancecom']; ?></td>
    <td><?php echo $rows['vehicleno']; ?></td>
    <td><?php echo $rows['password']; ?></td>
    <td>
            <form action="deletedriver.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['ID']; ?>"><button type="submit">Delete</button></form>
    </td>
  </tr>
<?php
}
?>
</table>
<br><br><br>
    <h3 id="accidents">Accidents</h3>
<table style="width:auto;" border="1px solid black;">
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>Lat</th>
    <th>Lng</th>
    <th>Description</th>
    <th>Date</th>
    <th>Time</th>
    <th>District</th>
    <th>Address</th>
    <th>Status</th>
    <th>Delete</th>
    <th>Photos</th>
  </tr>
<?php
  while($rows=mysqli_fetch_array($result4)){
?>
  <tr>
    <td><?php echo $rows['id']; 
    $id=$rows['id'];?></td>
    <td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['lat']; ?></td>
    <td><?php echo $rows['lng']; ?></td>
    <td><?php echo $rows['description']; ?></td>
    <td><?php echo $rows['date']; ?></td>
    <td><?php echo $rows['time']; ?></td>
    <td><?php echo $rows['district']; ?></td>
    <td><?php echo $rows['address']; ?></td>
    <td><?php echo $rows['status']; ?></td>
    <td>
            <form action="deleteaccident.php" method="post" enctype="multipart/form-data">
            <input type="text" hidden="" name="id" value="<?php echo $rows['id']; ?>"><button type="submit">Delete</button></form>
    </td>
    <td>

<?php
$query5="select * from upload where idaccident ='$id'";
$result5=mysqli_query($connection,$query5);
while($rows=mysqli_fetch_array($result5))
{
?>
<img src="<?php echo $rows['location']; ?>" style="height: 100px;width: 100px;">
<?php
}
?>

    </td>
  </tr>
<?php
}
?>
</table>
</body>
</html>