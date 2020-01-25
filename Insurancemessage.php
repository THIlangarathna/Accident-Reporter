<?php

session_start();

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Insurance</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="sidebar.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		function submitChat() {
			var msg = encodeURIComponent(form1.msg.value);
			var fromemail=encodeURIComponent("<?php echo $_SESSION['insuemail']; ?>");
			var toemail=encodeURIComponent("<?php echo $_SESSION['email']; ?>");
			var xmlhttp = new XMLHttpRequest();

			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
				}
			}

			xmlhttp.open('GET','insertinsurance.php?fromemail='+fromemail+'&toemail='+toemail+'&msg='+msg,true);
			xmlhttp.send();
			document.getElementById('msg').value ="";
		}
		$(document).ready(function(e){
			$.ajaxSetup({cache:false});

			setInterval(function(){$('#chatlogs').load('logsinsurance.php');},1000);
		});
	</script>
	<style type="text/css">
		button
{
background:#2c98e0;
height: 40px;
text-align:center;
width:70px;
border-radius:5px;
font-size:1em;
color:#fff;
margin-top:10px;
cursor:pointer;
-webkit-transition:0.5s ease;-moz-transition:0.5s ease;transition:0.5s ease;
}
input
{
border:none;
padding:20px 0px;
width:230px;
font-size:0.9em;
height: 0px;
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
	  <a href="Insurance.php"><li>Home</li></a>
      <a href="Imainpolice.php"><li>Police Stations</li></a>
      <a href="Imaininsurance.php"><li>Insurance Companies</li></a>
      <a href="ImainRDA.php"><li>RDA</li></a>
      <a href="Ibargraph.php"><li>Accidents</li></a>
      <a href="main.php"><li>Sign Out</li></a>
    </ul>
  </div>
</nav>
</div>

    <!--topic-->

        <center><h1 id="headtopic"><a href="Insurance.php" style="text-decoration: none;color: white;">Mr.Reporter</a></h1></center>
        
    <h2><center>Driver</center></h2>
<div align="center">
	<form name="form1">

			<!-- Message Box-->
		<div id="chatlogs" style="background-color: #23a6d5;height: 400px;width: 350px;text-align: left;overflow: scroll;padding-left: 10px;padding-top: 10px;">
			No messages...
		</div>

		<input type="Text" name="msg" id="msg">
		<button><a href="#" onclick="submitChat()" style="text-decoration:none;color: white;">Send</a></button>
	</form>
</div>
</body>
</html>