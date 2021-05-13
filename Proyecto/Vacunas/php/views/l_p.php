<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lugares</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
<style>
html, body, #map-canvas {
    height: 100%;
    margin: auto;
    padding: auto;
    }    
</style>
</head>
<body>
    <?php include "navs/navusrbusc.html"?>  
        <div id="map-canvas"></div>
    
</body>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
function initialize() {
    var myLatlng = new google.maps.LatLng(22.147075465994423, -102.2814058321307);
    var mapOptions = {
        zoom: 13,
        center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:'Secundaria Técnica Número 3 José Ángel Ceniceros Dias-- Horarios 8:00 A.M a 2:00 P.M'
    });

}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</html>