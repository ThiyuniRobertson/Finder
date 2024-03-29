  <!--=============================================-->
  <!--===================body====================-->
 
<!-------------------------add detailed page------------------------->
    <div class="container">

    
      <div class="row">

        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
          <!-- <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p> -->
          <h1 class="sub_heading mb-3"><?php echo $add_detail->vTopic; ?></h1>

          <!-- slider -->
          <div class="carousel-inner">
            
              <?php 
              // var_dump($add_images);exit();
                $count = 0;
                foreach ($add_images as $image){ ?>
                <div class="carousel-item <?php if($count === 0){ echo 'active';} ?>">
                  <img src="<?php echo base_url('add_images/') . $image->fImage; ?>" class="d-block w-100" alt="...">
                </div>
                <?php $count++; } ?>
              <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button> -->
            </div>
            <div id="carouselExampleIndicators" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <?php 
              // var_dump($add_images);exit();
                $i = 0;
                foreach ($add_images as $image){ ?>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>" aria-current="<?php if($i == 0){ echo 'true'; } ?>" aria-label="Slide <?php echo $i+1; ?>">
                      <?php foreach ($add_images as $image) { ?>
                          <img src="<?php echo base_url('add_images/') . $image->fImage; ?>" class="d-block w-100">
                      <?php } ?>
                  </button>
                <?php $i++; } ?>
              <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"><img src="assets/images/h02.jpg" class="d-block w-100"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"><img src="assets/images/h03.jpg" class="d-block w-100"></button> -->
            </div>
          </div>
          <!-- slider -->
        
          <p class="mb-4">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>

          <div class="row">
            
            <h1 class="sub_heading mb-4" data-aos="fade-up">Feedbacks</h1>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-floating mb-3" data-aos="fade-up">
                    <textarea class="form-control" placeholder="Leave a comment here" name="tMessage" id="tMessage" style="height: 100px;" onkeyup="checkemptyMessage()"></textarea>
                    <label for="floatingTextarea">Your Message</label>
                </div>
            </div>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-up">
              <button type="button" class="btn btn-primary green_btn mb-3" style="height: 55px;">SEND NOW</button>
            </div>

          </div>

        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
          
          <div class="row">
            
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
              <p class="mb-0"><b>Call</b></p>
              <a href="tel:077 8 659 659" style="color: #000000;"><p class="sub_heading mb-2">077 8 659 659</p></a>
            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
              <p class="mb-0"><b>Chat</b></p>
              <a href="tel:077 8 659 659"><img src="<?php echo base_url('assets/images/chat.png'); ?>" alt="" width="40px;"></a>
            </div>

            <p class="mb-1">Beds:<?php echo $add_detail->vBedType;?></p>
            <p class="mb-1">Baths:<?php echo $add_detail->vBathroom;?></p>

            <p class="mb-3"><?php echo $add_detail->vFacility	;?></p>

            <hr>

            <h1 class="heading mb-3" data-aos="fade-up">Rs <?php echo $add_detail->vPayment;?> / Month</h1>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-up">
              <button type="button" class="btn btn-primary magenta_btn mb-3 w-100" style="height: 55px; text-transform: uppercase;"> <img src="<?php echo base_url('assets/images/fav.png'); ?> " width="30px;"> &nbsp; Add to favorite</button>
            </div>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-up">
              <button type="button" class="btn btn-primary magenta_btn mb-3 w-100"  data-bs-toggle="modal" data-bs-target="#exampleModal" style="height: 55px; text-transform: uppercase;"> <img src="<?php echo base_url('assets/images/booking.png'); ?>" width="30px;"> &nbsp; Book Now</button>
            </div>

            <div class="clearfix"></div>
            <br>
                      </div>
             <h1 class="sub_heading mb-4" data-aos="fade-up">Location</h1>

             <!-- map -->
             <div id="googleMap">
             <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31691.028884033945!2d79.98561835659727!3d6.845134121702999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2518e99e2ee8d%3A0xc3eebfdbc86273ee!2sHomagama!5e0!3m2!1sen!2slk!4v1684512367627!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
             <!-- map -->
            
