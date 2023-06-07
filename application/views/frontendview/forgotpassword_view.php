<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="assets\css/finder.css" rel="stylesheet">
    <link href="assets\css/mediaquery.css" rel="stylesheet">
    <!-- Custom CSS -->

     <title>Electoral Reform Tracker</title>

    <!--favicon-->
    <link rel="shortcut icon" href="assets\images/favicon.png" />
    <!--favicon-->

    <!-- data table -->
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- data table -->

    <!-- date picker -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css'>
    <!-- date picker -->

    <!-- font awsom -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- font awsom -->

     <!--loading effect-->
    <link rel="stylesheet" href="assets\css/loading_styles.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="assets\css/aos.css" type="text/css" media="screen"/>
    <!--loading effect-->


    <!--scroll bar style-->
    <style>

      ::-webkit-scrollbar {
        background: #000000;
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
  <body class="body_bg">

    <!--=============================================-->
  <!--===================header====================-->

    <!-- header section -->


    <div class="container">
      
      <div class="row login_section_div">

         <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4 col-sm-12 col-12">
          <br>
          <br>
           <img src="assets\images/p_reset.gif" alt="" class="img-fluid mx-auto d-block p_reset_img d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block" data-aos="fade-up">
         </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
           
            <div class="shadow p-5 mb-1 bg-body rounded" data-aos="fade-down">

              <div class="col"data-aos="fade-up" style="padding-bottom: 15px; margin-bottom: 15px; border-bottom: 1px solid #f5c481;">
              <a href="<?php echo base_url('/'); ?>"><img src="assets\images/logo.png" alt="" class="d-block top_logo"></a>
              </div>

              <div class="clearfix"></div>
              <br>

              <h1 class="heading mb-2"><b>FORGOT PASSWORD</b></h1>
              <p>Please enter your registered email address. An email notification with a password reset code will then be sent to you.</p>
            
            <!--Login Form-->  
            <form name="sign_up" id="sign_up" action="<?php echo base_url('Forgot_password/forgotpass'); ?>" method="post" enctype="multipart/form-data"> 
               
              <div class="row">
                
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Your Email Address</label>
                  </div>

                  <div class="clearfix"></div>

<!--                   <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Your Phone Number</label>
                  </div>

                  <div class="clearfix"></div> -->

                </div>

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   <a href="index.html"><button type="submit" class="btn btn-primary green_btn" style="width: 100%; font-weight: 900; height: 55px !important;"><span class="align-middle">RESET PASSWORD</span></button></a>
                </div>
            </form>

                 <p style="text-align: center; font-weight: 700; margin-top: 15px;"><a href="<?php echo base_url('home'); ?>" class="a_link">Back to Home</a></p>

                <div class="clearfix"></div>
                <br>

                <p class="mb-0" style="text-align: center; font-weight: 500; color: #999999;">Copyright © 2023 FINDER All Rights Reserved. <br>Solution by Thiyuni Siyathma Robertson</p>

              </div>

            </div>

         </div>

      </div>

    <div class="clearfix"></div>

    </div>


    <!-- header section -->

    <!--=============================================-->
  <!--===================header====================-->


  <!--=============================================-->
  <!--===================scroll top====================-->

  <button class="scroll-top">
    <div class="arrow up"></div>
  </button>

  <!--=============================================-->
  <!--===================scroll top====================-->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets\js/jquery-3.2.1.min.js"></script>
      <script src="assets\js/popper.min.js" ></script> 
      <script src="assets\js/bootstrap.min.js" ></script>


      <!-- scroll top -->
      <script src="assets\js/drop_down_menu.js"></script>
      <!-- scroll top -->

       <!--loading effects-->
        <script src="assets\js/aos.js"></script>

        <script>
        AOS.init({
        easing: 'ease-out-back',
                duration: 1000
        });</script>

        <!--loading effects-->


  </body>
</html>