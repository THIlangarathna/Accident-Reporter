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

        <center><h1 id="headtopic"><a href="Driver.php" style="text-decoration: none;color: white;">Mr.Reporter</a></h1></center>
    <h3><center>Report us any Accident</center></h3>


    <br><br><br>

    <!--map-->
<center>

<?php
include_once 'locationspolice.php';
?>

<div id="map"></div>

<!------ Include the above in your HEAD tag ---------->
<script>
    var map;
    var marker;
    var infowindow;
    var green_icon =  'http://maps.google.com/mapfiles/ms/icons/green-dot.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
    var orange_icon =  'http://maps.google.com/mapfiles/ms/icons/orange-dot.png' ;
    var yellow_icon =  'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png' ;
    var locations = <?php get_all_locations() ?>;

    function initMap() {
        var SriLanka = {lat: 7.873054, lng: 80.771797};
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map'), {
            center: SriLanka,
            zoom: 7
        });


        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon:MarkerColor(locations[i][5]),
                html: document.getElementById('form')
            });
        }
    }


    function MarkerColor(x){
                if(x == "Normal")
                {
                    return yellow_icon;
                }
                else if(x == "Serious")
                {
                    return orange_icon;
                }
                else if(x === "Critical")
                {
                    return red_icon;
                }
                else
                {
                    return purple_icon;
                }
    }


</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyCqw3QveNZva7FsXiToFNfSgsRJqdwG8mo&callback=initMap">
</script>
</center>
</body>
</html>