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
                        

                    } else {
                        console.log("Error: " + status);
                    }
                    
                }
            );

            
        }
        

</script>



    </body>
</html>


<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    // function _remap($method, $params = array()) {
    //     $method_exists = method_exists($this, $method);
    //     $methodToCall = $method_exists ? $method : 'index';
    //     $this->$methodToCall($method_exists ? $params : $method);
    // }

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Googlemaps');
        $this->load->model('frontend_model/Home_model');
    }

    public function index() {
        // var_dump("test");exit();
        // $this->load->model('frontend_model/home_model');
        // $this->load->helper('header_helper');
        
        // $data = array();
        
        // $data['content'] = $this->home_model->get_add_content();
        // var_dump($data['content']);exit();
        // $data['images'] = $this->home_model->get_add_content();


        // var_dump($data['content'] );exit();
        //$this->load->model('frontend_model/contact_model');

        //$data["contact_us"] = $this->contact_model->load_contact_details();
        $data['all_data'] = $this->Home_model->getLocationsFromDatabase();
        // var_dump($data['all_data']);exit();
                
		$this->load->view('frontendview/header_view');
		$this->load->view('frontendview/home_view',$data);
		$this->load->view('frontendview/footer_view');		
    }

    public function showDistance() {
        $this->load->model('frontend_model/Home_model');
        $data['all_data'] = $this->Home_model->getLocationsFromDatabase();
        $this->load->view('home_view', $data);
        $this->load->view('add_detail_view', $data);
    }

    public function getLocationsData() {
    // Fetch your locations data (replace this with your actual logic)
        $locationsData = $this->Home_model->getLocationsFromDatabase();
        // echo($locationsData);die();
        
    // Return the data as JSON
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($locationsData));
    }
	 
    public function idfromfooter() {
        // // Retrieve the data sent from the view
        // $inputData = $this->input->post('inputData');
        // echo '<pre>';
        // var_dump($inputData);
        // echo '</pre>';
        // // Process the data or perform any other actions
        // // ...
    
        // // Return a response (e.g., JSON response)
        // $response = array('message' => 'Data received successfully');
        // echo json_encode($response);
        // $('#div_id').remove();
        if ($this->input->is_ajax_request()) {
            $inputData = $this->input->post('inputData');
    
            // Process the inputData and return a response
            $resultArray = array(); // Initialize an empty array to store results

            foreach ($inputData as $id) {
                // Process each $id and obtain related details
                $details = $this->Home_model->getDetailsById($id);
                $image = $this->Home_model->getDetailsImageById($id);

                // Create an array to hold the data for this iteration
                $resultItem = array(
                    'details' => $details,
                    'image' => $image
                );

                // Add the result item to the result array
                $resultArray[] = $resultItem;
            }

            // Return the result array as a JSON response
            echo json_encode($resultArray);

        } else {
            // Handle non-AJAX requests here
            // Redirect or display an error message
        }
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="http://localhost/finder/assets/css/finder.css" rel="stylesheet">
    <link href="http://localhost/finder/assets/css/mediaquery.css" rel="stylesheet">
    <!-- Custom CSS -->

    <title>Finder</title>

    <!--favicon-->
    <link rel="shortcut icon" href="http://localhost/finder/assets/images/favicon.png" />
    <!--favicon-->

    <!-- font awsom --> 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- font awsom --> 

    <!--loading effect-->
    <link rel="stylesheet" href="http://localhost/finder/assets/css/loading_styles.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="http://localhost/finder/assets/css/aos.css" type="text/css" media="screen"/>
    <!--loading effect-->

    <!--jarallax js & css-->
    <link href="http://localhost/finder/assets/jarallax/jarallax_css.css" rel="stylesheet" type="text/css" media="screen">
    <!--jarallax js & css-->

    <!-- owl carousel -->
    <link href="http://localhost/finder/assets/owl/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://localhost/finder/assets/owl/owl_css.css">
    <!-- owl carousel -->
<!------------------------------------------------------------->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-AZeJwG7AYyT3Fr7_kI2BnV3_y9SbK7s&libraries=places"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<!------------------------------------------------------------->    

    <!--scroll bar style-->
    <style>

      ::-webkit-scrollbar {
        background: #eeeeee;
        height: 5px;
        width: 5px;
      }

      ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 2px #002367;
      }

      ::-webkit-scrollbar-thumb {
        background: #002367;
        border-radius: 2px;
      }

      ::-webkit-scrollbar-thumb:hover {
        background: #002367; 
      }
    </style>
    <!--scroll bar style-->


  </head>
  <body>

    <!--=============================================-->
  <!--===================header====================-->

    <!-- header section -->


    <div class="clearfix"></div>

      <div class="container-fluid top_logo_row" style="background-color: #f8f8fa;">

        <div class="container">

          <div class="row">

             <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              
              <div class="d-grid gap-2 d-md-flex justify-content-md-start top_btn_set_div">

                <p class="top_social_icon mb-0">
                  Follow Us on -
                  <a href="http://localhost/finder/" target="_blank" data-aos="fade-right" data-aos-duration="500" class="fa fa-facebook aos-init aos-animate"></a>
                  <a href="http://localhost/finder/" target="_blank" data-aos="fade-right" data-aos-duration="700" class="fa fa-instagram aos-init aos-animate"></a>
                  <a href="http://localhost/finder/" target="_blank" data-aos="fade-right" data-aos-duration="900" class="fa fa-twitter aos-init aos-animate"></a>
                  <a href="http://localhost/finder/" target="_blank" data-aos="fade-right" data-aos-duration="1100" class="fa fa-linkedin aos-init aos-animate"></a>
                </p>

              </div>

            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              
              <div class="d-grid gap-2 d-md-flex justify-content-md-end top_btn_set_div">
                <!--<a href="#"><button type="button" class="btn btn-primary blue_white_btn">සිං</button></a>
                <a href="#"><button type="button" class="btn btn-primary blue_white_btn">தமி</button></a>-->
                <!-- ============== -->
              <!-------Logging session create and logout method call------------------------>
                                  <a href="http://localhost/finder/register"> <button type="button" class="btn btn-primary blue_white_btn">Sign Up</button> </a>
                  <a href="http://localhost/finder/sign-up"> <button type="button" class="btn btn-primary blue_btn">Login</button> </a>
                              </div>

            </div>
          </div>
              

        </div>

      </div>

  <!-- header section -->

