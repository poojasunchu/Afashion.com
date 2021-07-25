 <?php 

include "header.php";
include "database.php";
//$_SESSION['refer']=$_SERVER['HTTP_REFERER'];
 ?>




   <!--slider area start-->
        <div class="slider-area pos-rltv carosule-pagi cp-line">
            <div class="active-slider">
                 <?php
                    $get_slider="select * from slider LIMIT 3";
                    $run_slider= mysqli_query($conn,$get_slider);
                    while($row=mysqli_fetch_array($run_slider)){
                        $name=$row['name'];
                        $image=$row['image'];
                        echo"<div class='item-active'><img src='../admin/uploads/$image'> </div>";
                    }
                    ?>
                     
                                          
                   </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--slider area start-->

        

   

        <!--new arrival area start-->
        <div class="new-arrival-area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">New Arrival</h5>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">

<?php
 $select ="select * from product";  
 $res=mysqli_query($conn,$select);
     while($re=mysqli_fetch_assoc($res)) {
        # code...
    ?>



                            <!--dyanmin product-->
                            <div class="col-lg-3">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                       
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="singleproduct.php?proid=<?php echo $re['id']; ?>"> 
                                                    <?php $img='../admin/uploads/'.$re['image'] ?>
                                                <img alt="" src="<?php echo $img; ?>"
                                                    class="primary-image">  </a>
                                        </div>
                                        <div class="product-icon socile-icon-tooltip text-center">
                                            <ul>
                                                <li><a href="cart.php" data-tooltip="Add To Cart" class="add-cart"
                                                        data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                <li><a href="whishlist.php?proid=<?php echo $re['id']; ?>" data-tooltip="Wishlist" class="w-list"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <?php $ids=$re['id']; ?>
                                        <div class="prodcut-name"> <a href="singleproduct.php?proid=<?php echo $re['id']; ?>"><?php echo $re['name']; ?></a>
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-price">
                                                <div class="new-price"> <?php echo $re['price']; ?> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>

     <?php } ?>

                            <!-- dynamic product end -->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--new arrival area end-->

        <!--banner area start-->
        <div class="banner-area pt-70">
            <div class="container">
                <div class="row">
                <?php 
        $selectbanner ="select * from product LIMIT 2";  
        $res1=mysqli_query($conn,$selectbanner);
            while($re=mysqli_fetch_assoc($res1)) {

?>


                    <div class="col-lg-6">
                        <div class="single-banner gray-bg">
                            <div class="row">
                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="singleproduct.php?proid=<?php echo $re['id']; ?>"> 
                                                    <?php $img='../admin/uploads/'.$re['image'] ?>
                                                <img alt="" src="<?php echo $img; ?>"
                                                    class="primary-image" height="350" width="300">  </a>
                                        </div>
                                <!-- <div class="col-md-6">
                                    <div class="sb-img text-center" >
                                    <?php $img='../admin/uploads/'.$re['image'] ?>
                                                <img alt="" src="<?php echo $img; ?>"
                                                    class="primary-image" height="350" width="300">
                                    </div>
                                </div> -->
                                <div class="col-md-6">
                                    <div class="sb-content mt-60">
                                        <div class="banner-text">
                                            <h5 class="lato">New Arrival</h5>
                                            <h2 class="montserrat"><?php echo $re['name']; ?></h2>
                                            <h3 class="montserrat"><?php echo $re['price']; ?></h3>
                                            <div class="banner-list">
                                                <ul>
                                                    <li>Best quality</li>
                                                    <li>Best quality</li>
                                                    <li>Best quality</li>
                                                </ul>
                                            </div>
                                            <div class="social-icon-wraper mt-25">
                                                <div class="social-icon socile-icon-style-1">
                                                    <ul>
                                                        <li><a href="cart.php"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                        <li><a href="whishlist.php"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                        </li>
                                                        <!-- <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                data-toggle="modal" data-target=".modal" tabindex="0"><i
                                                                    class="zmdi zmdi-eye"></i></a></li>
                                                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a></li>
                                                    </ul> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php } ?>
                </div>
            </div>
        </div>
        <!--banner area end-->

        <!--discunt-featured-onsale-area start -->
        <div class="discunt-featured-onsale-area pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-area tab-cars-style">
                            <div class="title-tab-product-category">
                                <div class="col-lg-12 text-center">
                                    <ul class="nav mb-40 heading-style-2" role="tablist">
                                        <li role="presentation"><a class="active" href="#newarrival"
                                                aria-controls="newarrival" role="tab" data-toggle="tab">New Arrival</a>
                                        </li>
                                        <li role="presentation"><a href="#bestsellr" aria-controls="bestsellr"
                                                role="tab" data-toggle="tab">Best Seller</a></li>
                                       <!-- <li role="presentation"><a href="#specialoffer" aria-controls="specialoffer"
                                                role="tab" data-toggle="tab">Special Offer</a></li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="content-tab-product-category">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="newarrival">
                                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                                        <?php
                                            $select ="select * from product";  
                                            $res=mysqli_query($conn,$select);
                                                while($re=mysqli_fetch_assoc($res)) {
                                                    # code...
                                                ?>
                                             <!--dyanmin product-->
                            <div class="col-lg-3">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="singleproduct.php?proid=<?php echo $re['id']; ?>"> 
                                                    <?php $img='../admin/uploads/'.$re['image'] ?>
                                                <img alt="" src="<?php echo $img; ?>"
                                                    class="primary-image">  </a>
                                        </div>
                                        <div class="product-icon socile-icon-tooltip text-center">
                                            <ul>
                                                <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                        data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                <li><a href="whishlist.php?proid=<?php echo $re['id']; ?>" data-tooltip="Wishlist" class="w-list"><i
                                                            class="fa fa-heart-o"></i></a>
<!--<form action="whishlist.php" method="POST">    
                                                          <button class="w-list" type="submit"><i
                                                            class="fa fa-heart-o" name="whishbutton"></i></button>
                                                        </form>-->
                                                        </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <?php $ids=$re['id']; ?>
                                        <div class="prodcut-name"> <a href="singleproduct.php?proid=<?php echo $re['id']; ?>"><?php echo $re['name']; ?></a>
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-price">
                                                <div class="new-price"> <?php echo $re['price']; ?> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                                                <?php } ?>            
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane  fade in" id="bestsellr">
                                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                                        <?php
                                            $select ="select * from product where best_seller=1";  
                                            $res=mysqli_query($conn,$select);
                                                while($re=mysqli_fetch_assoc($res)) {
                                                    # code...
                                                ?>
                                             <!--dyanmin product-->
                            <div class="col-lg-3">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="product-label">
                                            <div class="new">New</div>
                                        </div>
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"> 
                                                    <?php $img='../admin/uploads/'.$re['image'] ?>
                                                <img alt="" src="<?php echo $img; ?>"
                                                    class="primary-image">  </a>
                                        </div>
                                        <div class="product-icon socile-icon-tooltip text-center">
                                            <ul>
                                                <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                        data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                        data-toggle="modal" data-target=".modal"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <?php $ids=$re['id']; ?>
                                        <div class="prodcut-name"> <a href="singleproduct.php?proid=<?php echo $re['id']; ?>"><?php echo $re['name']; ?></a>
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-price">
                                                <div class="new-price"> <?php echo $re['price']; ?> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--discunt-featured-onsale-area end-->

        <!--testimonial-area-start-->
      <!--  <div class="testimonial-area overlay ptb-70 mt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title color-lightgrey mb-40 text-center">
                            <h5 class="uppercase">Testimonial</h5>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="total-testimonial active-slider carosule-pagi pagi-03">
                            <div class="single-testimonial">
                                <div class="testimonial-img">
                                    <img src="images/team/testi-03.jpg" alt="">
                                </div>
                                <div class="testimonial-content color-lightgrey">
                                    <div class="name-degi pos-rltv">
                                        <h5>Anik Islam</h5>
                                        <p>Developer</p>
                                    </div>
                                    <div class="testi-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testimonial-img">
                                    <img src="images/team/testi-02.jpg" alt="">
                                </div>
                                <div class="testimonial-content color-lightgrey">
                                    <div class="name-degi pos-rltv">
                                        <h5>Shakara Tasnim</h5>
                                        <p>Facebook Liker</p>
                                    </div>
                                    <div class="testi-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testimonial-img">
                                    <img src="images/team/testi-01.jpg" alt="">
                                </div>
                                <div class="testimonial-content color-lightgrey">
                                    <div class="name-degi pos-rltv">
                                        <h5>Momen Buhyan</h5>
                                        <p>Designer</p>
                                    </div>
                                    <div class="testi-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--testimonial-area-end-->

        <!--new-arrival on-sale Top-ratted area start-->
      <!--  <div class="arrival-ratted-sale-area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">New Arrival</h5>
                        </div>
                        <div class="ctg-slider-active">
                            <div class="single-ctg new-arrival-ctg">
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img src="images/product/s01.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                data-toggle="modal" data-target=".modal" tabindex="0"><i
                                                                    class="zmdi zmdi-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img src="images/product/s02.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                        
                                        
                                        
                                        
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                data-toggle="modal" data-target=".modal" tabindex="0"><i
                                                                    class="zmdi zmdi-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-ctg new-arrival-ctg">
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img src="images/product/s01.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                data-toggle="modal" data-target=".modal" tabindex="0"><i
                                                                    class="zmdi zmdi-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img src="images/product/s02.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                data-toggle="modal" data-target=".modal" tabindex="0"><i
                                                                    class="zmdi zmdi-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-ctg on-sale-ctg">
                            <div class="heading-title heading-style pos-rltv mb-50 text-center">
                                <h5 class="uppercase">On Sale</h5>
                            </div>
                            <div class="ctg-slider-active">
                                <div class="single-ctg new-arrival-ctg">
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s01.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-toggle="modal" data-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s02.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-toggle="modal" data-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-ctg new-arrival-ctg">
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s01.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-toggle="modal" data-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s02.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-toggle="modal" data-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
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
                    <div class="col-md-4">
                        <div class="single-ctg top-rated-ctg">
                            <div class="heading-title heading-style pos-rltv mb-50 text-center">
                                <h5 class="uppercase">Top Rated</h5>
                            </div>
                            <div class="ctg-slider-active">
                                <div class="single-ctg new-arrival-ctg">
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s01.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-toggle="modal" data-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s02.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-toggle="modal" data-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-ctg new-arrival-ctg">
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s01.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-toggle="modal" data-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s02.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-toggle="modal" data-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
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
        </div> -->
        <!--new-arrival on-sale Top-ratted area end-->

        

        <!--blog area are start-->
     <!--   <div class="blog-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">Blog</h5>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="total-blog row">
                            <div class="col-md-4">
                                <div class="single-blog">
                                    <div class="blog-img pos-rltv product-overlay">
                                        <a href="#"><img src="images/blog/01.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h5 class="uppercase font-bold"><a href="#">New fashion collection 2019</a></h5>
                                            <div class="like-comments-date">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a>
                                                    </li>
                                                    <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a>
                                                    </li>
                                                    <li class="blog-date"><a href="#"><i
                                                                class="zmdi zmdi-calendar-alt"></i>16 jun 2019</a></li>
                                                </ul>
                                            </div>
                                            <div class="blog-text">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using.</p>
                                            </div>
                                            <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-blog">
                                    <div class="blog-img pos-rltv product-overlay">
                                        <a href="#"><img src="images/blog/02.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h5 class="uppercase font-bold"><a href="#">New fashion collection 2019</a></h5>
                                            <div class="like-comments-date">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a>
                                                    </li>
                                                    <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a>
                                                    </li>
                                                    <li class="blog-date"><a href="#"><i
                                                                class="zmdi zmdi-calendar-alt"></i>16 jun 2019</a></li>
                                                </ul>
                                            </div>
                                            <div class="blog-text">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using.</p>
                                            </div>
                                            <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-blog">
                                    <div class="blog-img pos-rltv product-overlay">
                                        <a href="#"><img src="images/blog/03.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h5 class="uppercase font-bold"><a href="#">New fashion collection 2019</a></h5>
                                            <div class="like-comments-date">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a>
                                                    </li>
                                                    <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a>
                                                    </li>
                                                    <li class="blog-date"><a href="#"><i
                                                                class="zmdi zmdi-calendar-alt"></i>16 jun 2019</a></li>
                                                </ul>
                                            </div>
                                            <div class="blog-text">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using.</p>
                                            </div>
                                            <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-blog">
                                    <div class="blog-img pos-rltv product-overlay">
                                        <a href="#"><img src="images/blog/01.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h5 class="uppercase font-bold"><a href="#">New fashion collection 2019</a></h5>
                                            <div class="like-comments-date">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a>
                                                    </li>
                                                    <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a>
                                                    </li>
                                                    <li class="blog-date"><a href="#"><i
                                                                class="zmdi zmdi-calendar-alt"></i>16 jun 2019</a></li>
                                                </ul>
                                            </div>
                                            <div class="blog-text">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using.</p>
                                            </div>
                                            <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--blog area are end-->


        <!--delivery service start-->
        <div class="delivery-service-area ptb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service shadow-box text-center">
                            <img src="images/icons/garantee.png" alt="">
                            <h5>Money Back Guarantee</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service shadow-box text-center">
                            <img src="images/icons/coupon.png" alt="">
                            <h5>Gift Coupon</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service shadow-box text-center">
                            <img src="images/icons/delivery.png" alt="">
                            <h5>Free Shipping</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service shadow-box text-center">
                            <img src="images/icons/support.png" alt="">
                            <h5>24x7 Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--delivery service start-->


        <?php include "footer.php"; ?>