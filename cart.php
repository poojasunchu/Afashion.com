<?php
include "header.php"; 

if(empty($_SESSION['loginchk']) ){
   
   ?>
        <script type="text/javascript">
        
                alert("Please Login!");
               
                window.location.replace('login.php');
            </script>
    <?php
}

include "database.php";
//INSERT INTO `product`(`id`, `categories_id`, `sub_categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `best_seller`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES

//INSERT INTO `cart`(`id`, `user_id`, `product_id`, `qty`) VALUES 

$update=false;

    
 $carttotal=0;           
  
if(isset($_POST['update'])){
    echo $_POST['qtybutton'];
    echo $_POST['ids'];
    $updatecart="UPDATE `cart` SET `quantity`='".$_POST['qtybutton']."' WHERE id= '".$_POST['ids']."'";
    $resultcart=mysqli_query($conn,$updatecart);
    if($resultcart){
        ?>
        <script>
        alert('Updated Successfully!');

    </script>

        <?php

    }
   
}

$selectuserdata="select * from user_data where user_id = '".$_SESSION['user_id']."'";
$resuserdata = mysqli_query($conn,$selectuserdata);
if($row=mysqli_fetch_assoc($resuserdata)){
    
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $companyname=$row['companyname'];
    $email=$row['email'];
    $phone=$row['phone'];
    $country=$row['country'];
    $add1=$row['add1'];
    $add2=$row['add2'];
    $city=$row['city'];
    $state=$row['state'];
    $zipcode=$row['zipcode'];

    $update=true;

}else{
    $firstname="";
    $lastname="";
    $companyname="";
    $email="";
    $phone="";
    $country="";
    $add1="";
    $add2="";
    $city="";
    $state="";
    $zipcode="";
    $update=false;
}

