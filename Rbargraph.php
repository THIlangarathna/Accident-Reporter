<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>RDA</title>
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
<!--Chart-->
<center>
	<div id="chart-container">
		<h4>Accidents By Districts</h4>
		<canvas id="mycanvas"></canvas>
		<br><br><br>
		<h4>Accidents By Status</h4>
		<canvas id="mycanvas2"></canvas>
		NULL -- Not Categorized yet
		<br><br><br>
		<h4>Accidents By Date</h4>
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