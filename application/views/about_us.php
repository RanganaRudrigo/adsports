<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->view('inc/header_tag.php'); ?>
</head>
<body class="res layout-subpage">
<div id="wrapper" class="wrapper-full ">
    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">

        <?php $this->view('inc/site_header.php'); ?>
    </header>
    <!-- //Header Container  -->
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="<?=base_url('Home') ?>"><i class="fa fa-home"></i></a></li>
            <li><a href="#">About Us</a></li>
        </ul>

        <div class="row">
            <div id="content" class="col-sm-12"> 
                <div class="about-us about-demo-3">
  <div class="row">
    <div class="col-lg-6 col-md-6 about-image"> <img src="<?= base_url('media/') ?>images/about-us-demo3.jpg" alt="About Us"> </div>
    <div class="col-lg-6 col-md-6 about-info">
      <h2 class="about-title">About Us</h2>
      <div class="about-text">
        <p> Micro world was stared back in the year 2006 with vision of bringing the best quality satellite television providable to Sri Lanka , in the 11 year that we have been established , we have introduced new technology that's never before seen in the Sri Lankan satellite market like the introduction of fiber optical network to hotels and apartments and forge in mission in Sri Lanka , we also made Headend system with new innovations , we also are the pioneers who made DTH the most popular of of media entertainment in Sri Lanka ,our biggest importance is to maintain and strength our relationship with our valuable customers who kept this organization afloat for the last 11 years , we aim to keep ,our major goal is to keep building on what we have achieved during the period of time we have been established and also improve and improvise to keep our existing and also new customer satisfied</p>
      </div>
    </div>
  </div>
  <!-- //Main Container -->
  <!-- Footer Container -->
  
  <!-- //end Footer Container -->
</div>
            </div>
        </div>
    </div>
    <!-- //Main Container -->


    <!-- Footer Container -->
    <footer class="footer-container">
        <?php $this->view('inc/site_footer.php'); ?>
    </footer>
    <!-- //end Footer Container -->

</div>



<link rel='stylesheet' property='stylesheet'  href='<?= base_url('media/css/') ?>cpanel.css' type='text/css' media='all' />
<!-- Preloading Screen -->
<div id="loader-wrapper">
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>
<!-- End Preloading Screen -->
<?php $this->view('inc/footer_js.php'); ?>

</body>
</html>
