<?php include "database.php"; 
      session_start();

?>

<?php



  ?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/clothing-preview/clothing/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2021 06:22:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || Clothing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/icons/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
    <link rel="stylesheet" href="css/color/skin-default.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper home-one">

        <!-- Start of header area -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar black-bg clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="login-register-area">
                                <?php if(empty($_SESSION['loginchk'])){ ?>
                                <ul>
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                </ul>
                            <?php }else{ ?>
                                    <ul>
                                    <li><a href="logout.php">Logout</a></li>
                                    
                                </ul>
                           <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <div class="social-search-area text-center">
                                <div class="social-icon socile-icon-style-2">
                                    <ul>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a> </li>
                                        <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a> </li>
                                        <li> <a href="#" title="dribble"><i class="fa fa-dribbble"></i></a></li>
                                        <li> <a href="#" title="behance"><i class="fa fa-behance"></i></a> </li>
                                        <li> <a href="#" title="rss"><i class="fa fa-rss"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="cart-currency-area login-register-area text-right">
                                <ul>
                                    <li>
                                        <div class="header-currency">
                                            <select>
                                                <option value="1">USD</option>
                                                <option value="2">Pound</option>
                                                <option value="3">Euro</option>
                                                
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header-cart">
                                              <?php 
                                        if(!empty($_SESSION['loginchk'])){
                                $cartcount="SELECT count(*) as count from cart where user_id='".$_SESSION['user_id']."'"; 
                                $resultcnt=mysqli_query($conn,$cartcount);
                                $data=mysqli_fetch_assoc($resultcnt);
                                    $cnt= $data['count'];          
                                        }
                                        else{
                                          $cnt= 0;   
                                        }

                                              ?>  

                                            <div class="cart-icon"> <a href="cart.php">Cart<i
                                                        class="zmdi zmdi-shopping-cart"></i></a> <span><?php echo $cnt; ?></span> </div>
                                           <!-- <div class="cart-content-wraper">
                                                <div class="cart-single-wraper">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="images/product/01.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <div class="cart-name"> <a href="#">Aenean Eu Tristique</a>
                                                        </div>
                                                        <div class="cart-price"> $70.00 </div>
                                                        <div class="cart-qty"> Qty: <span>1</span> </div>
                                                    </div>
                                                    <div class="remove"> <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart-single-wraper">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="images/product/02.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <div class="cart-name"> <a href="#">Aenean Eu Tristique</a>
                                                        </div>
                                                        <div class="cart-price"> $70.00 </div>
                                                        <div class="cart-qty"> Qty: <span>1</span> </div>
                                                    </div>
                                                    <div class="remove"> <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart-subtotal"> Subtotal: <span>$200.00</span> </div>
                                                <div class="cart-check-btn">
                                                    <div class="view-cart"> <a class="btn-def" href="cart.html">View
                                                            Cart</a> </div>
                                                    <div class="check-btn"> <a class="btn-def"
                                                            href="checkout.html">Checkout</a> </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <div class="col-md-2" style="text-align:center;">
                                <div class="logo ptb-0"><a href="index.php">
                                        <img src="../admin/images/logo1.png" alt="main logo" height="30%" width="50%"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-10 d-none d-md-block">
                                <nav id="primary-menu">
                                    <ul class="main-menu">
                                        <li class="current"><a class="active" href="index.php">Home</a>
                                           
                                        </li>

                                         <?php 
                              $selectcat="select * from categories";
                              $res=mysqli_query($conn,$selectcat);
                              while ($row=mysqli_fetch_assoc($res)) {
                                $cat_id = $row['id'];
                                ?>
                                        <li class="mega-parent pos-rltv"><a href="productlist_cat.php?cat=<?php echo $cat_id; ?>"><?php echo $row['categories'] ?></a>
                                            <div class="mega-menu-area mma-800">
                                                <ul class="single-mega-item">
                                                   <?php 
                              $selectsub_cat="select * from sub_categories WHERE categories_id =$cat_id";
                              $re=mysqli_query($conn,$selectsub_cat);
                              while ($row1=mysqli_fetch_assoc($re)) {
                                ?>




                                                    <li ><a href="productlist.php?subcat=<?php echo $row1['id'] ?>"><?php echo $row1['sub_categories'] ?></a></li>
                                                    <!-- <li><a href="productlist.php?subcat=6">Plazo</a></li>
                                                    <li><a href="productlist.php?subcat=7">Pant</a></li>
                                                    <li><a href="productlist.php?subcat=8">Salwar</a></li> -->
                                                    
                                                <?php } ?>
                                                </ul>
                                                
                      
                                            </div> 
                                        </li>
                                    <?php } ?>
                                       <!--  <li class="mega-parent pos-rltv"><a href="productlist_cat.php?cat=8">Kurti</a>
                                            <div class="mega-menu-area mma-700">
                                                <ul class="single-mega-item">
                                                    <li ><a href="productlist.php?subcat=9">Aline</a></li>
                                                    <li><a href="productlist.php?subcat=10">Straight</a></li>
                                                    <li><a href="productlist.php?subcat=11">Flared</a></li>
                                                    
                                                </ul>
                                                
                                                
                                            </div>
                                        </li>
                                        <li class="mega-parent"><a href="productlist_cat.php?cat=9">Dress material</a>
                                            <div class="mega-menu-area mma-970">
                                                <ul class="single-mega-item">
                                                    
                                                    <li><a href="productlist.php?subcat=12">
                                                           Casual Wear</a></li>
                                                    <li><a href="productlist.php?subcat=13">Party Wear</a></li>
                                                   
                                                </ul>
                                               
                                            </div>
                                        </li>
                                        <li class="mega-parent"><a href="productlist_cat.php?cat=10">Bottom</a>
                                            <div class="mega-menu-area mma-970">
                                                <ul class="single-mega-item coloum-4">
                                                   
                                                    <li><a href="productlist.php?subcat=14" >Pant</a></li>
                                                    <li><a href="productlist.php?subcat=15" >Plazzo</a></li>
                                                    <li><a href="productlist.php?subcat=16">Leggins</a></li>
                                                    <li><a href="productlist.php?subcat=17">Jeans</a></li>
                                                    
                                                </ul>
                                                
                                            </div>
                                        </li>
 -->
                                      <!--  <li class="mega-parent"><a href="productlist_cat.php?cat=11">Branded Collection</a>
                                          -->   
                                            
                                        </li> 
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="about-us.php">About</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block">
                                <div class="search-box global-table">
                                    <div class="global-row">
                                        <div class="global-cell">
                                            <form method="GET" action="search.php">
                                                <div class="input-box">
                                                    <input class="single-input" placeholder="Search"
                                                        type="text" name="searchtext">
                                                    <button class="src-btn"><i class="fa fa-search" type="submit" name="search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- mobile-menu-area start -->
                            <div class="mobile-menu-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <nav id="dropdown">
                                                <ul>
                                                    <li><a href="index.html">Home</a>
                                                        <ul>
                                                            <li><a class="active" href="index.html">Home One</a></li>
                                                            <li><a href="index-2.html">Home Two</a></li>
                                                            <li><a href="index-boxed-01.html">Home Three (Boxed)</a>
                                                            </li>
                                                            <li><a href="index-boxed-02.html">Home Four (Boxed)</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Readymade</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shop.html">Shirt 01</a></li>
                                                            <li><a href="shop.html">Shirt 02</a></li>
                                                            <li><a href="shop.html">Shirt 03</a></li>
                                                            <li><a href="shop.html">Shirt 04</a></li>
                                                            <li><a href="shop.html">Pant 01</a></li>
                                                            <li><a href="shop.html">Pant 02</a></li>
                                                            <li><a href="shop.html">Pant 03</a></li>
                                                            <li><a href="shop.html">Pant 04</a></li>
                                                            <li><a href="shop.html">T-Shirt 01</a></li>
                                                            <li><a href="shop.html">T-Shirt 02</a></li>
                                                            <li><a href="shop.html">T-Shirt 03</a></li>
                                                            <li><a href="shop.html">T-Shirt 04</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Shop</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shop.html">Sharee 01</a></li>
                                                            <li><a href="shop.html">Sharee 02</a></li>
                                                            <li><a href="shop.html">Sharee 03</a></li>
                                                            <li><a href="shop.html">Sharee 04</a></li>
                                                            <li><a href="shop.html">Sharee 05</a></li>
                                                            <li><a href="shop.html">Lahenga 01</a></li>
                                                            <li><a href="shop.html">Lahenga 02</a></li>
                                                            <li><a href="shop.html">Lahenga 03</a></li>
                                                            <li><a href="shop.html">Lahenga 04</a></li>
                                                            <li><a href="shop.html">Lahenga 05</a></li>
                                                            <li><a href="shop.html">Sandel 01</a></li>
                                                            <li><a href="shop.html">Sandel 02</a></li>
                                                            <li><a href="shop.html">Sandel 03</a></li>
                                                            <li><a href="shop.html">Sandel 04</a></li>
                                                            <li><a href="shop.html">Sandel 05</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Shortcode</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shortcode-banner.html"
                                                                    target="_blank">shortcode-banner</a></li>
                                                            <li><a href="shortcode-best-top-on-sale-slider.html"
                                                                    target="_blank">too-on-sale</a></li>
                                                            <li><a href="shortcode-blog-item.html" target="_blank">Short
                                                                    Blog Item</a></li>
                                                            <li><a href="shortcode-brand-prodcut.html"
                                                                    target="_blank">Brand Product</a></li>
                                                            <li><a href="shortcode-brand-slider.html"
                                                                    target="_blank">Brand Slider</a></li>

                                                            <li><a href="shortcode-breadcrumb.html"
                                                                    target="_blank">Breadcrumb</a></li>
                                                            <li><a href="shortcode-related-product.html"
                                                                    target="_blank">Related Product</a></li>
                                                            <li><a href="shortcode-service.html"
                                                                    target="_blank">Service</a></li>
                                                            <li><a href="shortcode-skill.html" target="_blank">Skill</a>
                                                            </li>
                                                            <li><a href="shortcode-slider.html"
                                                                    target="_blank">Slider</a></li>

                                                            <li><a href="shortcode-team.html" target="_blank">Team</a>
                                                            </li>
                                                            <li><a href="shortcode-testimonial.html"
                                                                    target="_blank">Testimonial</a></li>
                                                            <li><a href="shortcode-why-choose-us.html"
                                                                    target="_blank">Why Choose Us</a></li>
                                                        </ul>
                                                    </li>
                                                    <li> <a href="#">Pages</a>
                                                        <ul class="single-mega-item coloum-4">
                                                            <li><a href="about-us.html" target="_blank">About-us</a>
                                                            </li>
                                                            <li><a href="blog.html" target="_blank">Blog</a></li>
                                                            <li><a href="blog-right.html" target="_blank">Blog-Right</a>
                                                            </li>
                                                            <li><a href="single-blog.html" target="_blank">Single
                                                                    Blog</a></li>
                                                            <li><a href="single-blog-right.html" target="_blank">Single
                                                                    Blog Right</a></li>
                                                            <li><a href="blog-full.html"
                                                                    target="_blank">Blog-Fullwidth</a></li>
                                                            <li class="menu-title uppercase">pages-02</li>
                                                            <li><a href="blog-full-right.html" target="_blank">Blog Ful
                                                                    Rightl</a></li>
                                                            <li><a href="cart.html" target="_blank">Cart</a></li>
                                                            <li><a href="checkout.html" target="_blank">Checkout</a>
                                                            </li>
                                                            <li><a href="compare.html" target="_blank">Compare</a></li>
                                                            <li><a href="complete-order.html" target="_blank">Complete
                                                                    Order</a></li>
                                                            <li><a href="contact-us.html" target="_blank">Contact US</a>
                                                            </li>
                                                            <li class="menu-title uppercase">pages-03</li>
                                                            <li><a href="login.html" target="_blank">Login</a></li>
                                                            <li><a href="my-account.html" target="_blank">My Account</a>
                                                            </li>
                                                            <li><a href="shop-full-grid.html" target="_blank">Shop Full
                                                                    Grid</a></li>
                                                            <li><a href="shop-full-list.html" target="_blank">Shop Full
                                                                    List</a></li>
                                                            <li><a href="shop-list-right-sidebar.html"
                                                                    target="_blank">Shop List Right</a></li>
                                                            <li><a href="shop-list.html" target="_blank">Shop List</a>
                                                            </li>
                                                            <li class="menu-title uppercase">pages-03</li>
                                                            <li><a href="shop-right-sidebar.html" target="_blank">Shop
                                                                    Right</a></li>
                                                            <li><a href="shop.html" target="_blank">Shop</a></li>
                                                            <li><a href="single-product.html" target="_blank">Single
                                                                    Prodcut</a></li>
                                                            <li><a href="wishlist.html" target="_blank">Wishlist</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="about-us.html">about</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--mobile menu area end-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of header area -->