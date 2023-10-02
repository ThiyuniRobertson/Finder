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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

  
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
                var latitude = place.geometry.location.lat(); //user selected place lat
                var longitude = place.geometry.location.lng(); //user selected place lng

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

<!-- calculate the distance -->

<!-------- JavaScript to initialize Google Maps autocomplete and update hidden inputs -->
<script>
      var searchInput = document.getElementById('search_input');
      var selectedLatitudeInput = document.getElementById('user_latitude');
      var selectedLongitudeInput = document.getElementById('user_longitude');
        
      var autocomplete = new google.maps.places.Autocomplete(searchInput, {
        types: ['geocode', 'establishment']
      });

      autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();
        if (place.geometry && place.geometry.location) {
          selectedLatitudeInput.value = place.geometry.location.lat();
          selectedLongitudeInput.value = place.geometry.location.lng();
        }
      });
    </script>
<!-- ----------------------------------------------------------------------------------->
<!-------- JavaScript to calculate distance-------------------------------------------->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<script>
        var propertyarray = new Array();
        var filteredData = new Array();
        function getData() {
        //   alert("Thiyuni");
            // Retrieve the user_latitude and user_longitude values
                var destLat = parseFloat(document.getElementById('user_latitude').value);
                var destLon = parseFloat(document.getElementById('user_longitude').value);
            //  alert(destLat);
            //  alert(destLon);
                // Make an AJAX request to fetch the locations data
                $(document).ready(function() {
                $.ajax({
                url: '<?= base_url('Home/getLocationsData') ?>', // Adjust the URL to match your route
                type: 'GET',
                success: function(response) {
                    // Iterate through the locations data and calculate distance
                    response.forEach(function(location) {
                        // alert("Thiyuni");
                        var roomType = location.vRtype;
                        var roomCategory = location.vRcategory;
                        var bedType = location.vBedType;
                        var gender = location.vGender;
                        var bathroom = location.vBathroom;

                        var originLat = location.dLatitude;
                        var originLon = location.dLongitude;
                        var topic = location.vTopic;
                        var id = location.id;

                    // Call a function to calculate distance using retrieved data
                        calculateDistanceWithGoogleMapsAPI(originLat, originLon, destLat, destLon, topic, id);
                    });
                },
                error: function(xhr, status, error) {
                    console.log('Error fetching locations data:', error);
                }
            });
        });

            console.log(propertyarray);
            var base_url = '<?php echo base_url(); ?>';
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Home/idfromfooter'); ?>",
                data: { inputData: propertyarray },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    //$('#all_details').remove();
                    //var allDetailsContainer = $('#result_details');

                    // Loop through the response array and append HTML for each result
                    // for (var i = 0; i < response.length; i++) {
                    //     var resultItem = response[i];

                    //     // Check if resultItem.image is defined
                    //     var imageUrl = resultItem.image ? base_url + 'add_images/' + resultItem.image.fImage : '';

                    //     // Create a div element to hold the result content
                    //     // var resultDiv = $('<div class="result-item"></div>');

                    //     // Create and append your HTML content for this result
                    //     var htmlContent = '<div class="row">' +
                    //         '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">' +
                    //         '<img src="' + imageUrl + '" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">' +
                    //         '</div>' +
                    //         '<div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">' +
                    //         '<div class="rounded shadow p-4" style="background-color: #eeeeee;">' +
                    //         '<h1 class="sub_heading mb-3">' + resultItem.details.vTopic + '</h1>' +
                    //         '<p class="mb-1">Beds: ' + resultItem.details.vBedType + '</p>' +
                    //         '<p class="mb-1">Baths: ' + resultItem.details.vBathroom + '</p>' +
                    //         '<p class="mb-1">' + resultItem.details.vFacility + '</p>' +
                    //         '<h1 class="heading mb-1" data-aos="fade-up">Rs ' + resultItem.details.vPayment + ' / Month</h1>' +
                    //         '<a href="' + base_url + 'add-detail/' + resultItem.details.id + '" class="a_link">Read More <img src="' + base_url + 'assets/images/arrow.png"></a>' +
                    //         '</div>' +
                    //         '</div>' +
                    //         '</div>';

                    //         allDetailsContainer.html(response);
                    // }
                    
                },
                error: function(xhr, status, error) {
                        console.error("Error: " + error);
                    }
                });

        }

        function calculateDistanceWithGoogleMapsAPI(originLat, originLon, destLat, destLon, topic, id) {
            var origin = new google.maps.LatLng(originLat, originLon);
            var destination = new google.maps.LatLng(destLat, destLon);
            
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: 'DRIVING',
                    unitSystem: google.maps.UnitSystem.METRIC
                },
                function(response, status) {
                    if (status === 'OK') {
                        var distance = response.rows[0].elements[0].distance.text;
                        // console.log("Distance for " + topic + ": " + distance);
                        // console.log("Property ID: " + id);
                        // propertyarray.push(distance);
                        var distanceValue = parseFloat(distance.replace(' km', ''));
                        if (distanceValue < 5) { // Assuming 5000 meters is 5km
                            // console.log(distance);
                            propertyarray.push(id);
                            filteredData.push({
                                id: id,
                                distance: distance
                            });
                        }
                        
                        // propertyarray.push();
                        // console.log(propertyarray);
                        //distance eka 5km walin adu tika id eka aragena eka pass karala e id walata related details tika show karanwa
                        // $('#distance-container').append('<p>Distance '+ topic +' : ' + distance + '</p>'); //'+topic+' --> topic var concatinate with text
                       
                        // var locationScore;
                        // if (distanceValue =< 1) { // Assuming 5000 meters is 5km
                        //     propertyarray.push(id);
                        //     filteredData.push({
                        //         id: id,
                        //         di stance: distance,
                        //         locationScore: 50
                        //     });
                        // }
                        // else if (distanceValue =< 2) { // Assuming 5000 meters is 5km
                        //     propertyarray.push(id);
                        //     filteredData.push({
                        //         id: id,
                        //         di stance: distance,
                        //         locationScore: 40
                        //     });
                        // }
                        // else if (distanceValue =< 3) { // Assuming 5000 meters is 5km
                        //     propertyarray.push(id);
                        //     filteredData.push({
                        //         id: id,
                        //         di stance: distance,
                        //         locationScore: 30
                        //     });
                        // }
                        // else if (distanceValue =< 4) { // Assuming 5000 meters is 5km
                        //     propertyarray.push(id);
                        //     filteredData.push({
                        //         id: id,
                        //         di stance: distance,
                        //         locationScore: 20
                        //     });
                        // }
                        // else if (distanceValue =< 5) { // Assuming 5000 meters is 5km
                        //     propertyarray.push(id);
                        //     filteredData.push({
                        //         id: id,
                        //         di stance: distance,
                        //         locationScore: 10
                        //     });
                        // }
                        else{
                            propertyarray.push(id);
                            filteredData.push({
                                id: id,
                                di stance: distance,
                                locationScore: 0
                            });
                        }
                    } else {
                        console.log("Error: " + status);
                    }
                    
                }
            );

            
        }
        

</script>



    </body>
</html>