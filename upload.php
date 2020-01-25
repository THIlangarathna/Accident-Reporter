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

    <!--topic-->

        <center><h1 id="headtopic"><a href="Driver.php" style="text-decoration: none;color: white;">Mr.Reporter</a></h1></center>
    <h3><center>Report us any Accident</center></h3>


    <br><br><br>

<!--MAP-->


<center>

<?php
include 'locations_model.php';
//get_unconfirmed_locations();exit;

?>

    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyCqw3QveNZva7FsXiToFNfSgsRJqdwG8mo">
    </script>

    <div id="map"></div>
    <script>
        /**
         * Create new map
         */
        var infowindow;
        var map;
        var red_icon =  'http://maps.google.com/mapfiles/ms/icons/green-dot.png' ;
        var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
        var myOptions = {
            zoom: 7,
            center: new google.maps.LatLng(7.873054,80.771797),
            mapTypeId: 'roadmap'
        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);

        var markers = {};

        var getMarkerUniqueId= function(lat, lng) {
            return lat + '_' + lng;
        };

        var getLatLng = function(lat, lng) {
            return new google.maps.LatLng(lat, lng);
        };

        var addMarker = google.maps.event.addListener(map, 'click', function(e) {
            var lat = e.latLng.lat(); // lat of clicked point
            var lng = e.latLng.lng(); // lng of clicked point
            var markerId = getMarkerUniqueId(lat, lng); // an that will be used to cache this marker in markers object.
            var marker = new google.maps.Marker({
                position: getLatLng(lat, lng),
                map: map,
                animation: google.maps.Animation.DROP,
                id: 'marker_' + markerId,
                html: 
                "    <div id='info_"+markerId+"' style='color:black;'>\n" +
                "        <form action='con1.php' method='POST' enctype='multipart/form-data'>\n" +
                "                Description:<textarea name='description' placeholder='Description'></textarea>\n" +
                "                <br>\n"+
                "                Time:<input type='Time' name='time'>\n" +
                "                <br>\n"+
                "                District: <select name='district' type='text'>\n"+
                "                   <option value='Ampara' type='text'>Ampara</option>\n"+
                "                   <option value='Anuradhapura' type='text'>Anuradhapura</option>\n"+
                "                   <option value='Badulla' type='text'>Badulla</option>\n"+
                "                   <option value='Baticaloa' type='text'>Baticaloa</option>\n"+
                "                   <option value='Colombo' type='text'>Colombo</option>\n"+
                "                   <option value='Galle' type='text'>Galle</option>\n"+
                "                   <option value='Gampaha' type='text'>Gampaha</option>\n"+
                "                   <option value='Hambantota' type='text'>Hambantota</option>\n"+
                "                   <option value='Jaffna' type='text'>Jaffna</option>\n"+
                "                   <option value='Kalutara' type='text'>Kalutara</option>\n"+
                "                   <option value='Kandy' type='text'>Kandy</option>\n"+
                "                   <option value='Kegalle' type='text'>Kegalle</option>\n"+
                "                   <option value='Kilinochchi' type='text'>Kilinochchi</option>\n"+
                "                   <option value='Kurunegala' type='text'>Kurunegala</option>\n"+
                "                   <option value='Matale' type='text'>Matale</option>\n"+
                "                   <option value='Mannar' type='text'>Mannar</option>\n"+
                "                   <option value='Monaragala' type='text'>Monaragala</option>\n"+
                "                   <option value='Mullaitivu' type='text'>Mullaitivu</option>\n"+
                "                   <option value='Nuwara Eliya' type='text'>Nuwara Eliya</option>\n"+
                "                   <option value='Polonnaruwa' type='text'>Polonnaruwa</option>\n"+
                "                   <option value='Puttalam' type='text'>Puttalam</option>\n"+
                "                   <option value='Ratnapura' type='text'>Ratnapura</option>\n"+
                "                   <option value='Trincomalee' type='text'>Trincomalee</option>\n"+
                "                   <option value='Vavuniya' type='text'>Vavuniya</option>\n"+
                "                </select>\n" +
                "                <br>\n"+
                "                Address (if available): <textarea name='address' placeholder='address'></textarea>\n" +
                "                <br>\n"+
                "                Phots:<input type='file' name='upload[]' id='userfile' multiple>\n" +
                "                <br>\n"+
                "                Location\n"+
                "            <input type='text' name='lat' value="+lat+">\n" +
                "            <input type='text' name='lng' value="+lng+">\n" +
                "        <button type='submit'>Save</button>\n" +
                "    </div>"
            });
            markers[markerId] = marker; // cache marker in markers object
            bindMarkerEvents(marker); // bind right click event to marker
            bindMarkerinfo(marker); // bind infowindow with click event to marker
        });

        var bindMarkerinfo = function(marker) {
            google.maps.event.addListener(marker, "click", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                infowindow = new google.maps.InfoWindow();
                infowindow.setContent(marker.html);
                infowindow.open(map, marker);
                // removeMarker(marker, markerId); // remove it
            });
        };

        var bindMarkerEvents = function(marker) {
            google.maps.event.addListener(marker, "rightclick", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                removeMarker(marker, markerId); // remove it
            });
        };

        var removeMarker = function(marker, markerId) {
            marker.setMap(null); // set markers setMap to null to remove it from map
            delete markers[markerId]; // delete marker instance from markers object
        };


    </script>

</center>
</body>
</html>