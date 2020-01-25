<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mr.Reporter</title>
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
		#chart-container{
			width:640px;
			height:auto;
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
      <a href="main.php"><li>Home</li></a>
      <a href="map.php"><li>Map</li></a>
      <a href="mainpolice.php"><li>Police Stations</li></a>
      <a href="maininsurance.php"><li>Insurance Companies</li></a>
      <a href="mainRDA.php"><li>RDA</li></a>
      <a href="bargraph.php"><li>Accidents</li></a>
      <a href="SignUpmain.html"><li>Sign Up</li></a>
      <a href="Signinmain.html"><li>Log In</li></a>
    </ul>
  </div>
</nav>

	<!--topic-->

        <center><h1 id="headtopic"><a href="main.php" style="text-decoration: none;color: white;">Mr.Reporter</a></h1></center>
	<h3><center>Report us any Accident</center></h3>


	<br><br><br>
<!--Chart-->
<center>
	<div id="chart-container">
		<h3>Accidents By Districts</h3>
		<canvas id="mycanvas"></canvas>
		<br><br><br>
		<h3>Accidents By Status</h3>
		<canvas id="mycanvas2"></canvas>
		NULL -- Not Categorized yet
		<br><br><br>
		<h3>Accidents By Date</h3>
		<canvas id="mycanvas3"></canvas>
	</div>
</center>
	<!--JS-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/chart.min.js"></script>
	<script type="text/javascript" src="js/app1.js"></script>
	<script type="text/javascript" src="js/app2.js"></script>
	<script type="text/javascript" src="js/app3.js"></script>
</body>
</html>