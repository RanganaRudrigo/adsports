
<!DOCTYPE html>
<html lang="en">
<head>

    <?php $this->view('inc/header_tag.php'); ?>
</head>

<body class="common-home res layout-home2">
<div id="wrapper" class="wrapper-full banners-effect-7">
    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">
        <?php $this->view('inc/site_header.php'); ?>

    </header>
    <!-- //Header Container  -->
    <!-- Block Spotlight1  -->
    <section class="so-spotlight1">
        <div class="container">
            <div class="row">
                <div id="yt_header_right" class="col-lg-offset-3 col-lg-9 col-md-12">
                    <div class="slider-container ">
                        <div id="so-slideshow" >
                            <div class="module slideshow">
                                <div class="item">
                                    <a href="#"><img src="<?= base_url('media/images/') ?>slider1.jpg" alt="slider1" class="img-responsive"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="<?= base_url('media/images/') ?>slider2.jpg" alt="slider2" class="img-responsive"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="<?= base_url('media/images/') ?>slider3.jpg" alt="slider2" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="loadeding"></div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Block Spotlight1  -->

    <!-- Block Spotlight2  -->
    <section class="so-spotlight2">
        <div class="container">
            <div class="row">
                <div class="news-letter col-md-3 col-sm-12 col-xs-12">
                    <div class="newsletter">
                        <h2>NewsLetter</h2>
                        <p class="page-heading-sub hidden-md hidden-sm"> Please sign up to the Market mailing list to receive updates on new arrivals, special offers and other discount information </p>
                        <form action="#" method="post">
                            <div class="form-group required">
                                <div class="input-box">
                                    <input type="email" name="txtemail" id="txtemail" value="" placeholder="" class="form-control input-lg"> </div>
                                <div class="subcribe">
                                    <button type="submit" class="btn btn-default btn-lg" onclick="return subscribe();">Subscribe</button> <span>Subscribe</span> </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="banner-html  hidden-xs col-md-9 col-sm-12 col-xs-12">
                    <div class="module">
                        <div class="modcontent clearfix">
                            <div class="m-banner">
                                <div class="m-banner-right">
                                    <div class="m-banner2 banners">
                                        <div>
                                            <a href="#"><img src="<?= base_url('media/images/') ?>v2-banner2.jpg" alt="banner1"></a>
                                        </div>
                                    </div>

                                    <div class="m-banner34">
                                        <div class="m-banner3 banners">
                                            <div>
                                                <a href="#"><img src="<?= base_url('media/images/') ?>v2-banner3.jpg" alt="banner1"></a>
                                            </div>
                                        </div>
                                        <div class="m-banner4 banners ">
                                            <div>
                                                <a href="#"><img src="<?= base_url('media/images/') ?>v2-banner4.jpg" alt="banner1"></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="m-banner1 banners hidden-xs">
                                    <div>
                                        <a href="#"><img src="<?= base_url('media/images/') ?>v2-banner1.jpg" alt="banner1"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Block Spotlight2  -->

    <!-- Main Container  -->
    <div class="main-container container">

        <div class="row">
            <div id="content" class="col-md-9 col-sm-12 col-xs-12">

                <div class="module tab-slider titleLine">
                    <h3 class="modtitle">Featured Product</h3>
                    <div id="so_listing_tabs_3" class="so-listing-tabs first-load module">
                        <div class="loadeding"></div>
                        <div class="ltabs-wrap ">
                            <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="http://localhost/ytc_templates/opencart/so_market/" data-type_source="0">
                                <!--Begin Tabs-->
                                <div class="ltabs-tabs-wrap">
                                    <span class="ltabs-tab-selected"></span> <span class="ltabs-tab-arrow">?</span>
                                    <div class="item-sub-cat">
                                        <ul class="ltabs-tabs cf">
                                            <li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">Sport Goods						</span> </li>
                                            <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18"> <span class="ltabs-tab-label">Sports Wears	</span> </li>
                                            <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"> <span class="ltabs-tab-label">Watches</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Tabs-->
                            </div>
                            <div class="ltabs-items-container">
                                <!--Begin Items-->
                                <div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10">
                                    <div class="ltabs-items-inner ltabs-slider ">
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>J9.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>J9.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block  text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>



                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>m1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>m1.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--New Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name	</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>w1.jpg"  alt="" class="img-responsive" />
                                                        <img src="i<?= base_url('media/images/') ?>w1.jpg"  alt="" class="img_0 img-responsive" />
                                                    </div>

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="ltabs-items items-category-18 grid" data-total="11">
                                    <div class="ltabs-items-inner ltabs-slider ">
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>e11.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>e11.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>141.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>141.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href=""> Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>35.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>35.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>E3_1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>E3_1.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">HP LP3065</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="ltabs-items  items-category-25 grid" data-total="11">
                                    <div class="ltabs-items-inner ltabs-slider ">

                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>141.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>141.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>w1.jpg"  alt="" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>w1.jpg"  alt="" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End Items-->


                        </div>

                    </div>
                </div>
                <div class="module">
                    <div class="modcontent clearfix">
                        <div class="banners">
                            <div>
                                <a href="#"><img src="<?= base_url('media/images/') ?>v2-banner-home.jpg" alt="left-image"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="module tab-slider titleLine">
                    <h3 class="modtitle">New Products</h3>
                    <div id="so_listing_tabs_4" class="so-listing-tabs first-load module">
                        <div class="ltabs-wrap ">
                            <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="http://localhost/ytc_templates/opencart/so_market/" data-type_source="0">
                                <!--Begin Tabs-->
                                <div class="ltabs-tabs-wrap">
                                    <span class="ltabs-tab-selected">Sports Goods	</span> <span class="ltabs-tab-arrow">?</span>
                                    <div class="item-sub-cat">
                                        <ul class="ltabs-tabs cf">
                                            <li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">Sports Wear						</span> </li>
                                            <li class="ltabs-tab " data-category-id="2" data-active-content=".items-category-2"> <span class="ltabs-tab-label">Watches	</span> </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- End Tabs-->
                            </div>
                            <div class="ltabs-items-container">
                                <!--Begin Items-->
                                <div class="ltabs-items  ltabs-items-selected items-category-1 grid" data-total="10">
                                    <div class="ltabs-items-inner ltabs-slider ">

                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>

                                                        <div class="price">

                                                        </div>
                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>w1.jpg"   class="img-responsive" />
                                                        <img src="i<?= base_url('media/images/') ?>w1.jpg"   class="img_0 img-responsive" />
                                                    </div>

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Dail Lulpa</a></h4>
                                                        <div class="ratings">

                                                        </div>

                                                        <div class="price">

                                                        </div>
                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>

                                                        <div class="price">

                                                        </div>
                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>J9.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>J9.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" ><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>m1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>m1.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--New Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Sport Shoes	</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" ><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="ltabs-items  items-category-2 grid" data-total="11">

                                    <div class="ltabs-items-inner ltabs-slider ">
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>e11.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>e11.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" ><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>141.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>141.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href=""> Canon EOS 5D</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>35.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>35.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>E3_1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>E3_1.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">HP LP3065</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" ><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="ltabs-items items-category-3 grid" data-total="11">
                                    <div class="ltabs-items-inner ltabs-slider ">

                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>141.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>141.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" ><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>w1.jpg"   class="img-responsive" />
                                                        <img src="i<?= base_url('media/images/') ?>w1.jpg"   class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>


                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" ><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                        <div class="ltabs-item product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img src="<?= base_url('media/images/') ?>B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="">  Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>
                                                <div class="right-block text-center">
                                                    <div class="caption">
                                                        <h4><a href="">Product Name</a></h4>
                                                        <div class="ratings">

                                                        </div>

                                                        <div class="price">

                                                        </div>
                                                    </div>

                                                    <div class="button-group">
                                                        <button class="addToCart" type="button" data-toggle="tooltip" title="View More" ><i class="fa fa-shopping-cart"></i> <span class="">View More</span></button>


                                                    </div>
                                                </div><!-- right block -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End Items-->


                        </div>

                    </div>
                </div>



            </div>
            <aside class="col-md-3 col-xs-12  content-aside right_column">
                <div class="module latest-product titleLine">
                    <h3 class="modtitle">Latest Product</h3>
                    <div class="modcontent ">
                        <div class="product-latest-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img src="<?= base_url('media/images/') ?>m1.jpg" alt="Product Name" title="Product Name" class="img-responsive" style="width: 100px; height: 82px;"></a>
                                </div>
                                <div class="media-body">
                                    <div class="caption">
                                        <h4><a href="#">Product Name</a></h4>

                                        <div class="price">

                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="product-latest-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img src="<?= base_url('media/images/') ?>m2.jpg" alt="Product Name" title="Product Name" class="img-responsive" style="width: 100px; height: 82px;"></a>
                                </div>
                                <div class="media-body">
                                    <div class="caption">
                                        <h4><a href="#">Product Name</a></h4>

                                        <div class="price">

                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="product-latest-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img src="<?= base_url('media/images/') ?>18.jpg" alt="Product Name" title="Product Name" class="img-responsive" style="width: 100px; height: 82px;"></a>
                                </div>
                                <div class="media-body">
                                    <div class="caption">
                                        <h4><a href="#">Product Name</a></h4>

                                        <div class="price">

                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="product-latest-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img src="<?= base_url('media/images/') ?>m1.jpg" alt="Product Name" title="Product Name" class="img-responsive" style="width: 100px; height: 82px;"></a>
                                </div>
                                <div class="media-body">
                                    <div class="caption">
                                        <h4><a href="#">Product Name</a></h4>

                                        <div class="price">

                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>

                </div>
                <div class="module titleLine">
                    <h3 class="modtitle">Branches</h3>
                    <div class="modcontent">
                        <div class="block-clientsay block ">
                            <div class="slider-clients-say1">
                                <div class="item">
                                    <div class="client-cont">
                                        <a>&nbsp;&nbsp;<img src="<?= base_url('media/images/') ?>shop.png" class="img block" style="">  Nugegoda Branch</a>
                                        <p >&nbsp;&nbsp;#180D, Heighlevel Road, Nugegoda, <br>&nbsp;&nbsp;Sri Lanka <br>&nbsp;&nbsp;Tele :  +94 112 828 309 <br></p>



                                    </div>
                                    <div class="client-cont" >
                                        <a>&nbsp;&nbsp;<img src="<?= base_url('media/images/') ?>shop.png" class="img block"></i>  Pannipitiya Branch</a>
                                        <p >&nbsp;&nbsp;#323, Heighlevel Road,
                                            Moraketiya, &nbsp;&nbsp;Pannipitiya, Sri Lanka
                                            <br>&nbsp;&nbsp;Tele : +94 114 921 986 </p>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="module" style="margin-top: 0px;">
                    <div class="modcontent clearfix">
                        <div class="banners">
                            <div>
                                <a href="#"><img src="<?= base_url('media/images/') ?>v2-banner-right.jpg" alt="banner1"></a>
                            </div>
                        </div>

                    </div>
                </div>

            </aside>

        </div>
    </div>
    <!-- //Main Container -->
    <!-- Block Spotlight3  -->
    <section class="so-spotlight3">
        <div class="container">
            <div class="row">


            </div>
        </div>
    </section>
    <!-- //Block Spotlight3  -->

    <script type="text/javascript">
        <!--
        var $typeheader = 'header-home2';
        //-->
    </script>

    <!-- Footer Container -->
    <footer class="footer-container">

        <?php $this->view('inc/site_footer.php'); ?>

    </footer>
    <!-- //end Footer Container -->

</div>





<link rel='stylesheet' property='stylesheet'  href='<?= base_url('media/css/') ?>themecss/cpanel.css' type='text/css' media='all' />

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