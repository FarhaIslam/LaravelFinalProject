



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
  
</head>
<style type="text/css">.paymentWrap {
    padding: 50px;
}

.paymentWrap .paymentBtnGroup {
    max-width: 800px;
    margin: auto;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
    padding: 40px;
    box-shadow: none;
    position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
    outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
    border-color: #4cd264;
    outline: none !important;
    box-shadow: 0px 3px 22px 0px #7b7b7b;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
    position: absolute;
    right: 3px;
    top: 3px;
    bottom: 3px;
    left: 3px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    border: 2px solid transparent;
    transition: all 0.5s;
}


.paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
    background-image: url("https://image.winudf.com/v2/image/Y29tLmNyZWF0aXZlYXBwc2JkLmJrYXNoX3NjcmVlbl8wXzE1MjY5MDkzOTdfMDU1/screen-0.jpg?fakeurl=1&type=.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.vishwa {
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROmaRaRIUrkTzRvu1UgsiJQ0YVqTbsNQoqafbhsizBeDMA_s3X&s");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.ez-cash {
    background-image: url("https://lh3.googleusercontent.com/xodZSlJ7hqm7i8Txsgyy8fQtTtSNtb9kywyVB2S8CqSUGUvRyB9brq0ExXsSbEWKFkw");
}


.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
    border-color: #4cd264;
    outline: none !important;
}</style>
<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i>Help Line</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> farhaislam@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <!--li><a href="#"><i class="fa fa-linkedin"></i></a></li-->
                                <!--li><a href="#"><i class="fa fa-dribbble"></i></a></li-->
                                <!--li><a href="#"><i class="fa fa-google-plus"></i></a></li-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                       
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>

                              <?php
                                $customer_id=Session::get('customer_id');
                              ?>
                              <?php if($customer_id != NULL){ ?>
                                       <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                              
                                <?php } else{ ?>
                                 
                                    
                              <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>


                                 <?php } ?>
                                <li><a href="{{URL::to('/cart-show')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>

                              
                             <?php if($customer_id != NULL){ ?>

                               <li><a href="{{URL::to('/customer-logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                                <?php } else{ ?>
                                  <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i> Login</a></li>
                                     <?php } ?>
                              


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
                                        <li><a href="product-details.html">Product Details</a></li> 
                                      <?php
                                $customer_id=Session::get('customer_id');
                              ?>
                              <?php if($customer_id != NULL){ ?>
                                <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                              
                                <?php } else{ ?>
                                 
                                    
                              <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>


                                 <?php } ?>
                                        <li><a href="{{URL::to('/cart-show')}}">Cart</a></li> 
                                        
                                    </ul>
                                </li> 
                               
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
             

                             

   

    
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                
                           <?php
                                  $all_published_category=DB::table('tbl_category')
                                  ->where('publication_status',1)
                                  ->get();
                                  foreach( $all_published_category as $v_category){?>
                                 
                                   <div class="panel panel-default">
                                    <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></h4>
                                </div>

                                </div>
                                   <?php } ?>
                            </div>
                        

                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">

                                <?php
                                  $all_published_manufacture=DB::table('manufacture')
                                  ->where('publication_status',1)
                                  ->get();
                                  foreach( $all_published_manufacture as $v_manufacture){?>
                                    <li><a href="{{URL::to('/product_by_manufacture/'.$v_manufacture->manufacture_id)}}"> <span class="pull-right"></span>{{$v_manufacture->manufacture_name}}</a></li>
                                       <?php } ?>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                       
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        @yield('content')
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>e</span>-shopper</h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe1.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p></p>
                                <h2></h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe2.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p></p>
                                <h2></h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe3.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p></p>
                                <h2></h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe4.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <!--p>Circle of Hands</p-->
                                <!--h2>24 DEC 2014</h2-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.png" alt="" />
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Mobiles</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">Tab</a></li>
                                <li><a href="#">Smart Watch</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
