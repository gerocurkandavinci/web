<!doctype html>
<html class="no-js" lang="en">
<?php
    require_once('config/config.php');
    require_once( DIR_BASE.'config/config.php');
?>
<head>
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
        <!-- Start Feature Product -->
        <section class="categories-slider-area bg__white">
            <div class="container">
                <div class="row">
                    <!-- Start Left Feature -->
                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 float-left-style">
                        <!-- Start Slider Area -->
                        <div class="slider__container slider--one">
                            <div class="slider__activation__wrap owl-carousel owl-theme">
                                <!-- Start Single Slide -->
                                <div class="slide slider__full--screen slider-height-inherit slider-text-right" style="background: rgba(0, 0, 0, 0) url(images/carne/slyder/frigorifico.jpg) no-repeat scroll center center / cover ;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                                <div class="slider__inner">
                                                    <h1><span class="text--theme"><br></span></h1>
                                                    <div class="slider__btn">
                                                        <a class="htc__btn" href="cart.php"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide -->
                                <!-- Start Single Slide -->
                                <div class="slide slider__full--screen slider-height-inherit  slider-text-left" style="background: rgba(0, 0, 0, 0) url(images/carne/slyder/carne.jpg) no-repeat scroll center center / cover ;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                                <div class="slider__inner">
                                                    <h1> <span class="text--theme"></span></h1>
                                                    <div class="slider__btn">
                                                        <a class="htc__btn" href="cart.php"</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide -->
                            </div>
                        </div>
                        <!-- Start Slider Area -->
                    </div>
                    <!-- Categorias lateral izquierdo -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
                        <div class="categories-menu mrg-xs">
                            <div class="category-heading">
                                <h3>Categorias</h3>
                            </div>
                            <div class="category-menu-list">
                                <ul>
                                    <li>
                                        <a href="#"><img alt="" src="">Parrilla<i class="zmdi zmdi-chevron-right"></i></a>
                                            <div class="category-menu-dropdown">
                                            <div class="category-menu-dropdown-left">
                                                <div class="category-part-1 category-common">
                                                    <h4 class="categories-subtitle">Selecciona tu corte : </h4>
                                                </div>
                                                <div class="category-part-2 category-common">
                                                    <h4 class="categories-subtitle"></h4>
                                                    <ul>
                                                    <li><a href="#">Tapa de Asado</a></li>
                                                    <li><a href="#">Entra??a</a></li>
                                                    <li><a href="#">Asado del centro</a></li>
                                                    <li><a href="#">Matambre</a></li>
                                                    <li><a href="#">Vac??o</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="category-menu-dropdown-right">
                                                <div class="menu-right-img">
                                                    <a href="#"><img src="images/carne/imgmenu/frigocenital.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                    <a href="#"><img alt="" src="">Milanesas<i class="zmdi zmdi-chevron-right"></i></a>
                                            <div class="category-menu-dropdown">
                                            <div class="category-menu-dropdown-left">
                                                <div class="category-part-1 category-common">
                                                    <h4 class="categories-subtitle">Selecciona tu corte : </h4>
                                                </div>
                                                <div class="category-part-2 category-common">
                                                    <h4 class="categories-subtitle"></h4>
                                                    <ul>
                                                    <li><a href="#">Milanesas de peceto</a></li>
                                                    <li><a href="#">Milanesas de nalga </a></li>
                                                    <li><a href="#">Milanesas de pollo</a></li>
                                                    <li><a href="#">Milanesas de bola de lomo</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="category-menu-dropdown-right">
                                                <div class="menu-right-img">
                                                    <a href="#"><img src="images/carne/imgmenu/vacanegra.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                    <a href="#"><img alt="" src="">Gourmet<i class="zmdi zmdi-chevron-right"></i></a>
                                            <div class="category-menu-dropdown">
                                            <div class="category-menu-dropdown-left">
                                                <div class="category-part-1 category-common">
                                                    <h4 class="categories-subtitle">Selecciona tu corte : </h4>
                                                </div>
                                                <div class="category-part-2 category-common">
                                                    <h4 class="categories-subtitle"></h4>
                                                    <ul>
                                                    <li><a href="#">Colita de cuadril</a></li>
                                                    <li><a href="#">Lomo</a></li>
                                                    <li><a href="#">Pica??a</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="category-menu-dropdown-right">
                                                <div class="menu-right-img">
                                                    <a href="#"><img src="images/carne/imgmenu/vacanegra2.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                    <a href="#"><img alt="" src="">Bifes<i class="zmdi zmdi-chevron-right"></i></a>
                                            <div class="category-menu-dropdown">
                                            <div class="category-menu-dropdown-left">
                                                <div class="category-part-1 category-common">
                                                    <h4 class="categories-subtitle">Selecciona tu corte : </h4>
                                                </div>
                                                <div class="category-part-2 category-common">
                                                    <h4 class="categories-subtitle"></h4>
                                                    <ul>
                                                    <li><a href="#">Paleta porcionada</a></li>
                                                    <li><a href="#">Bife de chorizo</a></li>
                                                    <li><a href="#">Ojo de bife</a></li>
                                                    <li><a href="#">Churrasquito de cuadril</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="category-menu-dropdown-right">
                                                <div class="menu-right-img">
                                                    <a href="#"><img src="images/carne/bifes/bifeancho.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                    <a href="#"><img alt="" src="">Achuras<i class="zmdi zmdi-chevron-right"></i></a>
                                            <div class="category-menu-dropdown">
                                            <div class="category-menu-dropdown-left">
                                                <div class="category-part-1 category-common">
                                                    <h4 class="categories-subtitle">Selecciona tu corte : </h4>
                                                </div>
                                                <div class="category-part-2 category-common">
                                                    <h4 class="categories-subtitle"></h4>
                                                    <ul>
                                                    <li><a href="#">Chinchulin</a></li>
                                                    <li><a href="#">Ri??on</a></li>
                                                    <li><a href="#">Falsa entra??a</a></li>
                                                    <li><a href="#">molleja</a></li>
                                                    <li><a href="#">Chorizo de cerdo</a></li>
                                                    <li><a href="#">picada especial</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="category-menu-dropdown-right">
                                                <div class="menu-right-img">
                                                    <a href="#"><img src="images/carne/achuras/chorizo.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Left Feature -->
                </div>
            </div>
        </section>
        <!-- End Feature Product -->
        <!-- Start Our Product Area -->
        <section class="htc__product__area bg__white">
            <div class="container" style='margin-top: 15px;'>
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-categories-all">
                            <div class="product-categories-title">
                                <h3>Nuestros productos</h3>
                            </div>
                            <div class="product-categories-menu">
                            <ul>
                                <li><a href="#">Tapa de Asado</a></li>
                                <li><a href="#">Entra??a</a></li>
                                <li><a href="#">Asado del centro</a></li>
                                <li><a href="#">Matambre</a></li>
                                <li><a href="#">Vac??o</a></li>
                                <li><a href="#">Milanesas de peceto</a></li>
                                <li><a href="#">Milanesas de nalga </a></li>
                                <li><a href="#">Milanesas de pollo</a></li>
                                <li><a href="#">Milanesas de bola de lomo</a></li>
                                <li><a href="#">Colita de cuadril</a></li>
                                <li><a href="#">Lomo</a></li>
                                <li><a href="#">Pica??a</a></li>
                                <li><a href="#">Paleta porcionada</a></li>
                                <li><a href="#">Bife de chorizo</a></li>
                                <li><a href="#">Ojo de bife</a></li>
                                <li><a href="#">Churrasquito de cuadril</a></li>
                                <li><a href="#">Chinchulin</a></li>
                                <li><a href="#">Ri??on</a></li>
                                <li><a href="#">Falsa entra??a</a></li>
                                <li><a href="#">molleja</a></li>
                                <li><a href="#">Chorizo de cerdo</a></li>
                                <li><a href="#">picada especial</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="product-style-tab">
                            <div class="product-tab-list">
                                <!-- Nav tabs -->
                                <ul class="tab-style" role="tablist">
                                    <li class="active">
                                        <a href="#home1" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>Ultimos buscados </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home2" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>Super Ventas</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home3" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>Lo m??s buscado</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home4" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>En Promoci??n</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content another-product-style jump">
                                <div class="tab-pane active" id="home1">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                        <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                        <?php 
                                        $productos = json_decode(file_get_contents(DIR_BASE.'datos/productos.json'));
                                        $categorias = json_decode(file_get_contents(DIR_BASE.'datos/categorias.json'));
                                        // echo json_encode($productos);
                                        
                                        foreach($productos as $dato)
                                        { 
                                           foreach($categorias as categoria){ ?>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="images/carne/parrilla/asado.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.php"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.php"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.php">asado del centro</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php  
                                            }
                                        }?>

                                            
                                            <!-- <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="images/carne/parrilla/entra??a.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.php"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.php"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.php">Entra??a</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                            <img src="images/carne/parrilla/matambre.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.php"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.php"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.php">Matambre</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                            <img src="images/carne/parrilla/tapadeasado.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.php"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.php"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.php">Tapa de asado</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                            <img src="images/carne/parrilla/vacio.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.php"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.php"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.php">Vacio</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="tab-pane" id="home4">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                            <img src="images/carne/milanesas/milacuadrada.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.php"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.php"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.php">Milanesa de cuadrara</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                            <img src="images/carne/milanesas/miladeboladelomo.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.php"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.php"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.php">Milanesa de bola de lomo</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                            <img src="images/carne/milanesas/miladepeceto.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.php"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.php"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.php">Milanesa de peceto</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                            <img src="images/carne/milanesas/milanalga.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.php"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.php"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.php">Milanesa de nalga</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                            <img src="images/carne/gourmet/lomoconcordon.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.php"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="wishlist.php"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.php">Lomo</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->
        <!-- Start Blog Area -->
        <section class="htc__blog__area bg__white pb--130" >
            <div class="container" style='margin-top: -25%;'>
                <div class="row" >
                    <div class="col-xs-12">
                        <div class="section__title section__title--2 text-center">
                            <h2 class="title__line">Noticias de Frigorifico First</h2>
                            <p>Enterate de las ultimas noticias de la casa y conoce nuestras recetas .. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog__wrap clearfix mt--60 xmt-30">
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-details.php">
                                            <img src="images/blog/flia.jpg" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">5</span>
                                                <span class="month">Mayo</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="blog-details.php"></a></p>
                                            <ul class="bl__meta">
                                                <li><a href="#"></a></li>
                                                <li></li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="blog-details.php"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-details.php">
                                            <img src="images/blog/parri.jpg" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">5</span>
                                                <span class="month">Mayo</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="blog-details.php"></a></p>
                                            <ul class="bl__meta">
                                                <li><a href="#"></a></li>
                                                <li></li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="blog-details.php"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="blog-details.php">
                                            <img src="images/blog/tabla.jpg" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">5</span>
                                                <span class="month">Mayo</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <p class="blog__des"><a href="blog-details.php"></a></p>
                                            <ul class="bl__meta">
                                                <li><a href="#"></a></li>
                                                <li></li>
                                            </ul>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="blog-details.php"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
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
        <!-- Modal  de ver el producto-->
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
                            </div>
                            <!-- .product-info -->
                        </div>
                        <!-- .modal-product -->
                    </div>
                    <!-- .modal-body -->
                </div>
                <!-- .modal-content -->
            </div>
            <!-- .modal-dialog -->
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