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

      <!--------Post your Add Form----------------------->
                <form class="row" name="post_add" id="post_add" action="<?php echo base_url('Posted_add/save_inquiry'); ?>" method="post" enctype="multipart/form-data">

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    
                    <div class="form-floating mb-3" data-aos="fade-up">
                      <select class="form-select" id="rtype" name="rtype" aria-label="Floating label select example">
                        <option selected> </option>
                        <option value="1">Non-AC</option>
                        <option value="2">AC</option>
                      </select>
                      <label for="floatingSelectGrid">Room Type</label>
                    </div>
                  </div>

                  <!--<div class="clearfix"></div>-->
                  
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-floating mb-3" data-aos="fade-up">
                      <select class="form-select" id="rcategory" name="rcategory" aria-label="Floating label select example">
                        <option selected> </option>
                        <option value="1">One Person</option>
                        <option value="2">Two Person</option>
                        <option value="3">Three Person</option>
                        <option value="4">Four / More</option>
                      </select>
                      <label for="floatingSelectGrid">Room Category</label>
                    </div>
                  </div>

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-floating mb-3" data-aos="fade-up">
                      <select class="form-select" id="bedtype" name="bedtype" aria-label="Floating label select example">
                        <option selected> </option>
                        <option value="1">Signle</option>
                        <option value="2">Double</option>
                        <option value="3">Bank Bed</option>
                      </select>
                      <label for="floatingSelectGrid">Provide Bed Type</label>
                    </div>
                  </div>

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-floating mb-3" data-aos="fade-up">
                      <select class="form-select" id="meal" name="meal" aria-label="Floating label select example">
                        <option selected> </option>
                        <option value="1">With Meal</option>
                        <option value="2">Without Meal</option>
                      </select>
                      <label for="floatingSelectGrid">Meal</label>
                    </div>
                  </div>

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-floating mb-3" data-aos="fade-up">
                      <select class="form-select" id="bathroom" name="bathroom" aria-label="Floating label select example">
                        <option selected> </option>
                        <option value="1">Attached Bathroom</option>
                        <option value="2">Seperate Bathroom</option>
                      </select>
                      <label for="floatingSelectGrid">Bathroom Type</label>
                    </div>
                  </div>

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-floating mb-3" data-aos="fade-up">
                      <input type="text" class="form-control" id="location" name="location" placeholder="Enter a location">
                      <label for="floatingInput">Your Location</label>
                    </div>
                  </div>

                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-floating mb-3" data-aos="fade-up">
                      <input type="text" class="form-control" id="payment" name="payment">
                      <label for="floatingInput">Monthly Payment</label>
                    </div>
                  </div>


                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="mb-3" style="position: relative; top: -6px;" data-aos="fade-up">
                          <label><small>Upload Images</small></label>
                          <input class="form-control" type="file" name="rimages" id="rimages" value="front_img" onkeyup="checkemptyFile()">
                      </div>
                  </div>

                  <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-floating mb-3" data-aos="fade-up">
                        <textarea class="form-control" placeholder="Leave a comment here" name="facility" id="facility" style="height: 100px;" onkeyup="checkemptyMessage()"></textarea>
                        <label for="floatingTextarea">Facilities & More Details</label>
                    </div>
                </div>

                  <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-up">
                    <button type="submit" class="btn btn-primary green_btn mb-3" style="width: 100%; height: 55px;">SUBMIT NOW</button>
                  </div>

                </form>
              <!--------Post your Add Form----------------------->
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

  <!--=============================================-->
  <!--===================scroll top====================-->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/popper.min.js" ></script> 
      <script src="js/bootstrap.min.js" ></script>


      <!-- scroll top -->
      <script src="js/drop_down_menu.js"></script>
      <!-- scroll top -->

    <!--loading effects-->
    <script src="js/aos.js"></script>

    <script>
    AOS.init({
    easing: 'ease-out-back',
            duration: 1000
    });</script>

    <!--loading effects-->

     <!--jarallax js-->
    <script src="jarallax/jarallax_js.js"></script>
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
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/owl_js.js"></script>
    <!-- owl carousel -->

<!--Script for location Google map-->
  
</body>