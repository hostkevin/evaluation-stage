<?php $row=null; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Electro - HTML Ecommerce Template</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>front/css/bootstrap.min.css"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>front/css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>front/css/slick-theme.css"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>front/css/nouislider.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="<?php echo base_url() ?>front/css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>front/css/style.css"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <!-- HEADER -->
        <header>
            <!-- TOP HEADER -->
            <div id="top-header">
                <div class="container">
                    <ul class="header-links pull-left">
                        <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i><?php echo $utilisateur ?></a></li>
                        <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
                    </ul>
                    <ul class="header-links pull-right">
                        <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                        <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                    </ul>
                </div>
            </div>
            <!-- /TOP HEADER -->

            <!-- MAIN HEADER -->
            <div id="header">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- LOGO -->
                        <div class="col-md-3">
                            <div class="header-logo">
                                <a href="#" class="logo">
                                    <img src="./img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- /LOGO -->

                        <!-- SEARCH BAR -->
                        <div class="col-md-6">
                            <div class="header-search">
                                <form action="<?php echo site_url() ?>/frontofficeController/Front/recherche" method="post">
                                  
                                    <input class="input" placeholder="Search here" name="recherche">
                                    <button class="search-btn">Search</button>
                                </form>
                            </div>
                        </div>
                        <!-- /SEARCH BAR -->

                        <!-- ACCOUNT -->
                        <div class="col-md-3 clearfix">
                            <div class="header-ctn">
                                <!-- Wishlist -->
                               
                                <!-- /Wishlist -->

                                <!-- Cart -->
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Your Cart</span>
                                        <div class="qty">3</div>
                                    </a>
                                    <div class="cart-dropdown">
                                        <div class="cart-list">
                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <img src="./img/product01.png" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                    <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                                </div>
                                                <button class="delete"><i class="fa fa-close"></i></button>
                                            </div>

                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <img src="./img/product02.png" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                    <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                                </div>
                                                <button class="delete"><i class="fa fa-close"></i></button>
                                            </div>
                                        </div>
                                        <div class="cart-summary">
                                            <small>3 Item(s) selected</small>
                                            <h5>SUBTOTAL: $2940.00</h5>
                                        </div>
                                        <div class="cart-btns">
                                            <a href="#">View Cart</a>
                                            <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cart -->

                                <!-- Menu Toogle -->
                                <div class="menu-toggle">
                                    <a href="#">
                                        <i class="fa fa-bars"></i>
                                        <span>Menu</span>
                                    </a>
                                </div>
                                <!-- /Menu Toogle -->
                            </div>
                        </div>
                        <!-- /ACCOUNT -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- /MAIN HEADER -->
        </header>
        <!-- /HEADER -->

        <!-- NAVIGATION -->
        <nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url(); ?>/frontofficeController/Front/index">Home</a></li>
                        <li><a href="<?php echo site_url(); ?>/frontofficeController/Front/trajet_view">Trajet</a></li>
                        <li><a href="<?php echo site_url(); ?>/Echeance/index">Echeance</a></li>
                          <li><a href="<?php echo site_url(); ?>/LoginController/Login/deconnexion_utilisateur">Deconnexion</a></li>
                          <li><a href="<?php echo site_url(); ?>/frontofficeController/Garage/index">Garage</a></li>
                          
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
        <!-- /NAVIGATION -->
          <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- shop -->
                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="<?php echo base_url() ?>upload/img/c4.jpg" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Vehicule<br>Collection</h3>
                                <a href="#" class="cta-btn"> <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /shop -->

                    <!-- shop -->
                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="<?php echo base_url() ?>upload/img/clio5.jpg" alt="">
                            </div>
                            <div class="shop-body">
                               <h3>Vehicule<br>Collection</h3>
                                <a href="#" class="cta-btn"><i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /shop -->

                    <!-- shop -->
                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="<?php echo base_url() ?>upload/img/x2.jpg" alt="">
                            </div>
                            <div class="shop-body">
                               <h3>Vehicule<br>Collection</h3>
                                <a href="#" class="cta-btn"> <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /shop -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->
        <!-- SECTION -->
       <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
          <div class="col-md-12">
                        <div class="section-title">
                        
                             
                            <h3 class="title"> RESULTAT(S) DE VOTRE RECHERCHE :     </h3>
                          
                        </div>
                    </div>
                   

                    <!-- Products tab & slick -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="products-tabs">
                                <!-- tab -->
                                <div id="tab1" class="tab-pane active">
                                   <div class="products-slick" data-nav="#slick-nav-1">
                                        <!-- product -->
                                               
                                    
                                             <?php $row=$search->num_rows();?> 
                                            
                                             <?php if($row>0){ ?>
                                        <?php foreach($search->result() as $produit) { ?>
                               
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="<?php echo base_url() ?>upload/img/<?php echo $produit->image ?>" alt="">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Modele <?php echo $produit->modele ?></p>
        
                                                <h4 class="product-category">Type : <?php echo $produit->type ?> </h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                              
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="<?php echo site_url() ?>/frontofficeController/Front/voirlesdetails?id=<?php echo $produit->id ?>&voiture=<?php echo $produit->modele ?>"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> voir les options</button></a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <!-- /product -->
                                        <?php }  ?>
                                       
                                    </div>
                                    <div id="slick-nav-1" class="products-slick-nav"></div>
                                </div>
                                <!-- /tab -->
                            </div>
                        </div>
                    </div>
                    <!-- Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <!-- HOT DEAL SECTION -->
       
        <!-- /HOT DEAL SECTION -->

        <!-- SECTION -->
        
                <!-- row -->
        <!-- /SECTION -->

        <!-- SECTION -->
      
        <!-- /SECTION -->

        <!-- NEWSLETTER -->
        <div id="newsletter" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsletter">
                            <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                            <form>
                                <input class="input" type="email" placeholder="Enter Your Email">
                                <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                            </form>
                            <ul class="newsletter-follow">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /NEWSLETTER -->

        <!-- FOOTER -->
        <footer id="footer">
            <!-- top footer -->
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">About Us</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                                <ul class="footer-links">
                                    <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Categories</h3>
                                <ul class="footer-links">
                                    <li><a href="#">Hot deals</a></li>
                                    <li><a href="#">Laptops</a></li>
                                    <li><a href="#">Smartphones</a></li>
                                    <li><a href="#">Cameras</a></li>
                                    <li><a href="#">Accessories</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="clearfix visible-xs"></div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Information</h3>
                                <ul class="footer-links">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Orders and Returns</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Service</h3>
                                <ul class="footer-links">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">View Cart</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /top footer -->

            <!-- bottom footer -->
            <div id="bottom-footer" class="section">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="footer-payments">
                                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                                <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                            </ul>
                            <span class="copyright">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </span>
                        </div>
                    </div>
                        <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /bottom footer -->
        </footer>
        <!-- /FOOTER -->

        <!-- jQuery Plugins -->
        <script src="<?php echo base_url() ?>front/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>front/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>front/js/slick.min.js"></script>
        <script src="<?php echo base_url() ?>front/js/nouislider.min.js"></script>
        <script src="<?php echo base_url() ?>front/js/jquery.zoom.min.js"></script>
        <script src="<?php echo base_url() ?>front/js/main.js"></script>

    </body>
</html>