<!--------------------Location detail--------------------------------------------->
              <div class="clearfix"></div>
             <br>
             
             <h1 class="sub_heading mb-4" data-aos="fade-up">Location Details</h1>

              <div class="row">

                  <!-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <p class="p-0"><b>From: </b></p>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <p class="p-0">Nugegoda, Sri Lanka.</p>
                  </div>

                <div class="clearfix"></div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <p class="p-0"><b>To: </b></p>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <p class="p-0">Homagama, Sri Lanka.</p>
                  </div> -->

                <div class="clearfix"></div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <p class="p-0"><b>Driving distance: </b></p>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <p class="p-0"><div id="distance-container"></div></p>
                  </div>

                <!-- <div class="clearfix"></div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <p class="p-0"><b>Duration: </b></p>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <p class="p-0">31 mins.</p>
                  </div> -->

                <div class="clearfix"></div>

              </div>
<!--------------------Location detail------------------------------------->
                
                <!-- ========================= -->
                <!-- ========================= -->

          </div>
        </div>

<!-- --------------------add section--------------------------------------->
   <div class="clearfix"></div>
    <br>
    <br>

<!------------------booking Modal---------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title heading" id="exampleModalLabel">BOOK NOW</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row">
          <form method="post"  id="book_now_form">
            
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First name">
                <label for="floatingInput">First Name*</label>
              </div>
            </div>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name">
                <label for="floatingInput">Last Name*</label>
              </div>
            </div>
            <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email*</label>
              </div>
            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="10 Digit Mobile No">
                <label for="floatingInput">Contact Number*</label>
              </div>
            </div>  
            </div>
            <div class="clearfix"></div>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-floating mb-3" data-aos="fade-up">
                    <textarea class="form-control" placeholder="Leave a comment here" name="tMessage" id="tMessage" style="height: 100px;" onkeyup="checkemptyMessage()"></textarea>
                    <label for="floatingTextarea">Your Message</label>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <button type="submit" id="butregister" name="butregister" class="btn btn-primary green_btn" style="width: 100%; font-weight: 900; height: 55px;"><span class="align-middle">BOOK NOW</span></button>
              <!-- Add_detail controller have function -->
            </div>
            </form>
            </div>
          </div>
    </div>
  </div>
</div>
<!------------------------booking Modal--------------------------------->

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Your booking has been submitted successfully.</p>
            </div>
        </div>
    </div>
