<?php
 include "header.php";
 include "database.php";
  ?>

<?php

	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$pass=$_POST['password'];
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $city=$_POST['city'];
        $pincode=$_POST['pincode'];
        $state=$_POST['state'];
        $country=$_POST['country'];
        $address=$_POST['address'];

//INSERT INTO `register`(`id`, `email`, `password`, `name`, `contact`, `address`, `city`, `pincode`, `state`, `country`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])
		$insert="INSERT INTO `users`( `email`, `password`, `name`, `mobile`, `address`, `city`, `pincode`, `state`, `country`) VALUES ('".$email."','".$pass."','".$name."','".$contact."','".$address."','".$city."','".$pincode."','".$state."','".$country."')";
		$result=mysqli_query($conn,$insert);
		if($result){
			?>
            <script type="text/javascript">
                alert("Registered Successfully!");
            </script>
            <?php
		}else{
			?>
            <script type="text/javascript">
                alert("Registered Failed!");
            </script>
            <?php
		}

	}



?>





 <!--breadcumb area start -->
        <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5> Register</h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                    <li class="active">Register</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->
      

<style>
.btn-def.btn2 {
    background: #333 none repeat scroll 0 0;
    border: 1px solid #333;
    color: #fff;
    height: 35px;
    line-height: 33px;
    padding: 0 15px;
}
 .btn-def {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #333;
    border-radius: 0;
    box-shadow: none;
    color: #333;
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    height: 40px;
    letter-spacing: 1px;
    line-height: 38px;
    padding: 0 20px;
    text-shadow: none;
    text-transform: uppercase;
    transition: all 0.3s ease 0s;
    white-space: nowrap;
}
</style>

        <!-- Account Area Start -->
        <div class="account-area ptb-80">
            <div class="container">
                <div class="row">
                    

                    <div class="col-md-3"></div>
                    <div class="col-md-6 lr2">
                        <form action="register.php" method="POST">
                            <div class="login-reg">
                                <h3>Register</h3>
                                <div class="input-box mb-20">
                                    <label class="control-label">Full Name</label>
                                    <input type="text" class="info" placeholder="Your Full Name*" value="" name="name" required>
                                </div>
                                <div class="input-box mb-20">
                                    <label class="control-label">Contact No</label>
                                    <input type="number" class="info" placeholder="Contact No*" value="" name="contact" required>
                                </div>
                                <div class="input-box mb-20">
                                    <label class="control-label">E-Mail</label>
                                    <input type="email" class="info" placeholder="E-Mail*" value="" name="email" required>
                                </div>
                                <div class="input-box mb-20">
                                    <label class="control-label">Address</label>
                                    <textarea class="info" name="address" placeholder="Address*"></textarea>
                                </div>

                                <div class="row">
                                <div class="col-md-6">
                                <div class="input-box mb-20">
                                    <label class="control-label">City</label>
                                    <input type="text" class="info" placeholder="City*" value="" name="city" required>
                                </div>
                            </div>
                    <div class="col-md-6">
                                <div class="input-box mb-20">
                                    <label class="control-label">Pincode</label>
                                    <input type="text" class="info" placeholder="Pincode*" value="" name="pincode" required>
                                </div>
                            </div> 
                            </div>

                                <div class="row">
                                <div class="col-md-6">
                                 <div class="input-box mb-20">
                                    <label class="control-label">State</label>
                                    <input type="text" class="info" placeholder="State*" value="" name="state" required>
                                </div>
                            </div>
                                <div class="col-md-6">
                                 <div class="input-box mb-20">
                                    <label class="control-label">Country</label>
                                    <input type="text" class="info" placeholder="Country*" value="" name="country" required>
                                </div>
                            </div>
                        </div>

                                <div class="input-box">
                                    <label class="control-label">Password</label>
                                    <input type="password" class="info" placeholder="Password" value="" name="password" required>
                                </div>
                            </div>
                            <div class="frm-action">
                                <div class="input-box tci-box">
                                	<input type="submit" name="submit" class="btn-def btn2" value="Register">
                                   
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Account Area End -->

<?php include "footer.php"; ?>