<!doctype html>
<html class="no-js" lang="en">
<head>
<?php
    require_once('config/config.php');
    require_once( DIR_BASE.'config/config.php');
    $productos = json_decode(file_get_contents(DIR_BASE.'datos/productos.json'),TRUE);	
    $producto = $productos[$_GET['producto']];
    include_once('Business/comentariosBusiness.php');
    include_once('Business/productosBusiness.php');
    require_once('DAO/comentariosDao.php');

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
        <section class="htc__product__details pt--120 pb--100 bg__white" style="margin-top:-70px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="product__details__container">
                            <!-- End Small images --> 
                            <div class="product__big__images">
                                <div class="portfolio-full-image tab-content" Style="font-size: calc(1em + 1vw);">
                                   <div role="tabpanel" class="tab-pane fade in active product-video-position" id="img-tab-1">
                                     <div class="span5">
			                          <div id="myCarousel" class="carousel slide cntr">
                                        <div class="carousel-inner">
                                            <?php  $imagenes = businessObtenerImagenesProducto($producto['id']) ; 
                                            if(!empty($imagenes)){
                                                $active = 'active';
                                                foreach($imagenes as $img){?>
                                                    <div class="item <?php echo $active; $active = '';?>">
                                                        <img src="<?php echo str_replace('small','xl',$img)?>" alt="">
                                                    </div>
                                                <?php }; ?>
                                            <?php }else{ ?>
                                                <div class="item active">
                                                    <img src="<?php echo $producto['imagen']?>" alt="full-image">
                                                </div>	
                                            <?php } ?> 
                                        </div>
                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                                    </div>
                                </div>
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
                                <span class="rat__qun"></span>
                            </div>
                            <div class="pro__details">
                                <p>Todos los productos se venden por Kg</p>
                            </div>
                            <ul class="pro__dtl__prize">
                                <li>$<?php echo $producto['precio']?></li>
                            </ul>
                            <div class="product-action-wrap">
                                <div class="prodict-statas"><span>Cantidad de kg a comprar:</span></div>
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
                                            <h2 class="title__6" style="margin-top:30px; font-size:30px;">Descripcion del producto</h2>
                                            <p><?php echo $producto['descripcion']?></p>
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
                                    <!-- validar que envia el comentario <?php 
				                		$comentario = businessObtenerComentarios();
					                	krsort($comentario);

                                        foreach( $comentario as $c){
                                            if($producto['id'] == $c['producto']){
                                                echo $c['nombre'].':'.$c['comentario'].'<br />';
                                            }
                                        }
                                     ?>                                 -->
                                </div>
                            </div> 
                        </div>
                    </div>
                    <section >
                        <!-- <?php
                        include_once(DIR_BASE.'Business/comentariosBusiness.php');
                        $comentarios= businessObtenerComentarios();
                        ?> -->
                        <?php 
				            $comentario = businessObtenerComentarios();
					         krsort($comentario);

                         foreach( $comentario as $c){
                            if($producto['id'] == $c['producto']){
                         ?>  
                        <div class="review__address__inner" style="margin-top: 50px;" >
                            <!-- Start Single Review -->
                            <div class="pro__review">
                                <div class="review__thumb">
                                    <!-- <img src="images/review/1.jpg" alt="review images"> -->
                                </div>
                                <div class="review__details">
                                    <div class="review__info">
                                        <h4><a href="#"><?php echo $c['nombre']?></a></h4>
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
                                        <span><?php echo $c['fecha']?></span>
                                    </div>
                                        <p><?php echo $c['comentario']?></p>
                                </div>
                            </div>
                        </div>
                    <?php }
                }?>                                                   

                        <!-- <div class="review__address__inner" style="margin-top: 50px;" >
                           
                            <div class="pro__review">
                                <div class="review__thumb">
                                    
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
                        </div> -->
                    </section>
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