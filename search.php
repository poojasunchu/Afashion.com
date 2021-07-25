<?php include "header.php"; 

//$subcat=$_GET['subcat'];

$text=$_GET['searchtext'];
   
//echo $subcat;
?>

<!--breadcumb area start -->
        <div class="breadcumb-area breadcumb-2 overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Searched Products </h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                    <li class="active">Search</li>
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
                                            $selectpro="select * from product where name like '%$text%'";
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
        
        
                                        <!--pagination start-->
                                       <!-- <div class="col-lg-12">
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
                                        </div>-->
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