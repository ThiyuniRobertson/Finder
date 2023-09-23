<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/finder.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mediaquery.css'); ?>" rel="stylesheet">
    <!-- Custom CSS -->

    <title>Finder</title>

    <!--favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>" />
    <!--favicon-->

    <!-- font awsom --> 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- font awsom --> 

    <!--loading effect-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/loading_styles.css'); ?>" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css'); ?>" type="text/css" media="screen"/>
    <!--loading effect-->

    <!--jarallax js & css-->
    <link href="<?php echo base_url('assets/jarallax/jarallax_css.css'); ?>" rel="stylesheet" type="text/css" media="screen">
    <!--jarallax js & css-->

    <!-- owl carousel -->
    <link href="<?php echo base_url('assets/owl/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owl/owl_css.css'); ?>">
    <!-- owl carousel -->
<!------------------------------------------------------------->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-AZeJwG7AYyT3Fr7_kI2BnV3_y9SbK7s&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                  <a href="<?php echo base_url('/'); ?>" target="_blank" data-aos="fade-right" data-aos-duration="500" class="fa fa-facebook aos-init aos-animate"></a>
                  <a href="<?php echo base_url('/'); ?>" target="_blank" data-aos="fade-right" data-aos-duration="700" class="fa fa-instagram aos-init aos-animate"></a>
                  <a href="<?php echo base_url('/'); ?>" target="_blank" data-aos="fade-right" data-aos-duration="900" class="fa fa-twitter aos-init aos-animate"></a>
                  <a href="<?php echo base_url('/'); ?>" target="_blank" data-aos="fade-right" data-aos-duration="1100" class="fa fa-linkedin aos-init aos-animate"></a>
                </p>

              </div>

            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              
              <div class="d-grid gap-2 d-md-flex justify-content-md-end top_btn_set_div">
                <!--<a href="#"><button type="button" class="btn btn-primary blue_white_btn">සිං</button></a>
                <a href="#"><button type="button" class="btn btn-primary blue_white_btn">தமி</button></a>-->
                <!-- ============== -->
              <!-------Logging session create and logout method call------------------------>
                <?php if($this->session->userdata('id')){;?>
                  <a href="<?php echo base_url('my-account'); ?>"><button type="button" class="btn btn-primary magenta_btn"><img src="assets/images/account.png" width="20px;">
                  &nbsp;Hi..<?php echo $this->session->userdata('vFname');?></button></a>
                  <a href="<?php echo base_url("logout"); ?>">Logout<logouta>
                <?php } else { ?>
                  <a href="<?php echo base_url('register'); ?>"> <button type="button" class="btn btn-primary blue_white_btn">Sign Up</button> </a>
                  <a href="<?php echo base_url('sign-up'); ?>"> <button type="button" class="btn btn-primary blue_btn">Login</button> </a>
                <?php } ?>
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
        <a href="<?php echo base_url('/'); ?>"> <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="" class="d-block top_logo"> </a>
        </div> <!--when give the / loard the index page-->

        <div class="clearfix"></div>

        <p data-aos="fade-down">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>

        <a href="<?php echo base_url('post-add'); ?>"><button type="button" class="btn btn-primary magenta_btn mb-3"><img src="<?php echo base_url('assets/images/post.png'); ?>" alt="" width="30px;"> &nbsp; POST YOUR ADD</button></a>

        <div class="clearfix"></div>

      </div>

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">

        <img src="<?php echo base_url('assets/images/find.png'); ?>" alt="" class="img-fluid mx-auto d-block">

      </div>

      <!-- welcome section -->


    </div>

  </div>

</div>