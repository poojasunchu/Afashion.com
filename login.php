<?php include "header.php";
      include "database.php";

?>

<?php

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];

   $select="SELECT * FROM users  WHERE email = '".$email."' ";
    $result=mysqli_query($conn,$select);
$chk=0;
    while ($row=mysqli_fetch_assoc($result)) {
        if($email == $row['email']){
            $chk=1;
            $user_id=$row['id'];
        }
    }
if($chk=='1'){
        $_SESSION['loginchk']=true;
        $_SESSION['user_id']=$user_id;
    ?>
            <script type="text/javascript">
                alert("Successfully Logged In!");
                window.location.replace('index.php');
            </script>
            <?php
}else{
    $_SESSION['loginchk']="";
    $_SESSION['user_id']="";
}


}

?>
<style >
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




        <!--breadcumb area start -->
        <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Login </h5> </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->
        
        <!-- Account Area Start -->
        <div class="account-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                                     <div class="col-md-6 lr2">
                        <form action="login.php" method="POST">
                    
                           <div class="login-reg">
                                <h3>Login</h3>
                                <div class="input-box mb-20">
                                    <label class="control-label">E-Mail</label>
                                    <input type="email" class="info" placeholder="E-Mail" value="" name="email" required>
                                </div>
                                <div class="input-box">
                                    <label class="control-label">Password</label>
                                    <input type="password" class="info" placeholder="Password" value="" name="password" required>
                                </div>
                            </div>
                            <div class="frm-action">
                                <div class="input-box tci-box">
                                    <input type="submit" name="submit" class="btn-def btn2" value="Login">
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Account Area End -->
