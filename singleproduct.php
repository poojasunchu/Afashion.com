<?php include "header.php"; 
include "database.php";

$proid=$_GET['proid'];

$select="select * from product where id='".$proid."'";
$res=mysqli_query($conn,$select);
while ($row=mysqli_fetch_assoc($res)) {
	//`categories_id`, `sub_categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `best_seller`, `meta_title`, `meta_desc`, `meta_keyword`, `status`
	$categories_id=$row['categories_id'];
	$sub_categories_id=$row['sub_categories_id'];
	$name=$row['name'];
	$mrp=$row['mrp'];
	$price=$row['price'];
	$qty=$row['qty'];
	$image=$row['image'];
	$short_desc=$row['short_desc'];
	$description=$row['description'];


}
	$img='../admin/uploads/'.$image;

if(isset($_POST['addcart'])){
    if(!empty($_SESSION['loginchk'])){
        $user_id=$_SESSION['user_id'];
        $qty=$_POST['qtybutton'];
        $insert="INSERT INTO `cart`(`user_id`, `product_id`, `quantity`) VALUES ('".$user_id."','".$proid."','".$qty."')";
        $result=mysqli_query($conn,$insert);
        if($result){
             ?>
            <script type="text/javascript">
                alert("Added to Cart!");
                window.location.replace('cart.php');
            </script>
            <?php
        }
    }else{
            ?>
            <script type="text/javascript">
                alert("Please Login!");
                window.location.replace('login.php');
            </script>
            <?php
    }
}

?>





 <!--breadcumb area start -->
        <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Prodcut Details</h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.php">Home</a></li>
                    <li class="active"><a title="Go to Home Page" href="productlist.php">product-details</a></li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->
        
        <!--single-protfolio-area are start-->
        <form  method="POST" id="myform">
        <div class="single-protfolio-area ptb-70">
          <div class="container">
              <div class="row">
                    <div class="col-lg-7">
                       <div class="portfolio-thumbnil-area">
                        <div class="product-more-views">
                            <div class="tab_thumbnail" data-tabs="tabs">
                                <div class="thumbnail-carousel">
                                    <ul class="nav">
                                       <li>
                                        <a class="active" href="#view11" class="shadow-box" aria-controls="view11" data-toggle="tab"><img src="<?php echo $img; ?>" alt="" /></a></li>
                                       <!--<li>
                                        <a href="#view22" class="shadow-box" aria-controls="view22" data-toggle="tab"><img src="images/product/02.jpg" alt="" /></a></li>
                                       <li>
                                        <a href="#view33" class="shadow-box" aria-controls="view33" data-toggle="tab"><img src="images/product/03.jpg" alt="" /></a></li>
                                       <li>
                                        <a href="#view44" class="shadow-box" aria-controls="view44" data-toggle="tab"><img src="images/product/04.jpg" alt="" /></a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content active-portfolio-area pos-rltv">
                           
                            <div role="tabpanel" class="tab-pane active" id="view11">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="images/product/01.jpg"><img src="<?php echo $img; ?>" alt="Single portfolio" /></a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="view22">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="images/product/02.jpg"><img src="images/product/02.jpg" alt="Single portfolio" /></a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="view33">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="images/product/03.jpg"><img src="images/product/03.jpg" alt="Single portfolio" /></a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="view44">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="images/product/04.jpg"><img src="images/product/04.jpg" alt="Single portfolio" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-5">
                        <div class="single-product-description">
                           <div class="sp-top-des">
                                <h3><?php echo $name; ?></span></h3>
                                <div class="prodcut-ratting-price">
                                    
                                    <div class="prodcut-price">
                                        <div class="new-price"> 	₹<?php echo $mrp; ?></div>
                                        <div class="old-price"> <del>	₹<?php echo $price; ?></del> </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sp-des">
                                <p><?php echo $short_desc; ?></p>
                            </div>
                            <div class="sp-bottom-des">
                            <div class="single-product-option">
                                <div class="sort product-type">
                                    <label>Color: </label>
                                    <select id="input-sort-color">
                                        <option value="#">Red</option>
                                        <option value="#">Blue</option>
                                        <option value="#">Green</option>
                                        <option value="#">Purple</option>
                                        <option value="#">Yellow</option>
                                        <option value="#">Black</option>
                                        <option value="#">Grey</option>
                                        <option value="#">White</option>
                                        <option value="#" selected>Chose Your Color</option>
                                    </select>
                                </div>
                                <div class="sort product-type">
                                    <label>Size: </label>
                                    <select id="input-sort-size">
                                        <option value="#">S</option>
                                        <option value="#">M</option>
                                        <option value="#">L</option>
                                        <option value="#">XL</option>
                                        <option value="#">XXL</option>
                                        <option value="#" selected="">Chose Your Size</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quantity-area">
                                <label>Qty :</label>
                                <div class="cart-quantity">
                                    
                                        <div class="product-qty">
                                            <div class="cart-quantity">
                                                <div class="cart-plus-minus">
                                                    <div class="dec qtybutton" onclick="minus();">-</div>
                                                        <input type="number" value="1" name="qtybutton" class="cart-plus-minus-box" id="qtybuttonval" >
                                                    <div class="inc qtybutton" onclick="plus();">+</div>
                                                    <br>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                            <p id="qtyerror" style="color:red;"></p>
