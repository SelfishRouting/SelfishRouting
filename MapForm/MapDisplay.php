<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--  -->
        <!--    Document Title-->
        <!-- =============================================-->
        <title>The Map | Selfish Routing </title>
        <!--  -->
        <!--    Favicons-->
        <!--    =============================================-->
        
        <meta name="theme-color" content="#ffffff">
        <!--  -->
        <!--    Stylesheets-->
        <!--    =============================================-->
        <!-- Default stylesheets-->
        <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Template specific stylesheets-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i" rel="stylesheet">
        <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
        <link href="assets/lib/css-hamburgers/dist/hamburgers.css" rel="stylesheet">
        <!-- Main stylesheet and color file-->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet"> 
   
        <style type="text/css">
            body { font: normal 14px Verdana; }
            h1 { font-size: 24px; }
            h2 { font-size: 18px; }
            #sidebar { float: right; width: 30%; }
            #main { padding-right: 15px; }
            .infoWindow { width: 220px; }
        </style>
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8rJhDsfwvIod9jVTfFm1Dtv2eO4QWqxQ&callback=init"
  type="text/javascript"></script>
        <script type="text/javascript">
        //<![CDATA[
         
        
                function makeRequest(url, callback) {
        var request;
        if (window.XMLHttpRequest) {
            request = new XMLHttpRequest(); // IE7+, Firefox, Chrome, Opera, Safari
        } else {
            request = new ActiveXObject("Microsoft.XMLHTTP"); // IE6, IE5
        }
        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200) {
                callback(request);
            }
        }
        request.open("GET", url, true);
        request.send();
    }
            var map;
 
// Ban Jelačić Square - City Center
var center = new google.maps.LatLng(37.871853, -122.258423);
 
var geocoder = new google.maps.Geocoder();
var infowindow = new google.maps.InfoWindow();
 
function init() {
    
    var mapOptions = {
      zoom: 7,
      center: center,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
     
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
     
    makeRequest('get_locations.php', function(data) {
        
        var data = JSON.parse(data.responseText);
         
        for (var i = 0; i < data.length; i++) {
            displayLocation(data[i]);
        }
    });
}
            function displayLocation(location) {
         
    var content =   '<div class="infoWindow"><strong>'  + location.Title + '</strong>'
                    + '<br/>'     + location.Author
                    + '<br/>'     + location.Url + '</div>';
     
    
        geocoder.geocode( { 'address': location.Extra }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var image = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                var marker = new google.maps.Marker({
                    map: map, 
                    position: results[0].geometry.location,
                    icon: image,
                    title: location.Title
                });
                 
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.setContent(content);
                    infowindow.open(map,marker);
                });
            }
        });
     
}
        //]]>
        </script>
    </head>
    <body data-spy="scroll" data-target=".inner-link" data-offset="60" onload="init();">
        <main>
            <script src="assets/js/header.js"></script>
          <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 text-center">
                            <h1 class="fs-3 mb-3 fw-400"><span class="icon-File-Map color-info"></span></h1>
                            <h1 class="fs-3 mb-3 fw-400">The map</h1>
                        </div>
                    </div>  
    
                    <section id="sidebar">
                        <div id="directions_panel"></div>
                    </section>
         
                    <section id="main">
                        <div class="radius-secondary"id="map_canvas" style="width: 100%; height: 700px; "></div>
                    </section>
              </div>
            </section>
        </main>
    </body>
</html>