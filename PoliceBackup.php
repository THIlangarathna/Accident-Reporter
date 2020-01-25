<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Police</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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

<!--MAP-->

<center>

<?php
include_once 'locationspolice1.php';
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

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    $("#Email").val(locations[i][3]);
                    $("#Id").val(locations[i][0]);
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

    function saveData() {
        var confirmed = document.getElementById('confirmed').checked ? 1 : 0;
        var id = document.getElementById('id').value;
        var url = 'locations_model.php?confirm_location&id=' + id + '&confirmed=' + confirmed ;
        downloadUrl(url, function(data, responseCode) {
            if (responseCode === 200  && data.length > 1) {
                infowindow.close();
                window.location.reload(true);
            }else{
                infowindow.setContent("<div style='color: purple; font-size: 25px;'>Inserting Errors</div>");
            }
        });
    }


    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                callback(request.responseText, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
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

<div style="display: none" id="form">
    <form action="Accidentdetails.php" method="post" enctype="multipart/form-data">
    <input type="text" hidden id="Email" name="Email">
    <input type="text" hidden id="Id" name="Id">
    <button type="submit">View Details</button>
</form>
</div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA6_zDMjL3hgKMGxzoK0lULwM47LrCvuac&callback=initMap">
        document.getElementById("photos").value;
</script>
</center>
</body>
</html>