<?php include "header.php";
include "database.php";
$select1="SELECT c.id as CID, c.qty as QID ,c.status as STID , c.* , p.* FROM order_data c,product p WHERE c.product_id=p.id and c.user_id = '".$_SESSION['user_id']."' ";
    $result1=mysqli_query($conn,$select1);
    //echo $select;
?>

        <!--breadcumb area start -->
        <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>My Account</h5>
                </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                    <li class="active">Account</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->

        <!--service idea area are start -->
        <div class="idea-area  ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="idea-tab-menu">
                            <ul class="nav idea-tab" role="tablist">
                               <!-- <li role="presentation"><a class="active" href="#creativity" aria-controls="creativity"
                                        role="tab" data-toggle="tab">Personal Info</a></li>
                                <li role="presentation"><a href="#ideas" aria-controls="ideas" role="tab"
                                        data-toggle="tab">Shipping Address</a></li>
                                <li role="presentation"><a href="#design" aria-controls="design" role="tab"
                                        data-toggle="tab">Billing Details</a></li> -->
                                <li role="presentation"><a href="#devlopment" aria-controls="devlopment" role="tab"
                                        data-toggle="tab">My Order</a></li>
                                <li role="presentation"><a href="#markenting" aria-controls="markenting" role="tab"
                                        data-toggle="tab">Payment Method</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="idea-tab-content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                
                                <div role="tabpanel" class="tab-pane fade show active" id="devlopment">
                                   
                                <div class="cart-page-area">
                                            
                                            <div class="table-responsive mb-20">
                                                
                                                <table class="shop_table-2 cart table">

                                                    <thead>
                                                        <tr>
                                                        <th class="product-thumbnail ">Product Id</th>
                                                            <th class="product-thumbnail ">Image</th>
                                                            <th class="product-name ">Product Name</th>
                                                            <th class="product-price ">Unit Price</th>
                                                            <th class="product-price ">Quantity</th>
                                                            <th class="product-price ">Total</th>
                                                            <th class="product-price ">Status</th>
                                                            
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                                            <?php
                                                                            while ($row=mysqli_fetch_assoc($result1)) {
                                                            $ids=$row['CID'];

                                                            $productname=$row['name'];
                                                            $orderid=$row['order_number'];
                                                            $status=$row['STID'];
                                                            $productprice=$row['price'];
                                                            $productimage=$row['image'];
                                                $img='../admin/uploads/'.$productimage;
                                                            $productqty=$row['QID'];
                                                    $qty=$row['qty']; 

                                                        $totalamount=$productprice*$productqty;
                                                       
                                                                
                                                            
                                                        ?>

                                                        <tr class="cart_item">
                                                        <td class="item-price"> <?php echo $orderid; ?>  </td>
                                                            <td class="item-img">
                                                                <a href="#"><img src="<?php echo $img; ?>"
                                                                        alt="">
                                                                </a>
                                                            </td>
                                                            <td class="item-title"> <a href="#"><?php echo $productname; ?> </a></td>
                                                            <td class="item-price"> ???<?php echo $productprice; ?>  </td>
                                                            <td class="item-price"> <?php echo $productqty; ?>  </td>
                                                            <td class="item-price"> ???<?php echo $totalamount; ?>  </td>
                                                            <td class="item-price"> <?php echo $status; ?>  </td>
                                                      
                                                            
                                                         
                                                        </tr>
                                                   <?php } ?>     
                                                    </tbody>
                                                </table>
                                                
                                            </div>


                          
                                        
                                    </div>



                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="markenting">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-box mb-20">
                                                <label>Card Type <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="paypal">Paypal</option>
                                                    <option data-tokens="visa">visa</option>
                                                    <option data-tokens="master-card">master-card</option>
                                                    <option data-tokens="discover">discover</option>
                                                    <option data-tokens="payneor">payneor</option>
                                                    <option data-tokens="skrill">skrill</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Card Number<em>*</em></label>
                                                <input type="text" name="email" class="info" placeholder="Card Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Security Code<em>*</em></label>
                                                <input type="text" name="phone" class="info" placeholder="Security Code">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Month <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Januray">Januray</option>
                                                    <option data-tokens="February">February</option>
                                                    <option data-tokens="March">March</option>
                                                    <option data-tokens="April">April</option>
                                                    <option data-tokens="May">May</option>
                                                    <option data-tokens="June">June</option>
                                                    <option data-tokens="July">July</option>
                                                    <option data-tokens="August">August</option>
                                                    <option data-tokens="September">September</option>
                                                    <option data-tokens="Ocotober">Ocotober</option>
                                                    <option data-tokens="November">November</option>
                                                    <option data-tokens="December">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Year<em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="2019">2019</option>
                                                    <option data-tokens="2017">2017</option>
                                                    <option data-tokens="2018">2018</option>
                                                    <option data-tokens="2019">2019</option>
                                                    <option data-tokens="2020">2020</option>
                                                    <option data-tokens="2021">2021</option>
                                                    <option data-tokens="2022">2022</option>
                                                    <option data-tokens="2023">2023</option>
                                                    <option data-tokens="2024">2024</option>
                                                    <option data-tokens="2025">2025</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="payment-btn-area mt-20 row">
                                                <div class="col-md-4 text-left">
                                                    <a class="btn-def btn2" href="#">Pay Now</a>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <a class="btn-def btn2" href="#">Cancel Order</a>
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <a class="btn-def btn2" href="#">Continue</a>
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
        <!--service idea area are end -->






<?php 
 include "footer.php";
?>