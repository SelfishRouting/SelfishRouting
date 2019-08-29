
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--  -->
        <!--    Document Title-->
        <!-- =============================================-->
        <title>Form | Selfish Routing</title>
        <!--  -->
        <!--    Favicons-->
        <!--    =============================================-->
        
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
        <link href="assets/lib/prism/prism.css" rel="stylesheet">
        <!-- Main stylesheet and color file-->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet"> </head>
    <body data-spy="scroll" data-target=".inner-link" data-offset="60">
    
        <main>
            <script src="assets/js/header.js"></script>
            
            
            <section class="p-0 color-white font-1">
            
                <div class="background-holder overlay overlay-2" style="background-image:url(assets/images/background/Uber-Driver.png);"> </div>
                <!--/.background-holder-->
                <div class="container">
                    <div class="row h-half align-items-center py-5">
                        <div class="col-md-8 col-lg-5">
                            <h1 class="fs-3 fs-md-4 mb-3">Share your experience</h1>
                            <p class="lead fs-xs-1"> &amp; Participate in building the map</p>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </section>
            
            <section>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 text-center">
                            <br>
                            <h1 class="fs-3 mb-3 fw-400"><span class="icon-Pen color-info"></span></h1>
                            <h1 class="fs-3 mb-3 fw-400">Fill in the form</h1>
                            <hr class="long center mb-5" align="center">
                        </div>
                    </div>
            </section>
           <section class="font-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method='post' class='report_form' action="cible.php" enctype="multipart/form-data" onsubmit="return confirmation()">
<!--                         <div class='confirmation'><p>Your report has been filed and will be reviewed shortly.<br>Thank you for your contribution!</p></div>-->
                                <input type="text" id="Lat" readonly="readonly" name="Lat" type='hidden' />
                                <input type="text" id="Lng" readonly="readonly" name="Lng" type='hidden' />
                                <input id="address_input" name='address' type='hidden'/>
                                <div class="form-group">
                                    <label> Add a picture of traffic excess in your location<br><i class="color-info">(be carefull don't click on plus container if you don't want to add another picture)</i></label>
                                    <br>
                                    <br>
                                    <div class='photos_container'>
                                        <label class='pic_display' for='1' title='Select a photograph'>
                                            <div class='list 1'><span class="icon-Camera-2"></span></div>
                                        </label>
                                        <input id='1' class='files' type='file' name='photo_1'/>
                                        <span id='add_photograph' title='Add a photograph' class="icon-Add"></span>
                                        <input type='hidden' name='nmbre_photos' value='1'/>
                                        </div>
                                </div>
                                 <label>Select tags that describe your problem</label>
                                <div id="tags">
                                        <label for='speeding'><input type='checkbox' class='tag' id='speeding'  name='tag_1'  /><div>Speeding</div></label>
                                        <label for='school_zone'><input type='checkbox' class='tag' id='school_zone' name='tag_2' /><div>School zone</div></label>
                                        <label for='traffic_noise'><input type='checkbox' class='tag' id='traffic_noise' name='tag_3' /><div>Traffic Noise</div></label>
                                        <label for='children_play_area'><input type='checkbox' class='tag' id='children_play_area' name='tag_4' /><div>Children's play area</div></label>
                                        <label for='increased_pollution'><input type='checkbox' class='tag' id='increased_pollution' name='tag_5' /><div>Increased pollution</div></label>
                                        <label for='traffic_excess'><input type='checkbox' class='tag' id='traffic_excess' name='tag_6' /><div>Traffic excess</div></label> 
                                </div> 
                               <div class="form-group">
                                    <label for="exampleInputName">If you can't find the proper tag or want to add something,  please feel free to describe the problem in words </label>
                                   <textarea class="form-control" name="content" id="text" type="text" placeholder="Message"></textarea> </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Is there an article dealing with this issue?</label>
                                    <input class="form-control" name="article_link" id="URL" type="text" placeholder="URL"> </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">What is your e-mail?</label>
                                    <input class="form-control" name="email" id="Email1" type="email" placeholder="Email" required> </div>
                                <div class="form-group">
                                    <label> Ready to share your experience? </label>
                                    <br>
                                    <input class='submit' type='submit' value='Send'/>
                                </div>
                                <div class='resultat' style='color:red;font-family:roboto, sans-serif;'><br></div>
                                </form>
                            
                        </div>
                        <div class="col-lg-6">
                            
                            <h4 class="fs-4 text-center"> <span class="icon-Map2 color-info"> </span></h4>
