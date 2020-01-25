<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Driver</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="sidebar.css">
        <style type="text/css">
button
{
background:#2c98e0;
height: 50px;
text-align:center;
width:250px;
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
    <div class="container2">
<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a href="Driver.php"><li>Home</li></a>
      <a href="Dmainpolice.php"><li>Police Stations</li></a>
      <a href="Dmaininsurance.php"><li>Insurance Companies</li></a>
      <a href="DmainRDA.php"><li>RDA</li></a>
      <a href="Dbargraph.php"><li>Accidents</li></a>
      <a href="upload.php"><li>Report an Accident</li></a>
      <a href="Drivermessage.php"><li>Messages</li></a>
      <a href="editaccident.php"><li>Edit Last Accident</li></a>
      <a href="main.php"><li>Sign Out</li></a>
    </ul>
  </div>
</nav>
</div>

    <!--topic-->

        <center><h1 id="headtopic"><a href="main.php" style="text-decoration: none;color: white;">Mr.Reporter</a></h1></center>
    <h3><center>Report us any Accident</center></h3>


    <br><br><br><br><br>

<center>
<!--Your Accident have been reported-->
<h1 style="size: 40">Your Accident have been reported !</h1>
<button><a href="Driver.php" style="color: white;text-decoration: none;"><b>OK<b></button>
</center>
</body>
</html>