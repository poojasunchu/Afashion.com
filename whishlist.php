<?php
include "header.php"; 
include "database.php";

if(empty($_SESSION['loginchk']) ){
    ?>
        <script type="text/javascript">
                alert("Please Login!");
                window.location.replace('login.php');
            </script>
    <?php
}

//INSERT INTO `product`(`id`, `categories_id`, `sub_categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `best_seller`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES

//INSERT INTO `cart`(`id`, `user_id`, `product_id`, `qty`) VALUES 

$proid=$_GET['proid'];       
 $added_on=date("d-m-y"); 
$insertwhishlist="INSERT INTO `wishlist`(`user_id`, `product_id`, `added_on`) VALUES('".$_SESSION['user_id']."','".$proid."','".$added_on."') ";
$resultcart=mysqli_query($conn,$insertwhishlist);
    


 $select1="SELECT c.id as CID , c.* , p.* FROM wishlist c,product p WHERE c.product_id=p.id and c.user_id = '".$_SESSION['user_id']."' ";
    $result1=mysqli_query($conn,$select1);
    //echo $select;


   
?>



        <!--breadcumb area start -->
        <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Whishlist</h5>
                </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                    <li class="active">Whishlist</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->

        <!--cart-checkout-area start -->
        <div class="cart-checkout-area  pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-area">
                           <!-- <div class="title-tab-product-category row">
                                <div class="col-lg-12 text-center pb-60">
                                    <ul class="nav heading-style-3" role="tablist">
                                        <li role="presentation"><a class="active shadow-box" href="#cart"
                                                aria-controls="cart" role="tab" data-toggle="tab"><span>01</span>
                                                Shopping
                                                cart</a></li>
                                        <li role="presentation"><a class="shadow-box" href="#checkout"
                                                aria-controls="checkout" role="tab"
                                                data-toggle="tab"><span>02</span>Checkout</a></li>
                                        <li role="presentation"><a class="shadow-box" href="#complete-order"
                                                aria-controls="complete-order" role="tab"
                                                data-toggle="tab"><span>03</span>
                                                complete-order</a></li>
                                    </ul>
                                </div>
                            </div>-->
                            <div class="clearfix"></div>
                            <div class="content-tab-product-category pb-70">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="cart">
                                        <!-- cart are start-->
                                        <div class="cart-page-area">
                                            
                                                <div class="table-responsive mb-20">
                                                    
                                                    <table class="shop_table-2 cart table">

                                                        <thead>
                                                            <tr>
                                                                <th class="product-thumbnail ">Image</th>
                                                                <th class="product-name ">Product Name</th>
                                                                <th class="product-price ">Unit Price</th>
                                                                
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
					<?php
					while ($row=mysqli_fetch_assoc($result1)) {
	$ids=$row['CID'];

            $productname=$row['name'];
            $productprice=$row['price'];
            $productimage=$row['image'];
 $img='../admin/uploads/'.$productimage;
           
	
?>

                                                            <tr class="cart_item">
                                                                <td class="item-img">
                                                                    <a href="#"><img src="<?php echo $img; ?>"
                                                                            alt="">
                                                                    </a>
                                                                </td>
                                                                <td class="item-title"> <a href="#"><?php echo $productname; ?> </a></td>
                                                                <td class="item-price"> ₹<?php echo $productprice; ?>  </td>
                                                          
                                                                
                                                             
                                                            </tr>
                                                       <?php } ?>     
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>


                              
                                            
                                        </div>
                                        <!-- cart are end-->
                                    </div>
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--cart-checkout-area end-->



















<?php include "footer.php"; ?>