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
        var filteredData = new Array();
        var propertyarray = new Array();
        var locationScore;
        function getData() {
            //   alert("Thiyuni");
            // Retrieve the user_latitude and user_longitude values
                var destLat = parseFloat(document.getElementById('user_latitude').value);
                var destLon = parseFloat(document.getElementById('user_longitude').value);
                var room_type = document.getElementById('room_type').value;
                var room_category = document.getElementById('room_category').value;
                var bed_type = document.getElementById('bed_type').value;
                var bathroom_type = document.getElementById('bathroom_type').value;
                var gender_type = document.getElementById('gender_type').value;

                if(room_type != '')
                {
                    if (room_type = 'AC') { // distance less than 1km
                        locationScore: 10;
                    }
                    else if (room_type = 'Non-AC') { // distance less than 1km
                        locationScore: 10;
                    }
                    else{
                        locationScore: 0;
                    }
                }

                if(room_category != '')
                {
                    if (room_category = 'One Person') { // distance less than 1km
                        locationScore: 10;
                    }
                    else if (room_category = 'Two Person') { // distance less than 1km
                        locationScore: 10;
                    }
                    else if (room_category = 'Three Person') { // distance less than 1km
                        locationScore: 10;
                    }
                    else if (room_category = 'More than three') { // distance less than 1km
                        locationScore: 10;
                    }
                    else{
                        locationScore: 0;
                    }
                }

                if(bed_type != '')
                {
                    if (bed_type = 'Single') { // distance less than 1km
                        locationScore: 10;
                    }
                    else if (bed_type = 'Double') { // distance less than 1km
                        locationScore: 10;
                    }
                    else if (bed_type = 'Bunk Bed') { // distance less than 1km
                        locationScore: 10;
                    }
                    else{
                        locationScore: 0;
                    }
                }

                if(bathroom_type != '')
                {
                    if (bathroom_type = 'Attached Bathroom') { // distance less than 1km
                        locationScore: 10;
                    }
                    else if (bathroom_type = 'Common Bathroom') { // distance less than 1km
                        locationScore: 10;
                    }
                    else{
                        locationScore: 0;
                    }
                }

                if(gender_type != '')
                {
                    if (gender_type = 'Male') { // distance less than 1km
                        locationScore: 10;
                    }
                    else if (gender_type = 'Female') { // distance less than 1km
                        locationScore: 10;
                    }
                    else{
                        locationScore: 0;
                    }
                }
                //  alert(destLat);
                //  alert(destLon);
                // Make an AJAX request to fetch the locations data
                $(document).ready(function() {
                $.ajax({
                url: '<?= base_url('Home/getLocationsData') ?>', // Adjust the URL to match your route
                type: 'POST',
                data: { 
                    room_type: room_type,
                    room_category: room_category,
                    bed_type: bed_type,
                    bathroom_type: bathroom_type,
                    gender_type: gender_type
                },
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

        getLocationData();   

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

                        var distanceValue = parseFloat(distance.replace(' km', ''));
                        
                        if (distanceValue < 1) { // distance less than 1km
                            locationScore: 50;
                        }
                        else if (distanceValue < 2) { // distance less than 2km
                            locationScore: 40;
                        }
                        else if (distanceValue < 3) { // distance less than 3km
                            locationScore: 30;
                        }
                        else if (distanceValue < 4) { // distance less than 4km
                            locationScore: 20;
                        }
                        else if (distanceValue < 5) { // distance less than 5km
                            locationScore: 10;
                        }
                        else{
                            locationScore: 0;
                        }



                        // console.log("Distance for " + topic + ": " + distance);
                        // console.log("Property ID: " + id);
                        // propertyarray.push(distance);
                        

                        if (distanceValue < 5) { // distance less than 5km
                            // console.log(distance);
                            // propertyarray.push(id);
                            propertyarray.push({
                                id: id,
                                distance: distance
                            });
                        }
                        
                        
                    } else {
                        console.log("Error: " + status);
                    }
                    
                }
            );

            
        }

        function getLocationData(){
            console.log(propertyarray);
            var base_url = '<?php echo base_url(); ?>';
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Home/idfromfooter'); ?>",
                data: { 
                    inputData: propertyarray
                 },
                dataType: 'json',
                success: function(response) {
                    
                    // console.log("response : " + response);
                    $('#all_details').remove();
                    var allDetailsContainer = $('#result_details');

                    console.log(response); // This will log the entire array of objects
        
                    // Loop through the array and access properties of each object
                    // for (var i = 0; i < response.length; i++) {
                    //     var resultItem = response[i];
                        
                    // var htmlContent = '';
                        

                    //     // Now you can work with 'details' and 'image' as needed
                    //     console.log("Details: ", details);
                    //     console.log("Image: ", image);
                        
                    //     // Example: Append the details to a container element
                    //     // var detailsContainer = $("#details-container");
                    //     // detailsContainer.append("<p>" + details + "</p>");
                    // }

                    // Loop through the response array and append HTML for each result
                    // Initialize an empty variable to accumulate HTML content
                    var htmlContent = '';

                    for (var i = 0; i < response.length; i++) {
                        var resultItem = response[i];
                        var details = resultItem.details;
                        var image = resultItem.image;
                        var distance = resultItem.distance;

                        console.log("Details id: ", details.id);
                        console.log("Image: ", image);

                        // Check if resultItem.image is defined
                        var imageUrl = image ? base_url + 'add_images/' + image.fImage : '';

                        // Concatenate the HTML content for this result to the accumulator variable
                        htmlContent += '<div class="row">' +
                            '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">' +
                            '<img src="' + imageUrl + '" alt="" class="d-block mx-auto w-100 rounded" >' +
                            '</div>' +
                            '<div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">' +
                            '<div class="rounded shadow p-4" style="background-color: #eeeeee;">' +
                            '<h1 class="sub_heading mb-3">' + details.vTopic + '</h1>' +
                            '<p class="mb-1">Distance: ' + distance + '</p>' +
                            '<p class="mb-1">Beds: ' + details.vBedType + '</p>' +
                            '<p class="mb-1">Baths: ' + details.vBathroom + '</p>' +
                            '<p class="mb-1">' + details.vFacility + '</p>' +
                            '<h1 class="heading mb-1" data-aos="fade-up">Rs ' + details.vPayment + ' / Month</h1>' +
                            '<a href="' + base_url + 'add-detail/' + details.id + '" class="a_link">Read More <img src="' + base_url + 'assets/images/arrow.png"></a>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }

                    // After the loop, append the accumulated HTML content to the container
                    allDetailsContainer.html(htmlContent);

                },
                error: function(xhr, status, error) {
                        console.error("Error: " + error);
                    }
                });
        }
        

</script>



    </body>
</html>