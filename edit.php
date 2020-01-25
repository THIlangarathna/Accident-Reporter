<?php

session_start();

$id=$_SESSION['id'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Driver</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        #map{
            height: 600px;
            width: 80%;
        }
    </style>
</head>
<body>

    <!--topic-->

    <h3><center>Mark your new location</a></center></h3>

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
                "    <div id='info_"+markerId+"'>\n" +
                "        <form action='editlocation.php' method='POST' enctype='multipart/form-data'>\n" +
                "            <input type='text' name='lat' value="+lat+">\n" +
                "            <input type='text' name='lng' value="+lng+">\n" +
                "            <input type='text' hidden name='id' value='<?php echo $id ?>'>\n" +
                "        <button type='submit'>Update</button>\n" +
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