<!--=============================================-->
<!--===================header====================-->

<div class="container-fluid header_top_div" style="background-image:url('assets/images/body_bg.jpg') !important;">

  <div class="container">

        <div class="row m-auto">

          <!-- ===================== -->

          <!-- welcome section -->
    <!-- welcome section -->

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

        <div class="col" data-aos="fade-up" style="padding-bottom: 15px; margin-bottom: 15px; border-bottom: 1px solid #f5c481;">
        <a href="http://localhost/finder/"> <img src="http://localhost/finder/assets/images/logo.png" alt="" class="d-block top_logo"> </a>
        </div> <!--when give the / loard the index page-->

        <div class="clearfix"></div>

        <p data-aos="fade-down">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>

        <a href="http://localhost/finder/post-add"><button type="button" class="btn btn-primary magenta_btn mb-3"><img src="http://localhost/finder/assets/images/post.png" alt="" width="30px;"> &nbsp; POST YOUR ADD</button></a>

        <div class="clearfix"></div>

      </div>

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">

        <img src="http://localhost/finder/assets/images/find.png" alt="" class="img-fluid mx-auto d-block">

      </div>

      <!-- welcome section -->


    </div>

  </div>

</div><!--===================body====================-->


<!--------------- search section ------------------->
  <div class="container">
    
    <div class="row m-auto">
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 slider_search_col home_search_col">


        <div class="shadow p-4 mb-1 rounded" style="background-color: #eeeeee;">

          <h2 class="sub_heading"><img src="http://localhost/finder/assets/images/search.png" alt="" width="30px;" data-aos="fade-up"> SEARCH</h2>
          <div class="clearfix"></div>
        <form method="post" id="destinationForm"> 
          <div class="row">
          <!-----------------Location Select------------------------> 
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="search_input" id="search_input"  placeholder="Type Location Name" required>
                <label for="search_input">Type Your Location Name</label>
              </div>
            </div> 

            <!-- Hidden input fields to store latitude and longitude -->
                <input type="hidden" name="user_latitude" id="user_latitude"> 
                <input type="hidden" name="user_longitude" id="user_longitude">
          <!---------------------------------------------------->
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
              <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                  <option selected></option>
                  <option value="1">AC</option>
                  <option value="2">Non AC</option>
                </select>
                <label for="floatingSelectGrid">Room Type</label>
              </div>
            </div>

             <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
              <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                  <option selected></option>
                  <option value="1">One Person</option>
                  <option value="2">Two Person</option>
                  <option value="2">Three Person</option>
                  <option value="2">Four Person</option>
                </select>
                <label for="floatingSelectGrid">Room Category</label>
              </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
              <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                  <option selected></option>
                  <option value="1">Double</option>
                  <option value="2">Single</option>
                </select>
                <label for="floatingSelectGrid">Preferred Bed Type</label>
              </div>
            </div>

            <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
              <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                  <option selected></option>
                  <option value="1">Brackfast</option>
                  <option value="2">Luunch</option>
                  <option value="3">Dinner</option>
                </select>
                <label for="floatingSelectGrid">Meal Type</label>
              </div>
            </div> -->

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
              <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                  <option selected></option>
                  <option value="1">Attached Bathroom</option>
                  <option value="2">Shared Bathroom</option>
                </select>
                <label for="floatingSelectGrid">Type of Bathroom</label>
              </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
              <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                  <option selected></option>
                  <option value="1">Female</option>
                  <option value="2">Male</option>
                </select>
                <label for="floatingSelectGrid">Gender</label>
              </div>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
              <button type="button" class="btn btn-primary green_btn mb-3" style="width: 100%; height: 55px;" onClick="getData();"> SEARCH NOW</button>
              <!-- <a href="#"><button type="button" class="btn btn-primary green_btn mb-3" style="width: 100%; height: 55px;"> SEARCH NOW</button></a> -->
            </div>
         
          </div>
        </form>

         </div>

        <div class="clearfix"></div>
        <br class="d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">

      </div>
    </div>
  </div>

