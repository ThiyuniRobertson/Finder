<!-- ========================== -->

<div class="clearfix"></div>
<br>
<br>

<!-- add section -->

<div class="container">

<div class="row">

<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">

<?php if($this->session->userdata('id')){;?>

  <h1 class="heading aos-init aos-animate" data-aos="fade-up">
    ACCOUNT
  </h1>
  
  <a href="">
    <div class="left_side_btn_div">
      Hi...<?php echo $this->session->userdata('vFname');?>
    </div>
  </a>

  <!-- ============== -->

  <a href="<?php echo base_url('post-add'); ?>">
    <div class="left_side_btn_div">
      Post your Advertisement
    </div>
  </a>

  <!-- ============== -->

  <a href="<?php echo base_url('posted-add'); ?>">
    <div class="left_side_btn_div">
      Posted your Advertisement
    </div>
  </a>

  <!-- ============== -->

   <a href="<?php echo base_url('my-fav'); ?>">
    <div class="left_side_btn_div">
      My Favorite
    </div>
  </a>

  <!-- ============== -->

  <a href="<?php echo base_url('my-account'); ?>">
    <div class="left_side_btn_div left_side_btn_div_active">
      My Account
    </div>
  </a>

  <!-- ============== -->

  <a href="<?php echo base_url('register'); ?>">
    <div class="left_side_btn_div">
      Register
    </div>
  </a>

  <!-- ============== -->

  <a href="<?php echo base_url('forgot-password'); ?>">
    <div class="left_side_btn_div">
      Forgotten Password
    </div>
  </a>

  <!-- ============== -->

</div>

<div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-12">
  
  <h1 class="heading aos-init aos-animate" data-aos="fade-up">
   Welcome <?php echo $this->session->userdata('vFname');?>
  </h1>

  <h1 class="sub_heading aos-init aos-animate" data-aos="fade-up">
    Your Personal Details
  </h1>

  <div class="row mt-3 mb-4">
    
    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="<?php echo $this->session->userdata('vFname');?>">
        <label for="floatingInputValue">First Name</label>
      </div>
    </div>

    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="<?php echo $this->session->userdata('vLname');?>">
        <label for="floatingInputValue">Last Name</label>
      </div>
    </div>

    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com">
        <label for="floatingInputValue">Address</label>
      </div>
    </div>

    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="<?php echo $this->session->userdata('vProvince');?>">
        <label for="floatingInputValue">Province</label>
      </div>
    </div>

    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInputValue" placeholder="Colombo" value="<?php echo $this->session->userdata('vDistrict');?>">
        <label for="floatingInputValue">District</label>
      </div>
    </div>

    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInputValue" placeholder="011-1234567" value="<?php echo $this->session->userdata('vContactNum');?>">
        <label for="floatingInputValue">Phone Number</label>
      </div>
    </div>

    <!-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="+94 775 235 986">
        <label for="floatingInputValue">Mobile Number</label>
      </div>
    </div> -->

    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="<?php echo $this->session->userdata('vEmail');?>">
        <label for="floatingInputValue">Email</label>
      </div>
    </div>

    <div class="clearfix"></div>
    <br>

     <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
      <button type="button" class="btn btn-primary magenta_btn "><b>Edit</b></button>
      <button type="button" class="btn btn-primary magenta_btn "><b>Save</b></button>
    </div>

  </div>

  <?php } ?>
  <!-- ================= -->

  <h1 class="sub_heading aos-init aos-animate" data-aos="fade-up">
    Password
  </h1>

  <div class="row mt-3 mb-4">

    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="123456789">
        <label for="floatingInputValue">Password</label>
      </div>
    </div>

     <div class="clearfix"></div>

     <div class="row">
       <h1 class="sub_heading aos-init aos-animate" data-aos="fade-up">
        Change Your Password
      </h1>

       <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingInputValue" placeholder="New Password">
          <label for="floatingInputValue">New Password</label>
        </div>
      </div>

      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingInputValue" placeholder="Re-Enter Password">
          <label for="floatingInputValue">Re-Enter Password</label>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    <br>

    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
      <button type="button" class="btn btn-primary magenta_btn"><b>Change</b></button>
      <button type="button" class="btn btn-primary magenta_btn"><b>Save</b></button>
    </div>

    <div class="clearfix"></div>
    <br>

    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
      <button type="button" class="btn btn-primary green_btn mb-3" style="width: 100%; height: 55px;">DELETE ACCOUNT</button>
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