<input type="hidden" value="<?php echo $qty; ?>" id="maxqty">   
<script>
    function plus(){

        var up=Number(document.getElementById('qtybuttonval').value);
        var maxqty=Number(document.getElementById('maxqty').value);
        var qty=up+1;
        console.log(qty);
        if(qty > maxqty){
            document.getElementById('qtybuttonval').value=maxqty-1; 
            document.getElementById('qtyerror').innerHTML='You have reached to max quantity';   
        }else{
            document.getElementById('qtyerror').innerHTML='';
        }
    }
    
 </script> 
 <script type="text/javascript">
     function minus(){
        var down=Number(document.getElementById('qtybuttonval').value);
        var minqty=1;
        var qtyd=down-1;
        console.log(down);
        if(qtyd < minqty ){
            document.getElementById('qtybuttonval').value=minqty+1; 
            document.getElementById('qtyerror').innerHTML='You have reached to min order quantity';   
        }
        else{
            document.getElementById('qtyerror').innerHTML='';
        }
    }
 </script>  
                          <!--<?php echo $qty; ?> -->  
                            <div class="social-icon socile-icon-style-1">
                                <ul>
                                    <li><button name="addcart" type="submit" style="outline: none;border:none;cursor: pointer;"><a  data-tooltip="Add To Cart" class="add-cart add-cart-text" data-placement="left" tabindex="0">Add To Cart<i class="fa fa-cart-plus"></i></a></button></li>
                                    <li><a href="#" data-tooltip="Wishlist" class="w-list" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                    
                                    <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                      </div>
                  </div>
              </div>
          </div>  
        </div>
        </div>
        <!--single-protfolio-area are start-->
</form>

          <!--descripton-area start -->
        <div class="descripton-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-area tab-cars-style">
                            <div class="title-tab-product-category row">
                                <div class="col-lg-12 text-center">
                                    <ul class="nav mb-40 heading-style-2" role="tablist">
                                        <li role="presentation"><a class="active" href="#newarrival" aria-controls="newarrival" role="tab" data-toggle="tab">Description</a></li>
                                       <!-- <li role="presentation"><a class="active" href="#bestsellr" aria-controls="bestsellr" role="tab" data-toggle="tab">Review</a></li>
                                        <li role="presentation"><a href="#specialoffer" aria-controls="specialoffer" role="tab" data-toggle="tab">Tags</a></li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12">
                                <div class="content-tab-product-category">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fix fade show active" id="newarrival">
                                        <div class="review-wraper">
                                            	<?php echo $description; ?>
                                        </div>
                                    </div>
                                  <!--  <div role="tabpanel" class="tab-pane fix fade show active" id="bestsellr">
                                        <div class="review-wraper">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation.</p>
                                           <h5>SIZE & FIT</h5>
                                           <ul>
                                               <li>Model wears: Style Photoliya U2980</li>
                                               <li>Model's height: 185”66</li>
                                           </ul>
                                            <h5>ABOUT ME</h5>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                           <h5>Overview</h5>
                                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fix fade in" id="specialoffer">
                                        <ul class="tag-filter">
                                            <li><a href="#">Fashion</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Winter</a></li>
                                            <li><a href="#">Street Style</a></li>
                                            <li><a href="#">Style</a></li>
                                            <li><a href="#">Shop</a></li>
                                            <li><a href="#">Collection</a></li>
                                            <li><a href="#">Spring 2019</a></li>
                                            <li><a href="#">Street Style</a></li>
                                            <li><a href="#">Style</a></li>
                                            <li><a href="#">Shop</a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!--descripton-area end-->

<br>

<!--new arrival area start-->

        <div class="new-arrival-area ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">Related Product</h5>
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

<?php 


}
?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--new arrival area end-->










<?php include "footer.php"; ?>