<!-------------------------------------------- search section -------------------------------------->
    </div>

  </div>

</div>


<div class="clearfix"></div>
<br>
<br>
<!-----------------------addvertisement display------------------------------------------------------>
    
<!-- add section -->

<div class="container">

<div class="row">

  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    <h1 class="sub_heading mb-4" data-aos="fade-up">Rent Rooms & Annexes in Sri Lanka</h1>
  </div>

  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-end">
    <p class="fst-italic mb-1">Showing 1 - 8 of 900 ads</p>
  </div>
  
</div>
<!-- <div id="all_details"> -->

    
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                      <img src="http://localhost/finder/add_images/2309271924330h01.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                      </div>

      <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">

        <!-- new badge -->
        <!-- <div class="position-relative">
          <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
            <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
          </div>
        </div> -->
        <!-- new badge -->

        <div class="rounded shadow p-4" style="background-color: #eeeeee;">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3">Test topic</h1>
          <p class="mb-1">Beds: Signle</p>
          <p class="mb-1">Baths: Attached Bathroom</p>
          <p class="mb-1">Test Facility</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs 15000 / Month</h1>
          <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
          <a href="http://localhost/finder/add-detail/14" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png"></a>
        </div> 

      </div>
      <!----------add------------>
    </div>
        
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                      <img src="http://localhost/finder/add_images/2309271622160h08.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                      </div>

      <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">

        <!-- new badge -->
        <!-- <div class="position-relative">
          <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
            <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
          </div>
        </div> -->
        <!-- new badge -->

        <div class="rounded shadow p-4" style="background-color: #eeeeee;">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3">Boarding house- kiribathgoda</h1>
          <p class="mb-1">Beds: Signle</p>
          <p class="mb-1">Baths: Attached Bathroom</p>
          <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs 15000 / Month</h1>
          <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
          <a href="http://localhost/finder/add-detail/11" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png"></a>
        </div> 

      </div>
      <!----------add------------>
    </div>
        
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                      <img src="http://localhost/finder/add_images/2309270354100h06.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                      </div>

      <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">

        <!-- new badge -->
        <!-- <div class="position-relative">
          <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
            <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
          </div>
        </div> -->
        <!-- new badge -->

        <div class="rounded shadow p-4" style="background-color: #eeeeee;">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3">Boarding house for Two girls- Homagama</h1>
          <p class="mb-1">Beds: Signle</p>
          <p class="mb-1">Baths: Attached Bathroom</p>
          <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs 15000 / Month</h1>
          <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
          <a href="http://localhost/finder/add-detail/10" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png"></a>
        </div> 

      </div>
      <!----------add------------>
    </div>
        
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                      <img src="http://localhost/finder/add_images/2309270353080h02.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                      </div>

      <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">

        <!-- new badge -->
        <!-- <div class="position-relative">
          <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
            <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
          </div>
        </div> -->
        <!-- new badge -->

        <div class="rounded shadow p-4" style="background-color: #eeeeee;">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3">Boarding house- Homagama</h1>
          <p class="mb-1">Beds: Signle</p>
          <p class="mb-1">Baths: Attached Bathroom</p>
          <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs 15000 / Month</h1>
          <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
          <a href="http://localhost/finder/add-detail/9" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png"></a>
        </div> 

      </div>
      <!----------add------------>
    </div>
        
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                      <img src="http://localhost/finder/add_images/2309270352120h08.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                      </div>

      <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">

        <!-- new badge -->
        <!-- <div class="position-relative">
          <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
            <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
          </div>
        </div> -->
        <!-- new badge -->

        <div class="rounded shadow p-4" style="background-color: #eeeeee;">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3">Boarding house - Meegoda</h1>
          <p class="mb-1">Beds: Double</p>
          <p class="mb-1">Baths: Attached Bathroom</p>
          <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs 16000 / Month</h1>
          <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
          <a href="http://localhost/finder/add-detail/8" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png"></a>
        </div> 

      </div>
      <!----------add------------>
    </div>
        
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                      <img src="http://localhost/finder/add_images/2309270351200h03.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                      </div>

      <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">

        <!-- new badge -->
        <!-- <div class="position-relative">
          <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
            <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
          </div>
        </div> -->
        <!-- new badge -->

        <div class="rounded shadow p-4" style="background-color: #eeeeee;">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3">Boarding house - Homagama</h1>
          <p class="mb-1">Beds: Signle</p>
          <p class="mb-1">Baths: Attached Bathroom</p>
          <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs 15000 / Month</h1>
          <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
          <a href="http://localhost/finder/add-detail/7" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png"></a>
        </div> 

      </div>
      <!----------add------------>
    </div>
        
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                      <img src="http://localhost/finder/add_images/2309270348430h08.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                      </div>

      <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">

        <!-- new badge -->
        <!-- <div class="position-relative">
          <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
            <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
          </div>
        </div> -->
        <!-- new badge -->

        <div class="rounded shadow p-4" style="background-color: #eeeeee;">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3">Boarding house Kelaniya- six