</div>
    <div class="clearfix"></div>
    <br>
    <br>

    </div>

    <!---------------------More add---------------------------------------->
    <div class="container">

      <div class="row">

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <h1 class="heading mb-4" data-aos="fade-up">More advertiesments</h1>
        </div>
        
      </div>
      
      <?php if(!empty($all_data)) {foreach($all_data as $item) { ?>
    
    <div class="row">
    
      <!-- add -->
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
      <?php $images = get_images($item->id);
        // Check if $images is not empty and is an array
        if (!empty($images) && is_array($images)) {
            foreach ($images as $image) {
                ?>
                <img src="<?php echo base_url('add_images/') . $image->fImage; ?>" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
                <?php
            }
        }
        ?>
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
          <p class="mb-1">Beds: <?php echo $item->vBedType;?></p>
          <p class="mb-1">Baths: <?php echo $item->vBathroom;?></p>
          <p class="mb-1"><?php echo $item->vFacility;?></p>
          <h1 class="heading mb-1" data-aos="fade-up">Rs <?php echo $item->vPayment;?> / Month</h1>
          <a href="<?php echo base_url('add-detail/'.$item->id); ?>" class="a_link">Read More <img src="<?php echo base_url('assets/images/arrow.png'); ?>"></a>
        </div> 

      </div>
  <!----------add------------>
    </div>
    <?php }} ?>
        <!-- add -->

        <!--------------========================= -->
  <!--------------========================= -->

      <!-- <div class="row"> -->
        
        <!-- add -->
         <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
           <img src="assets/images/h02.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
         </div>

         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5">
           <div class="rounded shadow p-4" style="background-color: #eeeeee;">
             
            <p class="fst-italic mb-1">Posted on 19 Feb, Kurunegala City, Kurunegala</p>
            <h1 class="sub_heading mb-3">Rooms to rent in kurunegala Lake round - Ladies only</h1>
            <p class="mb-1">Beds: 2, Baths: 1</p>
            <p class="mb-1">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s..
            </p>
            <h1 class="heading mb-1" data-aos="fade-up">Rs 15,000.00 / Month</h1>
            <a href="<?php echo base_url('add-detail'); ?>" class="a_link">Read More <img src="assets/images/arrow.png"></a>
           </div> 
         </div> -->
        <!-- add -->

      <!-- </div> -->

      <!-- ========================= -->
      <!-- ========================= -->

      <!-- <div class="row"> -->
        
        <!-- add -->
         <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
           <img src="assets/images/h03.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
         </div>

         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5"> -->

          <!-- new badge -->
          <!-- <div class="position-relative">
            <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
              <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
            </div>
          </div> -->
          <!-- new badge -->

           <!-- <div class="rounded shadow p-4" style="background-color: #eeeeee;">
            <p class="fst-italic mb-1">Posted on 20 July, Homagama City, Homagama</p>
            <h1 class="sub_heading mb-3">Rooms to rent in kurunegala Lake round - Ladies only</h1>
            <p class="mb-1">Beds: 2, Baths: 1</p>
            <p class="mb-1">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s..
            </p>
            <h1 class="heading mb-1" data-aos="fade-up">Rs 15,000.00 / Month</h1>
            <a href="<?php echo base_url('add-detail'); ?>" class="a_link">Read More <img src="assets/images/arrow.png"></a>
           </div> 

         </div> -->
        <!-- add -->

      <!-- </div> -->

      <!-- ========================= -->
      <!-- ========================= -->

       <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center" data-aos="fade-up">
       <a href="<?php echo base_url('/'); ?>" >
        <button type="button" class="btn btn-primary green_btn mb-3" style="height: 55px;">VIEW ALL</button></a>
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

    <!--=============================================-->
  <!--===================body====================-->
  
  <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/popper.min.js'); ?>" ></script> 
      <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" ></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-AZeJwG7AYyT3Fr7_kI2BnV3_y9SbK7s&libraries=places"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

      <script>
            //javascript.js
            //set map options
            var myLatLng = { lat:6.976, lng:79.919};
            var destination = {lat: 6.975, lng:80.031}
            var mapOptions = {
                center: myLatLng,
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            //create map
            var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

            //create a DirectionsService object to use the route method and get a result for our request
            var directionsService = new google.maps.DirectionsService();

            //create a DirectionsRenderer object which we will use to display the route
            var directionsDisplay = new google.maps.DirectionsRenderer();

            //bind the DirectionsRenderer to the map
            directionsDisplay.setMap(map);


            //define calcRoute function
            function calcRoute() {
                //create request
                var request = {
                    origin: myLatLng.value,
                    destination: destination.value,
                    travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
                    unitSystem: google.maps.UnitSystem.METRIC //mETRIC = km & IMPIRIAL = miles
                }

            //pass the request to the route method
            directionsService.route(request, function (result, status) {
                if (status == google.maps.DirectionsStatus.OK) {

                    //Get distance and time
                    const output = document.querySelector('#output');
                    output.innerHTML = "<div class='alert-info'>From: " + myLatLng.value + ".<br />To: " + destination.value + 
                    ".<br /> Driving distance <i class='fas fa-road'></i> : " + result.routes[0].legs[0].distance.text + ".<br />Duration <i class='fas fa-hourglass-start'></i> : " + 
                    result.routes[0].legs[0].duration.text + ".</div>";

                    //display route
                    directionsDisplay.setDirections(result);
                } else {
                    //delete route from map
                    directionsDisplay.setDirections({ routes: [] });
                    //center map in London
                    map.setCenter(myLatLng);

                    //show error message
                    output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> Could not retrieve driving distance.</div>";
                }
            });

        }

        $(document).ready(function() {
          // Listen for the form submission event
          $('#book_now_form').submit(function(event) {
              event.preventDefault(); // Prevent the default form submission

              // Serialize the form data
              var formData = $(this).serialize();

              $.ajax({
                  type: 'POST',
                  url: '<?= base_url('Add_detail/submitForm') ?>', // Adjust the URL to match your route
                  data: formData,
                  dataType: 'json', // Expect JSON response from the server
                  success: function(response) {
                      // Check if the response contains an "email" property (indicating success)
                      $('#exampleModal').modal('hide');
                      $('#successModal').modal('show');
                  },
                  error: function(xhr, status, error) {
                      // Handle AJAX errors here
                      alert('AJAX Error: ' + error);
                  }
              });
          });
      });
           
    </script>