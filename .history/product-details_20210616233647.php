<!doctype html>
<html class="no-js" lang="en">
<head>
<?php
    require_once('config/config.php');
    require_once( DIR_BASE.'config/config.php');
    $productos = json_decode(file_get_contents(DIR_BASE.'datos/productos.json'),TRUE);	
    $producto = $productos[$_GET['producto']];
?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Frigorifico First</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/first1.png">
    <link rel="apple-touch-icon" href="images/logo/first1.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
       <!-- Start Header Style -->
             <!-- Start Mainmenu Ares -->
             <?php require_once(DIR_BASE.'include/menu/menu.php')  ?>
             <!-- Start Cart Panel -->
             <?php require_once(DIR_BASE.'include/menu/cartView.php'); ?>
            <!-- End Cart Panel -->
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <!-- <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Product Details</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Product Details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Bradcaump area -->
        <!-- Start Product Details -->
        <section class="htc__product__details pt--120 pb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="product__details__container">
                            <!-- Start Small images -->
                            <ul class="product__small__images" role="tablist">
                                <li role="presentation" class="pot-small-img active">
                                    <a href="#img-tab-1" role="tab" data-toggle="tab">
                                        <img src="images/product-details/small-img/2.jpg" alt="small-image">
                                    </a>
                                </li>
                            </ul>
                            <!-- End Small images --> 
                            <div class="product__big__images">
                                <div class="portfolio-full-image tab-content" Style="font-size: calc(1em + 1vw);">
                                    <div role="tabpanel" class="tab-pane fade in active product-video-position" id="img-tab-1">
                                        <img src="<?php echo $producto['imagen']?>" alt="full-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                        <div class="htc__product__details__inner">
                            <div class="pro__detl__title">
                                <h2><?php echo $producto['nombre']?></h2>
                            </div>
                            <div class="pro__dtl__rating">
                                <ul class="pro__rating">
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                </ul>
                                <span class="rat__qun">(Based on 0 Ratings)</span>
                            </div>
                            <div class="pro__details">
                                <p>Descripcion del producto falta armar </p>
                            </div>
                            <ul class="pro__dtl__prize">
                                <li>$<?php echo $producto['precio']?></li>
                            </ul>
                            <div class="product-action-wrap">
                                <div class="prodict-statas"><span>Cantidad :</span></div>
                                <div class="product-quantity">
                                    <form id='myform' method='POST' action='#'>
                                        <div class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <ul class="pro__dtl__btn">
                                <li class="buy__now__btn"><a href="#">buy now</a></li>
                                <li><a href="#"><span class="ti-heart"></span></a></li>
                                <li><a href="#"><span class="ti-email"></span></a></li>
                            </ul>
                            <div class="pro__social__share">
                                <h2>Share :</h2>
                                <ul class="pro__soaial__link">
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Details -->
        <!-- Start Product tab -->
        <section class="htc__product__details__tab bg__white pb--120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <ul class="product__deatils__tab mb--60" role="tablist">
                            <!-- <li role="presentation" class="active">
                                <a href="#description" role="tab" data-toggle="tab">Description</a>
                            </li>
                            <li role="presentation">
                                <a href="#sheet" role="tab" data-toggle="tab">Data sheet</a>
                            </li> -->
                            <li role="presentation"class="active">
                                <a href="#reviews" role="tab" data-toggle="tab">Reviews</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="product__details__tab__content">
                            <!-- Start Single Content -->
                            <!-- <div role="tabpanel" id="description" class="product__tab__content fade in active">
                                <div class="product__description__wrap">
                                    <div class="product__desc">
                                        <h2 class="title__6">Details</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis noexercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
                                    </div>
                                    <div class="pro__feature">
                                        <h2 class="title__6">Features</h2>
                                        <ul class="feature__list">
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            <!-- </div> --> 
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <!-- <div role="tabpanel" id="sheet" class="product__tab__content fade"> -->
                                <!-- <div class="pro__feature">
                                        <h2 class="title__6">Data sheet</h2>
                                        <ul class="feature__list">
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                        </ul>
                                    </div> -->
                            <!-- </div> -->
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="reviews" class="product__tab__content fade">
                                <div class="review__address__inner">
                                    <!-- Start Single Review -->
                                    <div class="pro__review">
                                        <div class="review__thumb">
                                            <img src="images/review/1.jpg" alt="review images">
                                        </div>
                                        <div class="review__details">
                                            <div class="review__info">
                                                <h4><a href="#">Gerald Barnes</a></h4>
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                </ul>
                                                <div class="rating__send">
                                                    <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="review__date">
                                                <span>27 Jun, 2016 at 2:30pm</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                    <!-- Start Single Review -->
                                    <div class="pro__review ans">
                                        <div class="review__thumb">
                                            <img src="images/review/2.jpg" alt="review images">
                                        </div>
                                        <div class="review__details">
                                            <div class="review__info">
                                                <h4><a href="#">Gerald Barnes</a></h4>
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                </ul>
                                                <div class="rating__send">
                                                    <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="review__date">
                                                <span>27 Jun, 2016 at 2:30pm</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                </div>
                                <!-- Start RAting Area -->
                                <div class="rating__wrap">
                                    <h2 class="rating-title">Write  A review</h2>
                                    <h4 class="rating-title-2">Your Rating</h4>
                                    <div class="rating__list">
                                        <!-- Start Single List -->
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                        <!-- Start Single List -->
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                        <!-- Start Single List -->
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                        <!-- Start Single List -->
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                        <!-- Start Single List -->
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                    </div>
                                </div>
                                <!-- End RAting Area -->
                                <div class="review__box">
                                    <form id="review-form">
                                        <div class="single-review-form">
                                            <div class="review-box name">
                                                <input type="text" placeholder="Type your name">
                                                <input type="email" placeholder="Type your email">
                                            </div>
                                        </div>
                                        <div class="single-review-form">
                                            <div class="review-box message">
                                                <textarea placeholder="Write your review"></textarea>
                                            </div>
                                        </div>
                                        <div class="review-btn">
                                            <a class="fv-btn" href="#">submit review</a>
                                        </div>
                                    </form>                                
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </section>
        <!-- End Product tab -->
        <!-- Start Footer Area -->
        <footer class="htc__foooter__area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="footer__container clearfix">
                    <?php require_once(DIR_BASE.'include/footer/footer.php'); ?>
                    </div>
                </div>
                <!-- Start Copyright Area -->
                <?php require_once(DIR_BASE.'include/footer/copyright.php'); ?>
                <!-- End Copyright Area -->
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="images/product/big-img/1.jpg">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">$17.20</span>
                                        <span class="old-price">$45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Red" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>