<?php include "header.php"; 

$subcat=$_GET['subcat'];

//echo $subcat;
?>

<!--breadcumb area start -->
        <div class="breadcumb-area breadcumb-2 overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Product Grid View</h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                    <li class="active">Shop</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->
        
        <!--shop main area are start-->
        <div class="shop-main-area grid-view_area ptb-70">
            <div class="container">
                <div class="row">
                    <!--main-shop-product start-->
                    <div class="col-lg-12 col-md-8 order-lg-2 order-md-2 order-1">
                        <div class="shop-wraper">
                            
                            <div class="clearfix"></div>
                            <div class="col-lg-12">
                                <div class="shop-total-product-area clearfix mt-35">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!--tab grid are start-->
                                        <div role="tabpanel" class="tab-pane fade show active" id="grid">
                                            <div class="total-shop-product-grid row">

                                   		<?php          		
                                   		$selectpro="select * from product where sub_categories_id = '".$subcat."'";
                                   		$res=mysqli_query($conn,$selectpro);
                                   		while ($row=mysqli_fetch_assoc($res)) {
                                   			?>
                                   		
                                                <div class="col-lg-3 col-md-6 item">
                                                    <!-- single product start-->
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="product-label red">
                                                                <div class="new">New</div>
                                                            </div>
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                               	<?php $img="../admin/uploads/".$row['image']; ?>

                                                                <a href="single-product.html"> <img alt=""
                                                                        src="<?php echo $img; ?>" class="primary-image">
                                                                </a>
                                                            </div>
                                                            <div class="product-icon socile-icon-tooltip text-center">
                                                                <ul>
                                                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                                            data-placement="left"><i
                                                                                class="fa fa-cart-plus"></i></a>
                                                                    </li>
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
                                                            <div class="prodcut-name"> <a href="single-product.html"><?php $row['name']; ?></a> </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-price">
                                                                    <div class="new-price"><?php echo $row['price']; ?> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                               
                                          <?php      }

                                   		?>	









                                               
                                            </div>
                                        </div>
                                        <!--shop grid are end-->
        
                                        <!--shop product list start-->
                                        <div role="tabpanel" class="tab-pane fade" id="list">
                                            <div class="total-shop-product-list row">
                                                <div class="col-lg-12 item">
                                                    <!-- single product start-->
                                                    <div class="single-product single-product-list">
                                                        <div class="product-img">
                                                            <div class="product-label red">
                                                                <div class="new">Sale</div>
                                                            </div>
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="images/product/02.jpg" class="primary-image"> <img
                                                                        alt="" src="images/product/03.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text prodcut-text-list fix">
                                                            <div class="prodcut-name list-name montserrat"> <a
                                                                    href="single-product.html">Magnetic
                                                                    Force Bralette</a>
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting list-ratting">
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price list-price">
                                                                    <div class="new-price"> $220 </div>
                                                                    <div class="old-price"> <del>$250</del> </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-product-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Fusce
                                                                    dolor tellus, bibendum eu lacus ids suscipit
                                                                    blandit tortor. Aenean eget posuere augue, vel
                                                                    molestie
                                                                    turpis.
                                                                    Ut tempor mauris ut justo luctus aliquam. Nullam
                                                                    id quam vitae odio scelerisque ultrices.</p>
                                                            </div>
                                                            <div class="social-icon-wraper mt-25">
                                                                <div class="social-icon socile-icon-style-1">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                                data-toggle="modal" data-target=".modal"
                                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-12 item">
                                                    <!-- single product start-->
                                                    <div class="single-product single-product-list">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="images/product/03.jpg" class="primary-image"> <img
                                                                        alt="" src="images/product/04.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text prodcut-text-list fix">
                                                            <div class="prodcut-name list-name montserrat"> <a
                                                                    href="single-product.html">Magnetic
                                                                    Force Bralette</a>
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting list-ratting">
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price list-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-product-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Fusce
                                                                    dolor tellus, bibendum eu lacus ids suscipit
                                                                    blandit tortor. Aenean eget posuere augue, vel
                                                                    molestie
                                                                    turpis.
                                                                    Ut tempor mauris ut justo luctus aliquam. Nullam
                                                                    id quam vitae odio scelerisque ultrices.</p>
                                                            </div>
                                                            <div class="social-icon-wraper mt-25">
                                                                <div class="social-icon socile-icon-style-1">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                                data-toggle="modal" data-target=".modal"
                                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-12 item">
                                                    <!-- single product start-->
                                                    <div class="single-product single-product-list">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="images/product/05.jpg" class="primary-image"> <img
                                                                        alt="" src="images/product/06.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text prodcut-text-list fix">
                                                            <div class="prodcut-name list-name montserrat"> <a
                                                                    href="single-product.html">Magnetic
                                                                    Force Bralette</a>
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting list-ratting">
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price list-price">
                                                                    <div class="new-price"> $200 </div>
                                                                    <div class="old-price"> <del>$300</del> </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-product-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Fusce
                                                                    dolor tellus, bibendum eu lacus ids suscipit
                                                                    blandit tortor. Aenean eget posuere augue, vel
                                                                    molestie
                                                                    turpis.
                                                                    Ut tempor mauris ut justo luctus aliquam. Nullam
                                                                    id quam vitae odio scelerisque ultrices.</p>
                                                            </div>
                                                            <div class="social-icon-wraper mt-25">
                                                                <div class="social-icon socile-icon-style-1">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                                data-toggle="modal" data-target=".modal"
                                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-12 item">
                                                    <!-- single product start-->
                                                    <div class="single-product single-product-list">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="images/product/04.jpg" class="primary-image"> <img
                                                                        alt="" src="images/product/05.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text prodcut-text-list fix">
                                                            <div class="prodcut-name list-name montserrat"> <a
                                                                    href="single-product.html">Magnetic
                                                                    Force Bralette</a>
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting list-ratting">
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price list-price">
                                                                    <div class="new-price"> $220 </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-product-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Fusce
                                                                    dolor tellus, bibendum eu lacus ids suscipit
                                                                    blandit tortor. Aenean eget posuere augue, vel
                                                                    molestie
                                                                    turpis.
                                                                    Ut tempor mauris ut justo luctus aliquam. Nullam
                                                                    id quam vitae odio scelerisque ultrices.</p>
                                                            </div>
                                                            <div class="social-icon-wraper mt-25">
                                                                <div class="social-icon socile-icon-style-1">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                                data-toggle="modal" data-target=".modal"
                                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                                <div class="col-lg-12 item">
                                                    <!-- single product start-->
                                                    <div class="single-product single-product-list">
                                                        <div class="product-img">
                                                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                                                <a href="single-product.html"> <img alt=""
                                                                        src="images/product/06.jpg" class="primary-image"> <img
                                                                        alt="" src="images/product/07.jpg"
                                                                        class="secondary-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-text prodcut-text-list fix">
                                                            <div class="prodcut-name list-name montserrat"> <a
                                                                    href="single-product.html">Magnetic
                                                                    Force Bralette</a>
                                                            </div>
                                                            <div class="prodcut-ratting-price">
                                                                <div class="prodcut-ratting list-ratting">
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                                </div>
                                                                <div class="prodcut-price list-price">
                                                                    <div class="new-price"> $200 </div>
                                                                    <div class="old-price"> <del>$300</del> </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-product-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Fusce
                                                                    dolor tellus, bibendum eu lacus ids suscipit
                                                                    blandit tortor. Aenean eget posuere augue, vel
                                                                    molestie
                                                                    turpis.
                                                                    Ut tempor mauris ut justo luctus aliquam. Nullam
                                                                    id quam vitae odio scelerisque ultrices.</p>
                                                            </div>
                                                            <div class="social-icon-wraper mt-25">
                                                                <div class="social-icon socile-icon-style-1">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="zmdi zmdi-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                                data-toggle="modal" data-target=".modal"
                                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single product end-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--shop product list end-->
        
                                        <!--pagination start-->
                                        <div class="col-lg-12">
                                            <div class="pagination-btn text-center">
                                                <ul class="page-numbers">
                                                    <li><a href="#" class="next page-numbers"><i
                                                                class="zmdi zmdi-long-arrow-left"></i></a></li>
                                                    <li><span class="page-numbers current">1</span></li>
                                                    <li><a href="#" class="page-numbers">2</a></li>
                                                    <li><a href="#" class="page-numbers">3</a></li>
                                                    <li><a href="#" class="next page-numbers"><i
                                                                class="zmdi zmdi-long-arrow-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--pagination end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--main-shop-product start-->
        
                    
                </div>
            </div>
        </div>
        <!--shop main area are end-->




<?php include "footer.php"; ?>