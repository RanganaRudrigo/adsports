
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
            <li><a href="#">Contact us</a></li>
        </ul>

        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="page-title">
                    <h2>Contact Us</h2>
                </div>


                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.594664628173!2d79.85402581419245!3d6.938950394986658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2591e4266035d%3A0xf3320c6cc301a2e1!2sMicro+World+(THE+MICRO+R+WORLD)!5e0!3m2!1sen!2slk!4v1483942995676" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="info-contact clearfix">
                    <div class="col-lg-4 col-sm-4 col-xs-12 info-store">
                        <div class="row">
                            <div class="name-store">
                                <h3>The Micro World</h3>
                            </div>
                            <address>
                                <div class="address clearfix form-group">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="text"># 136, Dam Street, Colombo - 12, Sri Lanka.</div>
                                </div>
                                <div class="phone form-group">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="text">+94 112 473 774, +94 112 330 375</div>
                                </div>
                                <div class="phone form-group">
                                    <div class="icon">
                                        <i class="fa fa-fax"></i>
                                    </div>
                                    <div class="text">+94 112 478 172</div>
                                </div>
                                <div class="phone form-group">
                                    <div class="icon">
                                        <i class="fa fa-mobile"></i>
                                    </div>
                                    <div class="text">&nbsp;&nbsp;&nbsp;+94 770 834 004</div>
                                </div>
                                <div class="comment">
                                   Your queries are always welcome from Us feel free to note us your words. We provide all kind of saterlight installation with accessories. We have Perfect Packages that will definitly suite to your needs.
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-8 col-xs-12 contact-form">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <fieldset>
                                <legend>Contact Form</legend>
                                <h3 class="widgettitle"><?=@$message?></h3>
                                <div class="form-group required">
                                    <div class="col-sm-12">
                                        <input type="text" name="name" placeholder="Your Name" value="" id="input-name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <div class="col-sm-12">
                                        <input type="text" name="email" placeholder="E-Mail Address" value="" id="input-email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group required">
                                   <div class="col-sm-12">
                                        <textarea name="enquiry" rows="10" placeholder="Enquiry" id="input-enquiry" class="form-control"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="buttons">
                                <div class="pull-right">
                                    <button class="btn btn-default buttonGray" type="submit">
                                        <span>Submit</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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