<div class="clearfix"></div>
    <br>
    <br>
  
    <!-- add section -->

    <div class="container">

      <div class="row">

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <h1 class="heading mb-4" data-aos="fade-up">Your Posted Advertisement</h1>
        </div>

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-end">
          <p class="fst-italic mb-1">Showing 1 - 8 of 10 adds</p>
        </div>
        
      </div>
      
      <!-- <div class="row"> -->
        
        <!-- add -->
         <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
           <img src="assets/images/h01.jpg" alt="" class="d-block mx-auto w-100 rounded" data-aos="fade-down">
         </div> -->

         <!-- <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 mb-5"> -->

          <!-- new badge -->
          <!-- <div class="position-relative">
            <div class="position-absolute top-0 end-0" style="top: 15px !important; right: 15px !important;">
              <button type="button" class="btn btn-primary blue_btn" style="cursor: inherit;">NEW</button>
            </div>
          </div> -->
          <!-- new badge -->

      <?php $id = $this->session->userdata('id');?>
      <?php $all_data = get_myadds($id) ?>
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
            <p class="mb-1"><?php echo $item->	vFacility;?></p>
            <h1 class="heading mb-1" data-aos="fade-up">Rs <?php echo $item->vPayment;?> / Month</h1>
            <!-- <p class="mb-1">DIstance to your selected Destination:  </p> -->
            <a href="<?php echo base_url('add-detail/'.$item->id); ?>" class="a_link">Read More <img src="<?php echo base_url('assets/images/arrow.png'); ?>"></a>
            </div> 

        </div>
    <!----------add------------>
      </div>
      <?php }}else {
      echo 'No advertisements available.';
  } ?>
<!--------------=========================--------------->
<!--------------=========================--------------->


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


    <!--=============================================-->
  <!--===================body====================-->


  <!--=============================================-->
  <!--===================footer====================-->

  <div class="container-fluid footer_row text-center">
      
      <div class="container">
        
       <div class="row">
         
        <img src="images/logo.png" alt="" class="d-block top_logo mx-auto mb-3"data-aos="fade-up">

       <p class="text-center" data-aos="fade-down">
         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br>when an unknown printer took a galley of type and scrambled it to make a type specimen book.
       </p>

       <p class="top_social_icon mb-5">
          Follow Us on<br>
          <a href="" target="_blank" data-aos="fade-right" data-aos-duration="500" class="fa fa-facebook aos-init aos-animate"></a>
          <a href="" target="_blank" data-aos="fade-right" data-aos-duration="700" class="fa fa-instagram aos-init aos-animate"></a>
          <a href="" target="_blank" data-aos="fade-right" data-aos-duration="900" class="fa fa-twitter aos-init aos-animate"></a>
          <a href="" target="_blank" data-aos="fade-right" data-aos-duration="1100" class="fa fa-linkedin aos-init aos-animate"></a>
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


  </body>