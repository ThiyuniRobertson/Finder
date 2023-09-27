<div class="clearfix"></div>
    <br>
    <br>
  
    <!-- add section -->

    <div class="container">

      <div class="row">

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <img src="assets/images/post_add.png" alt="" class="d-block mx-auto w-100">
        </div>

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="shadow rounded p-4">
            
            <div class="row">
              
                <h1 class="heading mb-4" data-aos="fade-up">Post your advertisement</h1>
<!--=======================================================-->
<!--------Post your Add Form-------------------------------------------------->
    <form class="row" name="post_add" id="post_add" action="<?php echo base_url('Post_add/save_inquiry'); ?>" method="post" enctype="multipart/form-data">

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">              
        <div class="form-floating mb-3" data-aos="fade-up">
        <select class="form-select" id="rtype" name="rtype" aria-label="Floating label select example">
          <option selected> </option>
          <option value="Non-AC">Non-AC</option>
          <option value="AC">AC</option>
          </select>
            <label for="floatingSelectGrid">Room Type</label>
        </div>
      </div>

<!--<div class="clearfix"></div>-->
                  
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-floating mb-3" data-aos="fade-up">
          <select class="form-select" id="rcategory" name="rcategory" aria-label="Floating label select example">
            <option selected> </option>
            <option value="One Person">One Person</option>
            <option value="Two Person">Two Person</option>
            <option value="Three Person">Three Person</option>
            <option value="More than three">More than three</option>
          </select>
            <label for="floatingSelectGrid">Room Category</label>
        </div>
      </div>

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-floating mb-3" data-aos="fade-up">
          <select class="form-select" id="bedtype" name="bedtype" aria-label="Floating label select example">
          <option selected> </option>
          <option value="Signle">Signle</option>
          <option value="Double">Double</option>
          <option value="Bunk Bed">Bunk Bed</option>
          </select>
          <label for="floatingSelectGrid">Provide Bed Type</label>          
        </div>
      </div>

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-floating mb-3" data-aos="fade-up">
          <select class="form-select" id="gender" name="gender" aria-label="Floating label select example">
          <option selected> </option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          </select>
            <label for="floatingSelectGrid">Gender Type</label>
        </div>
      </div>

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-floating mb-3" data-aos="fade-up">
          <select class="form-select" id="bathroom" name="bathroom" aria-label="Floating label select example">
            <option selected> </option>
             <option value="Attached Bathroom">Attached Bathroom</option>
            <option value="Common Bathroom">Common Bathroom</option>
            </select>
            <label for="floatingSelectGrid">Bathroom Type</label>
         </div>
      </div>

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-floating mb-3" data-aos="fade-up">
          <!-- <input type="text" class="form-control" id="location" name="location" placeholder="Enter a location"/> -->
          <a  class="form-control" onclick="initmodal()"><i class="fa fa-map-marker mr-12"></i>Choose Location</a>
          <!-- <label for="floatingInput" >Location</label>  -->
        </div>
      </div>

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-floating mb-3" data-aos="fade-up">
          <input type="text" class="form-control" id="latitude" name="latitude" />
           <!-- <label for="floatingInput" class="form-control-label col-sm-2">Latitude</label> -->
        </div>
      </div>

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-floating mb-3" data-aos="fade-up">
          <input type="text" class="form-control" id="longitude" name="longitude"/>
          <!-- <label for="floatingInput">Longitude</label> -->
        </div>
      </div>

      <!-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-floating mb-3" data-aos="fade-up">
          <input type="text" class="form-control" id="location" name="location" placeholder="Enter a location">
          <label for="floatingInput">Your Location</label>
        </div> 
      </div>-->

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="form-floating mb-3" data-aos="fade-up">
          <input type="text" class="form-control" id="payment" name="payment">
           <label for="floatingInput">Monthly Payment</label>
        </div>
      </div>


      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="mb-3" style="position: relative; top: -6px;" data-aos="fade-up">
          <label><small>Upload Images</small></label>
          <input type="file" name="fimage[]" id="fimage" value="front_img" onkeyup="checkemptyFile()" multiple> 
         </div>
      </div>

      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-floating mb-3" data-aos="fade-up">
          <textarea class="form-control" placeholder="Leave a comment here" name="facility" id="facility" style="height: 100px;" onkeyup="checkemptyMessage()"></textarea>
           <label for="floatingTextarea">Facilities & More Details</label>
        </div>
      </div>

      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-floating mb-3" data-aos="fade-up">
          <textarea class="form-control" placeholder="Leave a Topic" name="topic" id="topic" style="height: 100px;" onkeyup="checkemptyMessage()"></textarea>
          <label for="floatingTextarea">Topic For your add</label>
        </div>
      </div>

      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-up">
        <button type="submit" class="btn btn-primary green_btn mb-3" style="width: 100%; height: 55px;">SUBMIT NOW</button>
      </div>

    </form>
<!-------------------Post your Add Form----------------------->
            </div>

          </div>
        </div>
        
      </div>
      
      <!-- ========================= -->
      <!-- ========================= -->

    </div>

    <!-- add section -->


     <div class="clearfix"></div>
    <br>
    <br>

    <!-- banner section -->
    <div class="container">
      
      <div class="row">
        
        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
          <div class="banner_div shadow rounded" style="background-image:url('assets/assets/images/banner01.jpg') !important;"></div>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
          <div class="banner_div shadow rounded" style="background-image:url('assets/assets/images/banner02.jpg') !important;"></div>
        </div>

      </div>

    </div>
    <!-- banner section -->

    <div class="clearfix"></div>
    <br>
    <br>

    <!--=============================================-->
  <!--===================body====================-->

  <!--=============================================-->
  <!--===================scroll top====================-->

  <button class="scroll-top">
    <div class="arrow up"></div>
  </button>

<!------------------------------------------------------------------------------->
<!-------------------select location on map-------------------------------------->
<!----------Modal---------------------------------------------------------------->
    <div class="modal fade" id="location-modal" tabindex="-1" role="dialog" aria-labelledby="location-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="address-label">Choose Location</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <div id="map"></div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-check"></i>Done</button>
                </div>

            </div>
        </div>
    </div>
    <!-----------Modal---------------------->

<!-------------------select location on map------------------------------------->
<!----------------------------------------------------------------------------------------->
<!-- Slim.js need to cll Google map do not need it to distance calculae -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-------------------select location on map------------------------------------->
<!----------------------------------------------------------------------------------------->


  <!--=============================================-->
  <!--===================scroll top====================-->

