<?php
session_start();
include_once('db.php');
$query="select * from Insurance where approve='1'";
$result=mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Police</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="cards.css">
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
    }
    #map{
      height: 500px;
      width: 85%;
    }
  </style>
</head>
<body>
    <div class="container">
<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a href="Police.php"><li>Home</li></a>
      <a href="Pmainpolice.php"><li>Police Stations</li></a>
      <a href="Pmaininsurance.php"><li>Insurance Companies</li></a>
      <a href="PmainRDA.php"><li>RDA</li></a>
      <a href="Pbargraph.php"><li>Accidents</li></a>
      <a href="main.php"><li>Sign Out</li></a>
    </ul>
  </div>
</nav>

  <!--topic-->

        <center><h1 id="headtopic"><a href="Police.php" style="text-decoration: none;color: white;">Mr.Reporter</a></h1></center>
  <h3><center>Report us any Accident</center></h3>

<br><br><br>
<!--Accident Details/Driver-->
 <!--Cards-->
<!--Accident Details/Driver-->
  <div class="cards-list">
    <?php
while($rows=mysqli_fetch_array($result))
{
?>
<div class="card 1" style="background-color: black;opacity: 0.6;">
  <div style="float:left;margin-top: 50px;margin-left: 20px;text-align: left;">
        <b>Name :  </b><?php echo $rows['name']; ?><br>
        <b>Company :  </b><?php echo $rows['company']; ?><br>
        <b>Branch :  </b><?php echo $rows['branch']; ?><br>
        <b>Address :  </b><?php echo $rows['address']; ?><br>
        <b>TelNo :  </b><?php echo $rows['telno']; ?><br>
        <b>Email :  </b><?php echo $rows['email']; ?><br>
      </div>
</div>

<?php
}
?>
</div>

</body>
</html>