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

    <!-- font awsom -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- font awsom --> 

    <!--loading effect-->
    <link rel="stylesheet" href="assets\css/loading_styles.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="assets\css/aos.css" type="text/css" media="screen"/>
    <!--loading effect-->

    <!--jarallax js & css--> 
    <link href="assets\jarallax/jarallax_css.css" rel="stylesheet" type="text/css" media="screen">
    <!--jarallax js & css-->

    <!-- owl carousel -->
    <link href="owl/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets\owl/owl_css.css">
    <!-- owl carousel -->


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
<!-- header section -->


    <div class="clearfix"></div>

      <div class="container-fluid top_logo_row" style="background-color: #f8f8fa;">

        <div class="container">

          <div class="row">

             <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              
              <div class="d-grid gap-2 d-md-flex justify-content-md-start top_btn_set_div">

                <p class="top_social_icon mb-0">
                  Follow Us on -
                  <a href="#" target="_blank" data-aos="fade-right" data-aos-duration="500" class="fa fa-facebook aos-init aos-animate"></a>
                  <a href="#" target="_blank" data-aos="fade-right" data-aos-duration="700" class="fa fa-instagram aos-init aos-animate"></a>
                  <a href="#" target="_blank" data-aos="fade-right" data-aos-duration="900" class="fa fa-twitter aos-init aos-animate"></a>
                  <a href="#" target="_blank" data-aos="fade-right" data-aos-duration="1100" class="fa fa-linkedin aos-init aos-animate"></a>
                </p>

              </div>

            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              
              <div class="d-grid gap-2 d-md-flex justify-content-md-end top_btn_set_div">
                <!--<a href="#"><button type="button" class="btn btn-primary blue_white_btn">සිං</button></a>
                <a href="#"><button type="button" class="btn btn-primary blue_white_btn">தமி</button></a>-->
                <!-- ============== -->
                <a href="<?php echo base_url('register'); ?>"> <button type="button" class="btn btn-primary blue_white_btn">Sign Up</button> </a>
                <a href="<?php echo base_url('sign-up'); ?>"> <button type="button" class="btn btn-primary blue_btn">Login</button> </a>
              </div>

            </div>
          </div>
              

        </div>

      </div>
  <!-- header section -->

  <!--=============================================-->
  <!--===================body====================-->

<!-- recommendation section -->

    <div class="container-fluid" style="text-align: center;">
      
      <div class="container">

        <div class="clearfix"></div>
        <br>

        <img src="assets\images/thank.gif" alt="" class="mx-auto d-block" style="width: 300px;">

         <h1 class="heading mb-3" style="text-transform: uppercase; color: #0468a1;">your registration is successfully</h1>
        
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </p>

      </div>

    </div>


  <!--===================footer====================-->

    <div class="clearfix"></div>
    <br>
    <br>

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

      <script type="text/javascript">
        $(document).ready(function() {      
            $('.carousel').carousel('pause');
        });
      </script>

    <!--loading effects-->
    <script src="assets\js/aos.js"></script>

    <script>
    AOS.init({
    easing: 'ease-out-back',
            duration: 1000
    });</script>

    <!--loading effects-->


      <!-- count down -->
    <script>
      var a = 0;
      $(window).scroll(function() {

        var oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
          $('.counter-value').each(function() {
            var $this = $(this),
              countTo = $this.attr('data-count');
            $({
              countNum: $this.text()
            }).animate({
                countNum: countTo
              },

              {
                duration: 3000,
                easing: 'swing',
                step: function() {
                  $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                  $this.text(this.countNum);
                  //alert('finished');
                }

              });
          });
          a = 1;
        }

      });
    </script>
    <!-- count down -->

     <!--jarallax js-->
    <script src="assets\jarallax/jarallax_js.js"></script>
    <!--jarallax js-->

    <!--jarallax-->
    <script type="text/javascript">
        /* init Jarallax */
        $('.assets\jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <!--jarallax-->

     <!-- owl carousel -->
    <script src="assets\owl/owl.carousel.min.js"></script>
    <script src="assets\owl/owl_js.js"></script>
    <!-- owl carousel -->


  </body>
</html>