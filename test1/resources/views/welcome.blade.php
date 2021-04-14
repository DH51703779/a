<!doctype html>

<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shop ban hang </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/themily-icon.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/fonts/icomoon/style.css')}}">
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{('public/frontend/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <div class="flag">
                                        <img src="{{asset('public/frontend/img/icon/header_icon.png')}}" alt="">
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select1">
                                                    <option value="">USA</option>
                                                    <option value="">SPN</option>
                                                    <option value="">CDA</option>
                                                    <option value="">USD</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="contact-now">     
                                        <li>+777 2345 7886</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                   <ul>                                          
                                       <li><a href="login.html">My Account </a></li>
                                       <li><a href="">Wish List  </a></li>
                                       <li><a href="cart.html">Shopping</a></li>
                                       <li><a href="cart.html">Cart</a></li>
                                       <li><a href="checkout.html">Checkout</a></li>
                                   </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                  <a href="index.html"><img src="{{asset('public/frontend/img/logo/logo.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
                                            <!-- <li><a href="Catagori.html">Catagori</a></li> -->
                                            <li class="hot"><a href="{{URL::to('/productlist')}}">Product list</a>
                                                <!-- <ul class="submenu">
                                                    <li><a href="{{URL::to('/productlist')}}"> </a></li>
                                                    <li><a href="single-product.html"> </a></li>
                                                </ul> -->
                                            </li>
                                            <!-- <li><a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="cart.html">Card</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="confirmation.html">Confirmation</a></li>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="checkout.html">Product Checkout</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- <li><a href="contact.html">Contact</a></li> -->
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <!-- <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                     </li> -->
                                    <!-- <li class=" d-none d-xl-block">
                                        <div class="favorit-items">
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </li> -->
                                    <li>
                                        <div class="shopping-card">
                                            <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>
                                    <?php 
					$username=Session::get('user_name');
					if($username){	?>
                        <li class="d-none d-lg-block"> <a href="{{URL::to('/logout')}}" class="btn header-btn">log out</a></li>
					<?php }	
                    else {
                       ?> <li class="d-none d-lg-block"> <a href="{{URL::to('/login')}}" class="btn header-btn">Sign in</a></li>
				    <?php     }   ?>
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>
<?php
use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;
?>
        <!-- slider Area Start -->
   
        <!-- slider Area End-->
        <!-- Category Area Start-->
        @yield('content')
        @yield('detail')
        @yield('cart')
        @yield('login')
        @yield('dangky')
        @yield('productlist')
        <!-- Best Collection End -->
        <!-- Latest Offers Start -->
        <div class="latest-wrapper lf-padding">
            <div class="latest-area latest-height d-flex align-items-center" data-background="{{('public/upload/product/banner.jpg')}}">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                            <div class="latest-caption">
                                <h2>Get Our<br>Latest Offers News</h2>
                                <p>Subscribe news latter</p>
                            </div>
                        </div>
                         <div class="col-xl-5 col-lg-5 col-md-6 ">
                            <div class="latest-subscribe">
                                <form action="#">
                                    <input type="email" placeholder="Your email here">
                                    <button>Shop Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- man Shape -->
                <div class="man-shape">
                    <img src="{{('public/upload/product/banner.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <!-- Latest Offers End -->
        <!-- Shop Method Start-->
        <div class="shop-method-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-package"></i>
                            <h6>Free Shipping Method</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
        <!-- Gallery Start-->
        <div class="gallery-wrapper lf-padding">
            <div class="gallery-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="gallery-items">
                            <img src="{{('public/frontend/img/gallery/gallery1.jpg')}}" alt="">
                        </div> 
                        <div class="gallery-items">
                            <img src="{{('public/frontend/img/gallery/gallery2.jpg')}}" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="{{('public/frontend/img/gallery/gallery3.jpg')}}" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="{{('public/frontend/img/gallery/gallery4.jpg')}}" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="{{('public/frontend/img/gallery/gallery5.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End-->

    </main>
   <footer>

       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{('public/frontend/img/logo/logo2_footer.png')}}s" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                               </div>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Quick Links</h4>
                               <ul>
                                   <li><a href="#">About</a></li>
                                   <li><a href="#"> Offers & Discounts</a></li>
                                   <li><a href="#"> Get Coupon</a></li>
                                   <li><a href="#">  Contact Us</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>New Products</h4>
                               <ul>
                                   <li><a href="#">Woman Cloth</a></li>
                                   <li><a href="#">Fashion Accessories</a></li>
                                   <li><a href="#"> Man Accessories</a></li>
                                   <li><a href="#"> Rubber made Toys</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Support</h4>
                               <ul>
                                <li><a href="#">Frequently Asked Questions</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Report a Payment Issue</a></li>
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- Footer bottom -->
               <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="footer-copy-right">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                   </div>
                </div>
                 <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="footer-copy-right f-right">
                        <!-- social -->
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                    </div>
                </div>
            </div>
           </div>
       </div>
       <!-- Footer End-->

   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('public/frontend/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('public/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('public/frontend/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/slick.min.js')}}"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('public/frontend/js/wow.min.js')}}"></script>
		<script src="{{asset('public/frontend/js/animated.headline.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('public/frontend/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{asset('public/frontend/js/contact.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.form.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/mail-script.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('public/frontend/js/plugins.js')}}"></script>
        <script src="{{asset('public/frontend/js/main.js')}}"></script>
        
  <!-- swiper js -->
  <script src="{{asset('public/frontend/js/swiper.min.js')}}"></script>
            <!-- swiper js -->
        <script src="{{asset('public/frontend/js/mixitup.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/waypoints.min.js')}}"></script>
        



    


    </body>
</html>