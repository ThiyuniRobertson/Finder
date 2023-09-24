<!--===================footer====================-->

<div class="container-fluid footer_row text-center">
      
      <div class="container">
        
       <div class="row">
         
       <a href="<?php echo base_url('/'); ?>"> <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="" class="d-block top_logo mx-auto mb-3"data-aos="fade-up"> </a>

       <p class="text-center" data-aos="fade-down">
         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br>when an unknown printer took a galley of type and scrambled it to make a type specimen book.
       </p>

       <p class="top_social_icon mb-5">
          Follow Us on<br>
          <a href="#" target="_blank" data-aos="fade-right" data-aos-duration="500" class="fa fa-facebook aos-init aos-animate"></a>
          <a href="#" target="_blank" data-aos="fade-right" data-aos-duration="700" class="fa fa-instagram aos-init aos-animate"></a>
          <a href="#" target="_blank" data-aos="fade-right" data-aos-duration="900" class="fa fa-twitter aos-init aos-animate"></a>
          <a href="#" target="_blank" data-aos="fade-right" data-aos-duration="1100" class="fa fa-linkedin aos-init aos-animate"></a>
        </p>

        <p class="mb-0" style="text-align: center; font-weight: 500; color: #999999;">Copyright © 2023 FINDER All Rights Reserved. <br>Solution by Thiyuni Siyathma Robertson</p>

       </div>

      </div>

  </div>


  <!--=============================================-->
  <!--===================footer====================-->

  <!--=============================================-->
  <!--===================scroll top====================-->

  <button class="scroll-top">
    <div class="arrow up"></div>
  </button>

  <!--=============================================-->
  <!--===================scroll top====================-->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-AZeJwG7AYyT3Fr7_kI2BnV3_y9SbK7s&libraries=places"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->

      <!-- scroll top -->
      <script src="<?php echo base_url('assets/js/drop_down_menu.js'); ?>"></script>
      <!-- scroll top -->

    <!--loading effects-->
    <script src="<?php echo base_url('assets/js/aos.js'); ?>"></script>

    <script>
    AOS.init({
    easing: 'ease-out-back',
            duration: 1000
    });</script>

    <!--loading effects-->

     <!--jarallax js-->  <!--jarallax using for Logo slider-->
    <script src="<?php echo base_url('assets/jarallax/jarallax_js.js'); ?>"></script>
    <!--jarallax js-->

    <!--jarallax-->
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <!--jarallax-->

     <!-- owl carousel -->
    <script src="<?php echo base_url('assets/owl/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/owl/owl_js.js'); ?>"></script>
    <!-- owl carousel -->

<!-----------------------Select location name------------------------->
<script>
    var searchInput ='floatingInput';

    $(document).ready(function (){
        var autocomplete;
        autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)),{
            types: ['geocode', 'establishment'],
        });

        google.maps.event.addListener(autocomplete, 'place_changed',function(){
            var near_place = autocomplete.getPlace();
        });

        // Now you can use 'latitude' and 'longitude' in your code as needed
        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();

            if (place.geometry && place.geometry.location) {
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();

                console.log("Latitude: " + latitude);
                console.log("Longitude: " + longitude);
                // alert(latitude, longitude);
            }
        });
    });
</script>
<!-------------------------Select location name----------------------------------->

<!-------------------select location on map------------------------------------->
<!----------------------------------------------------------------------------------------->
    <script>
        var map, marker;

        function initmodal(){
          
            $("#location-modal").modal();
            
            var location = new google.maps.LatLng(6.821, 80.031);
            //var location = new google.maps.LatLng(0, 0);
            var mapProperty = {
                center: location,
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            // alert("gg");
            map = new google.maps.Map(document.getElementById('map'),mapProperty);
            // alert("jj");
            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: location
            });

            geocodePosition(marker.getPosition());

            google.maps.event.addListener(marker, 'dragend', function(){
                map.setCenter(marker.getPosition());
                geocodePosition(marker.getPosition());
                $("#latitude").val(marker.getPosition().lat());

                $("#longitude").val(marker.getPosition().lng());
            });

            currentLat = $("#latitude").val();
            currentLng = $("#longitude").val();

            if (navigator.geolocation){
                navigator.geolocation.getCurrentPosition(function(position){
                    pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    $("#latitude").val(pos.lat);
                    $("#longitude").val(pos.lng);

                    marker.setPosition(pos);

                    map.setCenter(marker.getPosition());
                    geocodePosition(marker.getPosition());

                });
            }
        }

        function geocodePosition(pos){
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({
              latLng: pos
            },
        
            function (results, status){
                if (status == google.maps.GeocoderStatus.OK){
                    $("#address-label").html(results[0].formatted_address);
                    $("#address").val(results[0].formatted_address);
                }else{
                    $("#address-label").html('can not determine address at this location');
                }
            }
            );
        }
    </script>
<!-------------------select location on map------------------------------------->
<!----------------------------------------------------------------------------------------->

    </body>
</html>