</h1>
          <p class="mb-1">Beds: Signle</p>
          <p class="mb-1">Baths: Common Bathroom</p>
          <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs 10000 / Month</h1>
          <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
          <a href="http://localhost/finder/add-detail/6" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png"></a>
        </div> 

      </div>
      <!----------add------------>
    </div>
        
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                      <img src="http://localhost/finder/add_images/2309270347400h08.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                      </div>

      <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">

        <!-- new badge -->
        <!-- <div class="position-relative">
          <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
            <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
          </div>
        </div> -->
        <!-- new badge -->

        <div class="rounded shadow p-4" style="background-color: #eeeeee;">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3">Boarding house five - Kelaniya</h1>
          <p class="mb-1">Beds: Signle</p>
          <p class="mb-1">Baths: Attached Bathroom</p>
          <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs 15000 / Month</h1>
          <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
          <a href="http://localhost/finder/add-detail/5" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png"></a>
        </div> 

      </div>
      <!----------add------------>
    </div>
        
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                      <img src="http://localhost/finder/add_images/2309270346130h06.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                      </div>

      <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">

        <!-- new badge -->
        <!-- <div class="position-relative">
          <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
            <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
          </div>
        </div> -->
        <!-- new badge -->

        <div class="rounded shadow p-4" style="background-color: #eeeeee;">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3">Boarding house four -Kelaniya</h1>
          <p class="mb-1">Beds: Signle</p>
          <p class="mb-1">Baths: Attached Bathroom</p>
          <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs 15000 / Month</h1>
          <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
          <a href="http://localhost/finder/add-detail/4" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png"></a>
        </div> 

      </div>
      <!----------add------------>
    </div>
        
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                      <img src="http://localhost/finder/add_images/2309270341220h01.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                      </div>

      <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">

        <!-- new badge -->
        <!-- <div class="position-relative">
          <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
            <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
          </div>
        </div> -->
        <!-- new badge -->

        <div class="rounded shadow p-4" style="background-color: #eeeeee;">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3">Boarding house Three - kelaniya</h1>
          <p class="mb-1">Beds: Signle</p>
          <p class="mb-1">Baths: Attached Bathroom</p>
          <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs 10000 / Month</h1>
          <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
          <a href="http://localhost/finder/add-detail/3" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png"></a>
        </div> 

      </div>
      <!----------add------------>
    </div>
        
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                      <img src="http://localhost/finder/add_images/2309270339550h06.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                      </div>

      <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">

        <!-- new badge -->
        <!-- <div class="position-relative">
          <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
            <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
          </div>
        </div> -->
        <!-- new badge -->

        <div class="rounded shadow p-4" style="background-color: #eeeeee;">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3">Boarding house two- Kelaniya</h1>
          <p class="mb-1">Beds: Signle</p>
          <p class="mb-1">Baths: Attached Bathroom</p>
          <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs 15000 / Month</h1>
          <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
          <a href="http://localhost/finder/add-detail/2" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png"></a>
        </div> 

      </div>
      <!----------add------------>
    </div>
        
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                      <img src="http://localhost/finder/add_images/2309261046420h01.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                      </div>

      <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">

        <!-- new badge -->
        <!-- <div class="position-relative">
          <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
            <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
          </div>
        </div> -->
        <!-- new badge -->

        <div class="rounded shadow p-4" style="background-color: #eeeeee;">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3">Boarding House One -Kelaniya</h1>
          <p class="mb-1">Beds: Signle</p>
          <p class="mb-1">Baths: Attached Bathroom</p>
          <p class="mb-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs 15000 / Month</h1>
          <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
          <a href="http://localhost/finder/add-detail/1" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png"></a>
        </div> 

      </div>
      <!----------add------------>
    </div>
    
