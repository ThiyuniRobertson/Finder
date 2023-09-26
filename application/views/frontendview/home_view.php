<!--===================body====================-->


<!--------------- search section ------------------->
  <div class="container">
    
    <div class="row m-auto">
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 slider_search_col home_search_col">


        <div class="shadow p-4 mb-1 rounded" style="background-color: #eeeeee;">

          <h2 class="sub_heading"><img src="<?php echo base_url('assets/images/search.png'); ?>" alt="" width="30px;" data-aos="fade-up"> SEARCH</h2>
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

<?php if(!empty($content)) {foreach($content as $item) { ?>
    <div class="row">
      
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
        
      <?php $images = get_images($item->id);
      $count = 0;
      ?>
        <img src="<?php echo base_url('assets/images/h01.jpg'); ?>" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">

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
          <h1 class="sub_heading mb-3"><?php echo $item->vTopic; ?></h1>
          <p class="mb-1">Beds:<?php echo $item->vBedType;?></p>
          <p class="mb-1">Baths: <?php echo $item->vBathroom;?></p>
          <p class="mb-1">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s..
          <</p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs <?php echo $item->vPayment;?> / Month</h1>
          <a href="<?php echo base_url('add-detail'); ?>" class="a_link">Read More <img src="<?php echo base_url('assets/images/arrow.png'); ?>"></a>
        </div> 

      </div>
      <!-- add -->

    </div>
<?php }} ?>
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

<!-- banner section -->
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
<!-- banner section -->

<div class="clearfix"></div>
<br>
<br>
<div id="distance-container"></div>

<!-- partners section -->


<!-- logo slider  -->
<div class="container" data-aos="fade-down">
  <h1 class="heading"  style="text-transform: uppercase; color: #000000; text-align: center;">Most searched</h1>
  <p style="text-align: center;">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
  </p>

  <div class="clearfix"></div>

<div class="slider">
          <div class="owl-carousel">
              <div class="slider-card">
                  <a href="<?php echo base_url('/'); ?>" target="_blank">
                    <div class="p-3 mb-4 bg-body rounded partner_div">
                      <img src="<?php echo base_url('assets/images/h01.jpg'); ?>" alt="" class="mx-auto d-block rounded mb-3">

                      <div class="rounded shadow p-4" style="background-color: #eeeeee;">
                        <h1 class="sub_heading mb-1" style="font-size: 16px;">Rooms to rent in kurunegala Lake round - Ladies only</h1>
                        <p class="mb-3" style="color: #000000;">Beds: 2, Baths: 1</p>
                        <h1 class="heading mb-1" data-aos="fade-up" style="font-size: 20px;">Rs 15,000.00 / Month</h1>
                        <a href="<?php echo base_url('add-detail'); ?>" class="a_link">Read More <img src="<?php echo base_url('assets/images/arrow.png'); ?>" style="display: inherit ;width: 10px !important;"></a>
                      </div> 

                    </div>
                  </a>
              </div>
              <div class="slider-card">
                  <a href="" target="_blank">
                    <div class="p-3 mb-4 bg-body rounded partner_div">
                      <img src="<?php echo base_url('assets/images/h02.jpg'); ?>" alt="" class="mx-auto d-block rounded">
                      
                      <div class="rounded shadow p-4" style="background-color: #eeeeee;">
                        <h1 class="sub_heading mb-1" style="font-size: 16px;">Rooms to rent in kurunegala Lake round - Ladies only</h1>
                        <p class="mb-3" style="color: #000000;">Beds: 2, Baths: 1</p>
                        <h1 class="heading mb-1" data-aos="fade-up" style="font-size: 20px;">Rs 15,000.00 / Month</h1>
                        <a href="<?php echo base_url('add-detail'); ?>" class="a_link">Read More <img src="<?php echo base_url('assets/images/arrow.png'); ?>" style="display: inherit ;width: 10px !important;"></a>
                      </div> 

                    </div>
                  </a>                   
              </div>
              <div class="slider-card">
                  <a href="" target="_blank">
                    <div class="p-3 mb-4 bg-body rounded partner_div">
                      <img src="<?php echo base_url('assets/images/h03.jpg'); ?>" alt="" class="mx-auto d-block rounded">
                      
                      <div class="rounded shadow p-4" style="background-color: #eeeeee;">
                        <h1 class="sub_heading mb-1" style="font-size: 16px;">Rooms to rent in kurunegala Lake round - Ladies only</h1>
                        <p class="mb-3" style="color: #000000;">Beds: 2, Baths: 1</p>
                        <h1 class="heading mb-1" data-aos="fade-up" style="font-size: 20px;">Rs 15,000.00 / Month</h1>
                        <a href="<?php echo base_url('add-detail'); ?>" class="a_link">Read More <img src="<?php echo base_url('assets/images/arrow.png'); ?>" style="display: inherit ;width: 10px !important;"></a>
                      </div> 

                    </div>
                  </a>
              </div>
              <div class="slider-card">
                  <a href="" target="_blank">
                    <div class="p-3 mb-4 bg-body rounded partner_div">
                     <img src="<?php echo base_url('assets/images/h04.jpg'); ?>" alt="" class="mx-auto d-block rounded">
                      
                     <div class="rounded shadow p-4" style="background-color: #eeeeee;">
                        <h1 class="sub_heading mb-1" style="font-size: 16px;">Rooms to rent in kurunegala Lake round - Ladies only</h1>
                        <p class="mb-3" style="color: #000000;">Beds: 2, Baths: 1</p>
                        <h1 class="heading mb-1" data-aos="fade-up" style="font-size: 20px;">Rs 15,000.00 / Month</h1>
                        <a href="<?php echo base_url('add-detail'); ?>" class="a_link">Read More <img src="<?php echo base_url('assets/images/arrow.png'); ?>" style="display: inherit ;width: 10px !important;"></a>
                     </div> 

                    </div>
                  </a>
              </div>
          </div>
      </div>
</div>

<!-- logo slider -->


<!-- partners section -->

<!--=============================================-->
<!--===================body====================-->

<div class="clearfix"></div>
<br>

<!--=============================================-->

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
<script>
        function getData() {
          // alert("Thiyuni");

        // Retrieve the user_latitude and user_longitude values
            var destLat = parseFloat(document.getElementById('user_latitude').value);
            var destLon = parseFloat(document.getElementById('user_longitude').value);
            alert(destLat);
            alert(destLon);
            // Make an AJAX request to fetch the locations data
            $.ajax({
            url: '<?= base_url('Home/getLocationsData') ?>', // Adjust the URL to match your route
            type: 'GET',
            success: function(response) {
                // Iterate through the locations data and calculate distance
                response.forEach(function(location) {
                    var originLat = location.dLatitude;
                    var originLon = location.dLongitude;
                    var topic = location.vTopic;

                // Call a function to calculate distance using retrieved data
                    calculateDistanceWithGoogleMapsAPI(originLat, originLon, destLat, destLon, topic);
                });
            },
            error: function(xhr, status, error) {
                console.log('Error fetching locations data:', error);
            }
        });
    }

        function calculateDistanceWithGoogleMapsAPI(originLat, originLon, destLat, destLon, topic) {
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
                        $('#distance-container').append('<p>Distance '+ topic +' : ' + distance + '</p>'); //'+topic+' --> topic var concatinate with text
                    } else {
                        console.log("Error: " + status);
                    }
                }
            );
}

    </script>