<label>Where is the problem located? Please input an adress and check on the map</label>
                            <br>
                            <br>
                            <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 30rem;
        width: 30rem
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }
      #infowindow-content .title {
        font-weight: bold;
      }
      #infowindow-content {
        display: none;
      }
      #map #infowindow-content {
        display: inline;
      }
      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 3px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        text-overflow: ellipsis;
        width:18rem ;
        height: 3rem;
        border-radius: 3px;
        display: block;
        align-self: center;
      }

      #pac-input:focus {
        border-color: #69cdF6;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }
    </style>
                            <script >
                            
                            function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 37.871853, lng: -122.258423},
          zoom: 13,
          mapTypeId: 'roadmap'
        });
        var infoWindow = new google.maps.InfoWindow({map: map});
        // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Your Location.');
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
              
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
            document.getElementById('Lat').value = place.geometry.location.lat();
            document.getElementById('Lng').value = place.geometry.location.lng();
              
              
            
          });
          map.fitBounds(bounds);
        });
      }


                            
                            
                            
                            </script>
<script  async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8rJhDsfwvIod9jVTfFm1Dtv2eO4QWqxQ&callback=initAutocomplete&libraries=places"></script> 
    <input id="pac-input" class="controls" type="text" placeholder="Search Box" onchange='$("#address_input").val($(this).val());'>            
    <div id="map"></div>
    
                            
       
                       

    
                        </div> 
                     
                        
                    </div>
               </div><!--/.container-->
            </section>
            
            <section class="text-center font-1 color-white py-0">
                
                <div class="background-holder overlay overlay-1" style="background-image:url(assets/images/background/MapMarker.png);"> </div>
                <!--/.background-holder-->
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-6 py-8">
                            <h3 class="mb-3">Have a look at the map you've helped us build!</h3>
                            <a class=" btn-icon btn-icon-left btn btn-outline-info btn-sm-lg mt-5 text-uppercase ls" href="Contact.html"> <span class="icon-Map2"></span>Discover ! </a>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </section>
            <script src="assets/js/footer.js"></script>
        </main>
        <!--  -->
        <!--    JavaScripts-->
        <!--    =============================================-->
        <script src="assets/lib/jquery/dist/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
        <script src="assets/js/core.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
            /*-----Afficher l'image sélectionnée-----*/
  function handleFileSelect(evt) {
    var id=$(this).attr('id');
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
        $('.'+id).html('');
        $('.'+id).css({
            background:'url('+e.target.result+') no-repeat center',
            backgroundSize:'cover',
        });
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

$(document).click(function(){
    $('.files').change(handleFileSelect);
});

/*-----Clic sur add_photograph-----*/
$cpt=2;
$('#add_photograph').click(function(){
    if($cpt<4){
        $("<label class='pic_display' for='"+$cpt+"' title='Select a photograph'><div class='list "+$cpt+"'><span class='icon-Camera-2'></span></div></label><input id='"+$cpt+"' class='files' type='file' name='photo_"+$cpt+"'/>").insertBefore(this);
        $('input[name="nmbre_photos"]').attr('value',$cpt);
        $cpt++;
    }
    else{
        $("<label class='pic_display' for='"+$cpt+"' title='Select a photograph'><div class='list "+$cpt+"'><span class='icon-Camera-2'></span></div></label><input id='"+$cpt+"' class='files' type='file' name='photo_"+$cpt+"'/>").insertBefore(this);
        $('input[name="nmbre_photos"]').attr('value',$cpt);
        $(this).css('display','none');
    }
});
          
            
$('.submit').click(function(e){
        
        $('#address_input').val($('#pac-input').val());
        /*for(i=1;i<=6;i++){
            validate('.tag[name="tag_'+i+'"]');
            console.log(i);
        }*/
        e.preventDefault();
        var fd=new FormData(document.querySelector('form'));
        $.ajax({
            type		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url		: 'cible.php', // the url where we want to POST
            data		: fd, // our data object
            dataType: 'text',
            processData: false,
            contentType: false,
            beforeSend: function(){
                $('.resultat').append('Envoi');
            },
            complete: function(){
                $('.resultat').append('<br>Envoyé');
            },
            success: function(data){
                $('.resultat').css('color','red');
                $('.resultat').append(data);
                $('.resultat').append('data');
                if(data===''){
                    $('.resultat').append('<br>rien');
                    alert('c est bon');
                    $('.confirmation').fadeToggle(300);
                    $('.report_form')[0].reset();
                }
            },
            error: function(xhr, status, error){
                

                $('.resultat').append(xhr.responseText);
            }
        });
    });
/*            
function validate(el) {
  if ($(el).prop('checked')) {
    $(el).attr('value','1');
  } else {
    $(el).attr('value','0');
  }
} */            
/*ENTRER UNE ADRESSE*/
console.log('soleil')
function change_address(){
    console.log('oui');
}
        </script>
    </body>
    
</html>