<!-- </div> -->
<!-- <div id="result_details"></div> -->
<!-- ========================= -->
<!-- ========================= -->


<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
     
    <!-- pagination -->
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    <!-- pagination -->

   </div>

</div>

<!-- add section -->


<div class="clearfix"></div>
<br>
<br>
<!-----------------------addvertisement display------------------------------------------------------>

<!------------------------banner section------------------------------->
<div class="container">

<div class="row">
  
  <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
    <div class="banner_div shadow rounded" style="background-image:url('assets/images/banner01.jpg') !important;"></div>
  </div>

  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
    <div class="banner_div shadow rounded" style="background-image:url('assets/images/banner02.jpg') !important;"></div>
  </div>

</div>

</div>
<!--------------------banner section---------------------------------->

<div class="clearfix"></div>
<br>
<br>
<div id="distance-container"></div>

<!-- partners section -->


<!-----------------------------Top search slider--------------------->
<!-- <div class="container" data-aos="fade-down">
  <h1 class="heading"  style="text-transform: uppercase; color: #000000; text-align: center;">Most searched</h1>
  <p style="text-align: center;">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
  </p>

  <div class="clearfix"></div>

<div class="slider">
          <div class="owl-carousel">
              <div class="slider-card">
                  <a href="http://localhost/finder/" target="_blank">
                    <div class="p-3 mb-4 bg-body rounded partner_div">
                      <img src="http://localhost/finder/assets/images/h01.jpg" alt="" class="mx-auto d-block rounded mb-3">

                      <div class="rounded shadow p-4" style="background-color: #eeeeee;">
                        <h1 class="sub_heading mb-1" style="font-size: 16px;">Rooms to rent in kurunegala Lake round - Ladies only</h1>
                        <p class="mb-3" style="color: #000000;">Beds: 2, Baths: 1</p>
                        <h1 class="heading mb-1" data-aos="fade-up" style="font-size: 20px;">Rs 15,000.00 / Month</h1>
                        <a href="http://localhost/finder/add-detail" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png" style="display: inherit ;width: 10px !important;"></a>
                      </div> 

                    </div>
                  </a>
              </div>
              <div class="slider-card">
                  <a href="" target="_blank">
                    <div class="p-3 mb-4 bg-body rounded partner_div">
                      <img src="http://localhost/finder/assets/images/h02.jpg" alt="" class="mx-auto d-block rounded">
                      
                      <div class="rounded shadow p-4" style="background-color: #eeeeee;">
                        <h1 class="sub_heading mb-1" style="font-size: 16px;">Rooms to rent in kurunegala Lake round - Ladies only</h1>
                        <p class="mb-3" style="color: #000000;">Beds: 2, Baths: 1</p>
                        <h1 class="heading mb-1" data-aos="fade-up" style="font-size: 20px;">Rs 15,000.00 / Month</h1>
                        <a href="http://localhost/finder/add-detail" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png" style="display: inherit ;width: 10px !important;"></a>
                      </div> 

                    </div>
                  </a>                   
              </div>
              <div class="slider-card">
                  <a href="" target="_blank">
                    <div class="p-3 mb-4 bg-body rounded partner_div">
                      <img src="http://localhost/finder/assets/images/h03.jpg" alt="" class="mx-auto d-block rounded">
                      
                      <div class="rounded shadow p-4" style="background-color: #eeeeee;">
                        <h1 class="sub_heading mb-1" style="font-size: 16px;">Rooms to rent in kurunegala Lake round - Ladies only</h1>
                        <p class="mb-3" style="color: #000000;">Beds: 2, Baths: 1</p>
                        <h1 class="heading mb-1" data-aos="fade-up" style="font-size: 20px;">Rs 15,000.00 / Month</h1>
                        <a href="http://localhost/finder/add-detail" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png" style="display: inherit ;width: 10px !important;"></a>
                      </div> 

                    </div>
                  </a>
              </div>
              <div class="slider-card">
                  <a href="" target="_blank">
                    <div class="p-3 mb-4 bg-body rounded partner_div">
                     <img src="http://localhost/finder/assets/images/h04.jpg" alt="" class="mx-auto d-block rounded">
                      
                     <div class="rounded shadow p-4" style="background-color: #eeeeee;">
                        <h1 class="sub_heading mb-1" style="font-size: 16px;">Rooms to rent in kurunegala Lake round - Ladies only</h1>
                        <p class="mb-3" style="color: #000000;">Beds: 2, Baths: 1</p>
                        <h1 class="heading mb-1" data-aos="fade-up" style="font-size: 20px;">Rs 15,000.00 / Month</h1>
                        <a href="http://localhost/finder/add-detail" class="a_link">Read More <img src="http://localhost/finder/assets/images/arrow.png" style="display: inherit ;width: 10px !important;"></a>
                     </div> 

                    </div>
                  </a>
              </div>
          </div>
      </div>
