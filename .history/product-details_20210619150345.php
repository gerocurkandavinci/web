<!doctype html>
<html class="no-js" lang="en">
<head>
<?php
    require_once('config/config.php');
    require_once( DIR_BASE.'config/config.php');
    $productos = json_decode(file_get_contents(DIR_BASE.'datos/productos.json'),TRUE);	
    $producto = $productos[$_GET['producto']];

    if(isset($_POST['submitCom'])){ 
		businessGuardarComentario($_POST);
	}
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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section>
                <section  class="htc__product__details__tab bg__white pb--120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">                          
                                <div class="product__details__tab__content">
                                     <div class="product__description__wrap">
                                        <div class="product__desc">
                                            <h2 class="title__6">Descripcion del producto</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis noexercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="review__address__inner">
                            <div class="review__box">
                                <h2 class="title__6">Deja tu comentario</h2>
                                    <form name="comentario" method="POST" action="" enctype="">
                                        <div class="single-review-form">
                                            <div class="review-box name">
                                                <input name="nombre" type="text" placeholder="Nombre">
                                                <input name="email" type="email" placeholder="Correo electronico">
                                            </div>
                                        </div>
                                        <div class="single-review-form">
                                            <div class="review-box message">
                                                <textarea name="comentario" placeholder="Escribe su mensaje"></textarea>
                                            </div>
                                        </div>
                                        <div class="review-btn">
                                            <input type="submit" name="submitCom" value="Enviar">
                    				        <input type="hidden" name="producto" value="<?php echo $producto['id']?>">
                                        </div>
                                    </form>                                
                                </div>
                            </div> 
                        </div>
                    </div>
                </section>
            </section>
        </section>
        
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