if($update== false){
if(isset($_POST['billupdate'])){
        $user_id=$_SESSION['user_id'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $companyname=$_POST['companyname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $country=$_POST['country'];
        $add1=$_POST['add1'];
        $add2=$_POST['add2'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zipcode=$_POST['zipcode'];
       
    $insertuser_data="INSERT INTO `user_data`( `user_id`, `firstname`, `lastname`, `companyname`, `email`, `phone`, `country`, `add1`, `add2`, `city`, `state`, `zipcode`) VALUES 
    ('".$user_id."','".$firstname."','".$lastname."','".$companyname."','".$email."','".$phone."','".$country."','".$add1."','".$add2."','".$city."','".$state."','".$zipcode."')";
    $res=mysqli_query($conn,$insertuser_data);
    if($res){
        ?>
        <script>
        alert("Successfully Inserted!");
        </script>
        <?php
    }

}
}else if($update == true){
    if(isset($_POST['billupdate'])){
    $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $companyname=$_POST['companyname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $country=$_POST['country'];
        $add1=$_POST['add1'];
        $add2=$_POST['add2'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zipcode=$_POST['zipcode'];
    $updatecartuser="UPDATE `user_data` SET `firstname`='".$firstname."',`lastname`='".$lastname."',`companyname`='".$companyname."',`email`='".$email."',`phone`='".$phone."',`country`='".$country."',`add1`='".$add1."',`add2`='".$add2."',`city`='".$city."',`state`='".$state."',`zipcode`='".$zipcode."' WHERE user_id = '".$_SESSION['user_id']."'";
    $resupdateuser=mysqli_query($conn,$updatecartuser);
    if($resupdateuser){
        ?>
        <script>
        alert("Successfully Updated!");
        </script>
        <?php
    }
}
}

 $select1="SELECT c.id as CID , c.* , p.* FROM cart c,product p WHERE c.product_id=p.id and c.user_id = '".$_SESSION['user_id']."' ";
    $result1=mysqli_query($conn,$select1);
    //echo $select;

$chk=0;  

if(isset($_POST['placeorder'])){
$mytype=$_POST["pay"];
$mcc=0;
if($mytype=="online")
{
    $mcc=1;
}
 $userdatachk="SELECT * FROM `user_data` WHERE user_id = '".$_SESSION['user_id']."'";
  $resultorder1 = mysqli_query($conn,$userdatachk) ;
 $rows = mysqli_num_rows($resultorder1);
 if($rows > 0){


    $selectorder="SELECT c.id as CID, p.id as PID , c.* , p.* FROM cart c,product p WHERE c.product_id=p.id and c.user_id = '".$_SESSION['user_id']."' ";
    $resultorder=mysqli_query($conn,$selectorder);
    $chkt=0;
    $order_number='ORD'.rand(100,1000000);
    while ($row=mysqli_fetch_assoc($resultorder)) {
        $cartids=$row['CID'];
        $productid=$row['PID'];
                $productprice=$row['price'];
               $productqty=$row['quantity'];
             $totalamount=$productprice*$productqty;
            $carttotal=$carttotal+$totalamount;
            $user_id=$_SESSION['user_id'];
            

            $insertorderdata="INSERT INTO `order_data`(`user_id`, `order_number`, `product_id`, `qty`, `payment_type`, `status`) VALUES ('".$user_id."','".$order_number."','".$productid."','".$productqty."','COD','Placed')";
            $res=mysqli_query($conn,$insertorderdata);
            if($res){
                $chkt=1;
                $delcart="DELETE FROM `cart` WHERE id = '".$cartids."' ";
                $resdel=mysqli_query($conn,$delcart);





                }
        }

        if($chkt == '1'){
            if($mcc==1){
                    ?>

 <script>
                console.log(<?php echo $productid; ?>);
             //   alert("Successfully Placed Order!");
                window.location.replace('demo.php');
                </script>


                    <?php


                }
                else
                {
                ?>
                <script>
                console.log(<?php echo $productid; ?>);
                alert("Successfully Placed Order!");
                window.location.replace('cart.php');
                </script>
                <?php

                }
            }

        }else{
            ?>
                <script>
                
                alert("Fill Your Billing Details!");
               // window.location.replace('cart.php');
                </script>
                <?php
        }

}
   
?>



        <!--breadcumb area start -->
        <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Cart Details</h5>
                </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                    <li class="active">Cart</li>
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
                            <div class="title-tab-product-category row">
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
                            </div>
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
                                                                <th class="product-quantity">Quantity</th>
                                                                <th class="product-subtotal ">Total</th>
                                                                <th class="product-remove">Action</th>
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
                                                                    $productqty=$row['quantity'];
                                                            $qty=$row['qty']; 

                                                                $totalamount=$productprice*$productqty;
                                                                $carttotal=$carttotal+$totalamount;
                                                        ?>

                                                            <tr class="cart_item">
                                                                <td class="item-img">
                                                                    <a href="#"><img src="<?php echo $img; ?>"
                                                                            alt="">
                                                                    </a>
                                                                </td>
                                                                <td class="item-title"> <a href="#"><?php echo $productname; ?> </a></td>
                                                                <td class="item-price"> ₹<?php echo $productprice; ?>  </td>
                                                          <form method="POST" >      
                                                                <td class="item-qty">
                                                                    <div class="quantity-area">
                                
                                <div class="cart-quantity">
                                    
                                        <div class="product-qty">
                                            <div class="cart-quantity">
                                                <div class="cart-plus-minus">
                                                    <div class="dec qtybutton" >-</div>
                                                        <input type="number" value="<?php echo $productqty; ?>" name="qtybutton" class="cart-plus-minus-box" id="qtybuttonval" >
                                                    <div class="inc qtybutton" >+</div>
                                                    <br>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>

                                                                </td>
                                                                <td class="total-price"><strong> <?php echo $totalamount; ?></strong>
                                                                </td>
                                                             <td class="remove-item">
                                                                 <div class="row" style="padding-left: 10px;">
                                                                    <div class="col-md-3">
                                                                <input type="hidden" name="ids" value="<?php echo $ids; ?>"> 
                                                              
                                                                   <button name="update" type="submit" value="+" style="color:black; border:none;cursor: pointer;"><i class="fa fa-edit"></i></button> 
                                                                </form>
    <!--<script type="text/javascript">
          <input type="text" name="newqty" id="newqty" value="<?php echo $id; ?>"> 
        var newqty=Number(document.getElementById('qtybuttonval').value);
        var finalqty=newqty+1;
        document.getElementById('newqty').value=newqty;
   </script>   -->                                                      </div>
                                                                <div class="col-md-3">
                                                                    <a href="#"><i
                                                                            class="fa fa-trash-o"></i></a>
                                                                            </div></div>
                                                                        </td>
                                                            </tr>
                                                       <?php } ?>     
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>


                                                <div class="cart-bottom-area">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-7">
                                                            <div class="update-coupne-area">
                                                                <div class="update-continue-btn text-right pb-20">
                                                                    

                                                                    <a href="index.php" class="btn-def btn2">Continue
                                                                        Shopping</a>
                                                                    
                                                                </div>
                                                   
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-5">
                                                            <div class="cart-total-area">
                                                                <div
                                                                    class="catagory-title cat-tit-5 mb-20 text-right">
                                                                    <h3>Cart Totals</h3>
                                                                </div>
                                                                <div class="sub-shipping">
                                                                    <p>Subtotal <span id="cartsubtotal"><?php echo $carttotal; ?></span></p>
                                                                    <!--<p>Shipping <span>$3.00</span></p>-->
                                                                </div>
                                                               <!-- <div class="shipping-method text-right">
                                                                    <div class="shipp">
                                                                        <input type="radio" name="ship"
                                                                            id="pay-toggle1">
                                                                        <label for="pay-toggle1">Flat Rate</label>
                                                                    </div>
                                                                    <div class="shipp">
                                                                        <input type="radio" name="ship"
                                                                            id="pay-toggle3">
                                                                        <label for="pay-toggle3">Direct Bank
                                                                            Transfer</label>
                                                                    </div>
                                                                    <p><a href="#">Calculate Shipping</a></p>
                                                                </div> -->
                                                                <div class="process-cart-total">
                                                                    <p>Total <span id="carttotal"><?php echo $carttotal; ?></span></p>
                                                                </div>
                                                               <div class="process-checkout-btn text-right">

                                                                <ul class="nav heading-style-3" role="tablist">
                                       
                                        <li role="presentation"><a class="btn-def btn2" href="#checkout"
                                                aria-controls="checkout" role="tab"
                                                data-toggle="tab">Process To
                                                                        Checkout</a></li>
                                       
                                    </ul>
                                    </div>
                                                                   <!--  <a class="btn-def btn2" href="#checkout"
                                                                     aria-controls="checkout" role="tab"
                                                data-toggle="tab">Process To
                                                                        Checkout</a>
                                                                -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                        <!-- cart are end-->
                                    </div>
                                    <div role="tabpanel" class="tab-pane  fade in " id="checkout">
                                        <!-- Checkout are start-->
                                        <div class="checkout-area">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                       <!-- <div class="coupne-customer-area mb50">
                                                            <div class="panel-group" id="accordion" role="tablist"
                                                                aria-multiselectable="true">
                                                               <div class="panel panel-checkout">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="headingTwo">
                                                                        <h4 class="panel-title">
                                                                            <img src="images/icons/acc.jpg" alt="">
                                                                            Returning customer?
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapseTwo"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapseTwo">
                                                                                Click here to login
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseTwo"
                                                                        class="panel-collapse collapse"
                                                                        role="tabpanel"
                                                                        aria-labelledby="headingTwo">
                                                                        <div class="panel-body">
                                                                            <div class="sm-des pb20">
                                                                                If you have shopped with us before,
                                                                                please enter your details in the
                                                                                boxes
                                                                                below. If you are a new customer
                                                                                please
                                                                                proceed to the Billing & Shipping
                                                                                section.
                                                                            </div>
                                                                            <div class="first-last-area">
                                                                                <div class="input-box mtb-20">
                                                                                    <label>User Name Or
                                                                                        Email</label>
                                                                                    <input type="email"
                                                                                        placeholder="Your Email"
                                                                                        class="info" name="email">
                                                                                </div>
                                                                                <div class="input-box mb-20">
                                                                                    <label>Password</label>
                                                                                    <input type="password"
                                                                                        placeholder="Password"
                                                                                        class="info" name="padd">
                                                                                </div>
                                                                                <div class="frm-action cc-area">
                                                                                    <div class="input-box tci-box">
                                                                                        <a href="#"
                                                                                            class="btn-def btn2">Login</a>
                                                                                    </div>
                                                                                    <span>
                                                                                        <input type="checkbox"
                                                                                            class="remr"> Remember
                                                                                        me
                                                                                    </span>
                                                                                    <a class="forgotten forg"
                                                                                        href="#">Forgotten
                                                                                        Password</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                                <div class="panel panel-checkout">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="headingThree">
                                                                        <h4 class="panel-title">
                                                                            <img src="images/icons/acc.jpg" alt="">
                                                                            Have A Coupon?
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapseThree"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapseThree">
                                                                                Click here to enter your code
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseThree"
                                                                        class="panel-collapse collapse"
                                                                        role="tabpanel"
                                                                        aria-labelledby="headingThree">
                                                                        <div class="panel-body coupon-body">

                                                                            <div class="first-last-area">
                                                                                <div class="input-box mtb-20">
                                                                                    <input type="text"
                                                                                        placeholder="Coupon Code"
                                                                                        class="info" name="code">
                                                                                </div>
                                                                                <div class="frm-action">
                                                                                    <div class="input-box tci-box">
                                                                                        <a href="#"
                                                                                            class="btn-def btn2">Apply
                                                                                            Coupon</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="row">
                                                        <div class="col-md-3"></div>
                                                            <div class="col-lg-6">
                                                                <div class="billing-details">
                                                                    <div class="contact-text right-side">
                                                                        <h2>Billing Details</h2>
                                                                        <form  method="POST">
                                                                            <div class="row">
                                                                                <div class="col-lg-6 col-md-6">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>First Name
                                                                                            <em>*</em></label>
                                                                                        <input type="text"
                                                                                            name="firstname" class="info"
                                                                                            placeholder="First Name" value="<?php echo $firstname; ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Last
                                                                                            Name<em>*</em></label>
                                                                                        <input type="text"
                                                                                            name="lastname" class="info"
                                                                                            placeholder="Last Name" value="<?php echo $lastname ; ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Company Name</label>
                                                                                        <input type="text"
                                                                                            name="companyname"
                                                                                            class="info"
                                                                                            placeholder="Company Name" value="<?php echo $companyname ; ?>" >
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Email
                                                                                            Address<em>*</em></label>
                                                                                        <input type="email"
                                                                                            name="email"
                                                                                            class="info"
                                                                                            placeholder="Your Email" value="<?php echo $email ; ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Phone
                                                                                            Number<em>*</em></label>
                                                                                        <input type="text"
                                                                                            name="phone"
                                                                                            class="info"
                                                                                            placeholder="Phone Number" value="<?php echo $phone ; ?>">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Country
                                                                                            <em>*</em></label>
                                                                                        <select
                                                                                            class="selectpicker select-custom"
                                                                                            data-live-search="true" name="country">
                                                                                            <option
                                                                                                data-tokens="Bangladesh">
                                                                                                Bangladesh</option>
                                                                                            <option
                                                                                                data-tokens="India">
                                                                                                India</option>
                                                                                            <option
                                                                                                data-tokens="Pakistan">
                                                                                                Pakistan</option>
                                                                                            <option
                                                                                                data-tokens="Pakistan">
                                                                                                Pakistan</option>
                                                                                            <option
                                                                                                data-tokens="Srilanka">
                                                                                                Srilanka</option>
                                                                                            <option
                                                                                                data-tokens="Nepal">
                                                                                                Nepal</option>
                                                                                            <option
                                                                                                data-tokens="Butan">
                                                                                                Butan</option>
                                                                                            <option
                                                                                                data-tokens="USA">
                                                                                                USA</option>
                                                                                            <option
                                                                                                data-tokens="England">
                                                                                                England</option>
                                                                                            <option
                                                                                                data-tokens="Brazil">
                                                                                                Brazil</option>
                                                                                            <option
                                                                                                data-tokens="Canada">
                                                                                                Canada</option>
                                                                                            <option
                                                                                                data-tokens="China">
                                                                                                China</option>
                                                                                            <option
                                                                                                data-tokens="Koeria">
                                                                                                Koeria</option>
                                                                                            <option
                                                                                                data-tokens="Soudi">
                                                                                                Soudi Arabia
                                                                                            </option>
                                                                                            <option
                                                                                                data-tokens="Spain">
                                                                                                Spain</option>
                                                                                            <option
                                                                                                data-tokens="France">
                                                                                                France</option>
                                                                                        </select>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Address
                                                                                            <em>*</em></label>
                                                                                        <input type="text"
                                                                                            name="add1"
                                                                                            class="info mb-10"
                                                                                            placeholder="Street Address" value="<?php echo $add1 ; ?>">
                                                                                        <input type="text"
                                                                                            name="add2"
                                                                                            class="info mt10"
                                                                                            placeholder="Apartment, suite, unit etc. (optional)"value="<?php echo $add2 ; ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Town/City
                                                                                            <em>*</em></label>
                                                                                        <input type="text"
                                                                                            name="city" class="info"
                                                                                            placeholder="Town/City"value="<?php echo $city ; ?>">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="input-box">
                                                                                        <label>State/Divison
                                                                                            <em>*</em></label>
                                                                                        <select
                                                                                            class="selectpicker select-custom"
                                                                                            data-live-search="true" name="state">
                                                                                            <option
                                                                                                data-tokens="Barisal">
                                                                                                Barisal</option>
                                                                                            <option
                                                                                                data-tokens="Dhaka">
                                                                                                Dhaka</option>
                                                                                            <option
                                                                                                data-tokens="Kulna">
                                                                                                Kulna</option>
                                                                                            <option
                                                                                                data-tokens="Rajshahi">
                                                                                                Rajshahi</option>
                                                                                            <option
                                                                                                data-tokens="Sylet">
                                                                                                Sylet</option>
                                                                                            <option
                                                                                                data-tokens="Chittagong">
                                                                                                Chittagong</option>
                                                                                            <option
                                                                                                data-tokens="Rangpur">
                                                                                                Rangpur</option>
                                                                                            <option
                                                                                                data-tokens="Maymanshing">
                                                                                                Maymanshing</option>
                                                                                            <option
                                                                                                data-tokens="Cox">
                                                                                                Cox's Bazar</option>
                                                                                            <option
                                                                                                data-tokens="Saint">
                                                                                                Saint Martin
                                                                                            </option>
                                                                                            <option
                                                                                                data-tokens="Kuakata">
                                                                                                Kuakata</option>
                                                                                            <option
                                                                                                data-tokens="Sajeq">
                                                                                                Sajeq</option>
                                                                                        </select>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="input-box">
                                                                                        <label>Post Code/Zip
                                                                                            Code<em>*</em></label>
                                                                                        <input type="text"
                                                                                            name="zipcode"
                                                                                            class="info"
                                                                                            placeholder="Zip Code"value="<?php echo $zipcode ; ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div
                                                                                        class="create-acc clearfix mtb-20">
                                                                                        <input type="submit" name="billupdate" class="btn-def btn2" style="background-color:black; color:white;" value="Submit">
                                                                                       <!-- <div class="acc-toggle">
                                                                                            <input type="checkbox"
                                                                                                id="acc-toggle">
                                                                                            <label
                                                                                                for="acc-toggle">Create
                                                                                                an Account ?</label>
                                                                                        </div>-->
                                                                                       <!-- <div
                                                                                            class="create-acc-body">
                                                                                            <div class="sm-des">
                                                                                                Create an account by
                                                                                                entering the
                                                                                                information
                                                                                                below. If you are a
                                                                                                returning customer
                                                                                                please login at the
                                                                                                top
                                                                                                of the page.
                                                                                            </div>
                                                                                            <div class="input-box">
                                                                                                <label>Account
                                                                                                    password
                                                                                                    <em>*</em></label>
                                                                                                <input
                                                                                                    type="password"
                                                                                                    name="pass"
                                                                                                    class="info"
                                                                                                    placeholder="Password">
                                                                                            </div>
                                                                                        </div> -->
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <!--    <div class="col-lg-6">
                                                                <div class="billing-details">
                                                                    <div class="right-side">
                                                                        <div class="ship-acc clearfix">
                                                                            <div class="ship-toggle pb20">
                                                                                <input type="checkbox"
                                                                                    id="ship-toggle">
                                                                                <label for="ship-toggle">Ship to a
                                                                                    different address?</label>
                                                                            </div>
                                                                            <div class="ship-acc-body">
                                                                                <form action="#">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>First Name
                                                                                                    <em>*</em></label>
                                                                                                <input type="text"
                                                                                                    name="namm"
                                                                                                    class="info"
                                                                                                    placeholder="First Name">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Last
                                                                                                    Name<em>*</em></label>
                                                                                                <input type="text"
                                                                                                    name="namm"
                                                                                                    class="info"
                                                                                                    placeholder="Last Name">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Company
                                                                                                    Name</label>
                                                                                                <input type="text"
                                                                                                    name="cpany"
                                                                                                    class="info"
                                                                                                    placeholder="Company Name">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Email
                                                                                                    Address<em>*</em></label>
                                                                                                <input type="email"
                                                                                                    name="email"
                                                                                                    class="info"
                                                                                                    placeholder="Your Email">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Phone
                                                                                                    Number<em>*</em></label>
                                                                                                <input type="text"
                                                                                                    name="phone"
                                                                                                    class="info"
                                                                                                    placeholder="Phone Number">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Country
                                                                                                    <em>*</em></label>
                                                                                                <select
                                                                                                    class="selectpicker select-custom"
                                                                                                    data-live-search="true">
                                                                                                    <option
                                                                                                        data-tokens="Bangladesh">
                                                                                                        Bangladesh
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="India">
                                                                                                        India
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Pakistan">
                                                                                                        Pakistan
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Pakistan">
                                                                                                        Pakistan
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Srilanka">
                                                                                                        Srilanka
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Nepal">
                                                                                                        Nepal
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Butan">
                                                                                                        Butan
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="USA">
                                                                                                        USA</option>
                                                                                                    <option
                                                                                                        data-tokens="England">
                                                                                                        England
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Brazil">
                                                                                                        Brazil
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Canada">
                                                                                                        Canada
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="China">
                                                                                                        China
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Koeria">
                                                                                                        Koeria
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Soudi">
                                                                                                        Soudi Arabia
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Spain">
                                                                                                        Spain
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="France">
                                                                                                        France
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Address
                                                                                                    <em>*</em></label>
                                                                                                <input type="text"
                                                                                                    name="add1"
                                                                                                    class="info mb-10"
                                                                                                    placeholder="Street Address">
                                                                                                <input type="text"
                                                                                                    name="add2"
                                                                                                    class="info mt10"
                                                                                                    placeholder="Apartment, suite, unit etc. (optional)">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Town/City
                                                                                                    <em>*</em></label>
                                                                                                <input type="text"
                                                                                                    name="add1"
                                                                                                    class="info"
                                                                                                    placeholder="Town/City">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>State/Divison
                                                                                                    <em>*</em></label>
                                                                                                <select
                                                                                                    class="selectpicker select-custom"
                                                                                                    data-live-search="true">
                                                                                                    <option
                                                                                                        data-tokens="Barisal">
                                                                                                        Barisal
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Dhaka">
                                                                                                        Dhaka
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Kulna">
                                                                                                        Kulna
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Rajshahi">
                                                                                                        Rajshahi
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Sylet">
                                                                                                        Sylet
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Chittagong">
                                                                                                        Chittagong
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Rangpur">
                                                                                                        Rangpur
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Maymanshing">
                                                                                                        Maymanshing
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Cox">
                                                                                                        Cox's Bazar
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Saint">
                                                                                                        Saint Martin
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Kuakata">
                                                                                                        Kuakata
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Sajeq">
                                                                                                        Sajeq
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Post Code/Zip
                                                                                                    Code<em>*</em></label>
                                                                                                <input type="text"
                                                                                                    name="zipcode"
                                                                                                    class="info"
                                                                                                    placeholder="Zip Code">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form">
                                                                            <div class="input-box">
                                                                                <label>Order Notes</label>
                                                                                <textarea
                                                                                    placeholder="Notes about your order, e.g. special notes for delivery."
                                                                                    class="area-tex"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Checkout are end-->
                                    </div>
                      <?php 
                 
                    
                $selectcheckout="SELECT c.id as CID , c.* , p.* FROM cart c,product p WHERE c.product_id=p.id and c.user_id = '".$_SESSION['user_id']."' " ;
                $resultchk=mysqli_query($conn,$selectcheckout);      
                
                      ?>
                                    <div role="tabpanel" class="tab-pane  fade in" id="complete-order">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="checkout-payment-area">
                                                    <div class="checkout-total mt20">
                                                        <h3>Your order</h3>
                                                        <form action="#" method="post">
                                                            <div class="table-responsive">
                                                                <table class="checkout-area table">
                                                                    <thead>
                                                                        <tr class="cart_item check-heading">
                                                                            <td class="ctg-type"> Product</td>
                                                                            <td class="cgt-des"> Total</td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 
                                                                    $carttotal=0;     
                                                                        while ($row=mysqli_fetch_assoc($resultchk)) {
                                                                            $ids=$row['CID'];
                                                                        
                                                                                    $productname=$row['name'];
                                                                                    $productprice=$row['price'];
                                                                                    $productimage=$row['image'];
                                                                         $img='../admin/uploads/'.$productimage;
                                                                                    $productqty=$row['quantity'];
                                                                            $qty=$row['qty']; 
                                                                        
                                                                                $totalamount=$productprice*$productqty;
                                                                                $carttotal=$carttotal+$totalamount;    
                                                        


                                                                    ?>

                                                                        <tr class="cart_item check-item prd-name">
                                                                            <td class="ctg-type"> <?php echo $productname; ?> ×
                                                                                <span><?php echo  $productqty; ?></span></td>
                                                                            <td class="cgt-des"> <?php echo $totalamount; ?></td>
                                                                        </tr>

                                                                    <?php 

                                                                        }
                                                                            ?>





                                                                      <!--  <tr class="cart_item">
                                                                            <td class="ctg-type">Shipping</td>
                                                                            <td class="cgt-des ship-opt">
                                                                                <div class="shipp">
                                                                                    <input type="radio"
                                                                                        id="pay-toggle" name="ship">
                                                                                    <label for="pay-toggle">Flat
                                                                                        Rate:
                                                                                        <span>$03</span></label>
                                                                                </div>
                                                                                <div class="shipp">
                                                                                    <input type="radio"
                                                                                        id="pay-toggle2"
                                                                                        name="ship">
                                                                                    <label for="pay-toggle2">Free
                                                                                        Shipping</label>
                                                                                </div>
                                                                            </td>
                                                                        </tr> -->
                                                                        <tr class="cart_item">
                                                                            <td class="ctg-type crt-total"> Total
                                                                            </td>
                                                                            <td class="cgt-des prc-total"> <?php echo $carttotal; ?>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="payment-section mt-20 clearfix">
                                                        <div class="pay-toggle">
                                                            <form  method="POST">
                                                                <div class="pay-type-total">
                                                                    <!--<div class="pay-type">
                                                                        <input type="radio" id="pay-toggle01"
                                                                            name="pay">
                                                                        <label for="pay-toggle01">Direct Bank
                                                                            Transfer</label>
                                                                    </div>
                                                                    <div class="pay-type">
                                                                        <input type="radio" id="pay-toggle02"
                                                                            name="pay">
                                                                        <label for="pay-toggle02">Cheque
                                                                            Payment</label>
                                                                    </div>-->
                                                                    <div class="pay-type">
                                                                        <input type="radio" id="pay-toggle03"
                                                                            name="pay" selected="true" >
                                                                        <label for="pay-toggle03">Cash on
                                                                            Delivery</label>
                                                                    </div>
                                                                      <div class="pay-type">
                                                                        <input type="radio" id="pay-toggle03"
                                                                            name="pay" value="online" selected="true" >
                                                                        <label for="pay-toggle03">Online Payment
                                                                            </label>
                                                                    </div>
                                                                   <!-- <div class="pay-type">
                                                                        <input type="radio" id="pay-toggle04"
                                                                            name="pay">
                                                                        <label for="pay-toggle04">Paypal</label>
                                                                    </div>-->
                                                                </div>
                                                                <style>
                                                                .boo{
                                                                    
                                                                    height: 50px !important;
                                                                    width: 100% !important;
                                                                    line-height: 50px;
                                                                    text-align: center;
                                                                    background: #333 none repeat scroll 0 0;
                                                                    border: 1px solid #333;
                                                                    color: #fff;
                                                                    height: 35px;
                                                                    line-height: 33px;
                                                                    padding: 0 15px;
                                                                    cursor:pointer;
                                                                    display: inline-block;
                                                                    font-size: 14px;
                                                                    font-weight: bold;
                                                                }
                                                                .boo:hover{
                                                                    background: #d82d2d none repeat scroll 0 0;
                                                                    color: #fff;
                                                                }
                                                                </style>
                                                                <div class=" mt-20">
                                                                <input type="submit" name="placeorder" value="PLACE ORDER" class="boo" >
                                                                    
                                                                </div>
                                                            </form>
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
            </div>
        </div>
        <!--cart-checkout-area end-->



















<?php include "footer.php"; ?>