</div> -->

<!-----------------------------Top search slider--------------------->


<!-- partners section -->

<!--=============================================-->
<!--===================body====================-->

<div class="clearfix"></div>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!--=============================================-->
<!--===================footer====================-->

<div class="container-fluid footer_row text-center">
      
      <div class="container">
        
       <div class="row">
         
       <a href="http://localhost/finder/"> <img src="http://localhost/finder/assets/images/logo.png" alt="" class="d-block top_logo mx-auto mb-3"data-aos="fade-up"> </a>

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
      <script src="http://localhost/finder/assets/js/drop_down_menu.js"></script>
      <!-- scroll top -->

    <!--loading effects-->
    <script src="http://localhost/finder/assets/js/aos.js"></script>

    <script>
    AOS.init({
    easing: 'ease-out-back',
            duration: 1000
    });</script>

    <!--loading effects-->

     <!--jarallax js-->  <!--jarallax using for Logo slider-->
    <script src="http://localhost/finder/assets/jarallax/jarallax_js.js"></script>
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
    <script src="http://localhost/finder/assets/owl/owl.carousel.min.js"></script>
    <script src="http://localhost/finder/assets/owl/owl_js.js"></script>
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
                url: 'http://localhost/finder/Home/getLocationsData', // Adjust the URL to match your route
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
            var base_url = 'http://localhost/finder/';
            $.ajax({
                type: "POST",
                url: "http://localhost/finder/Home/idfromfooter",
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
                        // else{
                        //     propertyarray.push(id);
                        //     filteredData.push({
                        //         id: id,
                        //         di stance: distance,
                        //         locationScore: 0
                        //     });
                        // }
                    } else {
                        console.log("Error: " + status);
                    }
                    
                }
            );

            
        }
        

</script>



    </body>
</html>

//home controller 
// echo "thiyuni";
        // // Retrieve the data sent from the view
        // $inputData = $this->input->post('inputData');
        // echo '<pre>';
        // var_dump($inputData);
        // echo '</pre>';
        // // Process the data or perform any other actions
        // // ...
    
        // // Return a response (e.g., JSON response)
        // $response = array('message' => 'Data received successfully');
        // echo json_encode($response);
        // $('#div_id').remove();


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
                        // else{
                        //     propertyarray.push(id);
                        //     filteredData.push({
                        //         id: id,
                        //         di stance: distance,
                        //         locationScore: 0
                        //     });
                        // }