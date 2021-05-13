<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lugares</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="../../css/bootstrap-cargar.css">-->
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
    <div id="contenedor_carga">
            <div id="carga">
            </div>
        </div>
    <div id="map-canvas">
    </div>    
    
        
</body>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
function initialize() {
    var myLatlng = new google.maps.LatLng(21.911358538862387, -102.31176390329959);
    var myLatlng1 = new google.maps.LatLng(21.886968718940896, -102.2794324628199);
    var myLatlng2 = new google.maps.LatLng(21.871847372349638, -102.30885427631357);
    var myLatlng3 = new google.maps.LatLng(21.872732036865493, -102.2800129436778);
    var mapOptions = {
        zoom: 13,
        center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:'UAA Dias 28,29,30 de abril y 1 de mayo Horario 8:00 A.M a 2:00 P.M'
    });

    var marker2 = new google.maps.Marker({
        position: myLatlng2,
        map: map,
        title:'Foro de las Estrellas Dias 28,29,30 de abril y 1 de mayo Horario 8:00 A.M a 2:00 P.M'
    });

    var marker1 = new google.maps.Marker({
        position: myLatlng1,
        map: map,
        title:'Salón de Locomotoras Dias 27,28,29,30 de abril y 1 de mayo Horario 8:00 A.M a 2:00 P.M'
    });

    var marker3 = new google.maps.Marker({
        position: myLatlng3,
        map: map,
        title:'IV Cntenario Dias 28,29,30 de abril y 1 de mayo Horario 8:00 A.M a 2:00 P.M'
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<!--<script src="../../js/bootstrap.cerrar.js"></script>-->
</html>