<?php
session_start();
include_once('db.php');
mysqli_select_db($connection,'demo');
$email=$_POST['Email'];
$id=$_POST['Id'];


$query="select * from driver where email='$email'";
$result=mysqli_query($connection,$query);
$query1="select * from locationsnew where id ='$id'";
$result1=mysqli_query($connection,$query1);
$query2="select * from upload where idaccident ='$id'";
$result2=mysqli_query($connection,$query2);
$_SESSION['email']=$email;

?>

<!DOCTYPE html>
<html>
<head>
    <title>RDA</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="sidebar.css">
<style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        #map{
            height: 500px;
            width: 85%;
        }
        input
{
border:none;
padding:20px 0px;
width:200px;
font-size:0.9em;
height: 1px;
}


button
{
background:#2c98e0;
height: 30px;
text-align:center;
width:180px;
border-radius:5px;
font-size:1em;
color:#fff;
margin-top:10px;
cursor:pointer;
-webkit-transition:0.5s ease;-moz-transition:0.5s ease;transition:0.5s ease;
}


button:hover{background:#1c7dbe;-webkit-transition:0.5s ease;-moz-transition:0.5s ease;transition:0.5s ease;}
    </style>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <div class="container">
<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a href="RDA.php"><li>Home</li></a>
      <a href="Rmainpolice.php"><li>Police Stations</li></a>
      <a href="Rmaininsurance.php"><li>Insurance Companies</li></a>
      <a href="RmainRDA.php"><li>RDA</li></a>
      <a href="Rbargraph.php"><li>Accidents</li></a>
      <a href="main.php"><li>Sign Out</li></a>
    </ul>
  </div>
</nav>

    <!--topic-->

        <center><h1 id="headtopic"><a href="RDA.php" style="text-decoration: none;color: white;">Mr.Reporter</a></h1></center>
    <h3><center>Report us any Accident</center></h3>


    <br><br><br>
<!--Accident Details/Driver-->
<div>
<?php
while($rows=mysqli_fetch_array($result))
{
?>
<div style="width: 25%;float:left;height:270px;text-align: left;background-color: #808080;padding-left: 50px;padding-top: 50px;padding-right: 50px;margin-left: 5%;margin-right: 5%;">
    <h3>Driver Details</h3>
    <br>
        <b>Name : </b><?php echo $rows['name']; ?><br>
        <b>Address : </b><?php echo $rows['address']; ?><br>
        <b>NIC : </b><?php echo $rows['NIC']; ?><br>
        <b>License No : </b><?php echo $rows['licenseno']; ?><br>
        <b>Gender : </b><?php echo $rows['gender']; ?><br>
        <b>Email : </b><?php echo $rows['email']; ?><br>
        <b>Vehicle type : </b><?php echo $rows['vehicle']; ?><br>
        <b>Insurance No : </b><?php echo $rows['insuranceno']; ?><br>
        <b>Insurance Comapany : </b><?php echo $rows['insurancecom']; ?><br>
        <b>Vehicle No : </b><?php echo $rows['vehicleno']; ?><br>
      </div>
<?php
}
?>

<!--Accident Details/Accident-->
<?php
while($rows=mysqli_fetch_array($result1))
{
?>
<div style="width: 40%;float:left;height:auto;text-align: left;background-color: #808080;padding-left: 50px;padding-top: 50px;padding-right: 50px;margin-right: 5%;margin-left: 5%;padding-bottom: 50px;">
    <h3>Accident Details</h3>
    <br>
        <b>Latitude : </b><?php echo $rows['lat']; ?><br>
        <b>Longitude : </b><?php echo $rows['lng']; ?><br>
        <b>Description : </b><?php echo $rows['description']; ?><br>
        <b>Time : </b><?php echo $rows['time']; ?><br>
        <b>Date : </b><?php echo $rows['date']; ?><br>
        <b>District : </b><?php echo $rows['district']; ?><br>
        <b>Address : </b><?php echo $rows['address']; ?><br><br>
<?php
}
?>
<?php
while($rows=mysqli_fetch_array($result2))
{
?>
<img src="<?php echo $rows['location']; ?>" style="height: 220px;width: 220px;">
<?php
}
?>
      <br>
</div>
</div>
</body>
</html>