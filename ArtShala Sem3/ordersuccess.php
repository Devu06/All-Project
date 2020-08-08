<?php
session_start();
require('database.php');
$orderid=$_GET['id'];
$email=$_SESSION['username'];
$q=mysqli_query($con,"select name,email,address1,phone from users where email='$email'");
$detail=mysqli_fetch_array($q,MYSQLI_ASSOC);
$q1=mysqli_query($con,"select total,date from orders where order_id=$orderid");
$detail1=mysqli_fetch_array($q1,MYSQLI_ASSOC);
$q2= mysqli_query($con,"select payment_mode from payments where order_id=$orderid");
$detail2= mysqli_fetch_array($q2,MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sundarbans</title>
    

    <link href="css/font.css" rel="stylesheet">
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    

  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                             <li><a href="acc.php"><i class="fa fa-user"></i> My Account</a></li>
                           <li><a href="wishlist.php"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                            <?php
                            if(isset($_SESSION['username']))
                            {
                                echo '<li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>';
                            }
                            else
                                echo '<li><a href="register.php"><i class="fa fa-user"></i> Register/Login</a></li>';
                            ?>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> 
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php"><span> &nbsp; Sundarbans</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart - <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php if(isset($_SESSION['count'])) echo $_SESSION['count']; ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                       
                        <li><a href="accessories.php">Accessories</a></li>
                        <li><a href="electronics.php">Electronics</a></li>
                        <li><a href="search.php">Search</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> 
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Order Placed</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="alert alert-success">
  <h2> Thank You For Placing Order With Us</h2>
                <h4> Order Number is:<?php echo $orderid; ?> </h4>
</div>
           <div class="well well-sm">
            
            <br>
            <h4>Your payment has been processed and your order is complete. We will be dispatching your order soon. </h4>
            
            <h4>If you have any additional queries or issues regarding the order, please contact us.</h4>
            <br>
            <h4> Below is the detail of your order for refrence.</h4>
            <h4><center>Name: <?php echo $detail[0]; ?> </center></h4>
            <h4><center>Email: <?php echo $detail[1]; ?> </center></h4>
            <h4><center>Address: <?php echo $detail[2]; ?> </center></h4>
            <h4><center>Phone: <?php echo $detail[3]; ?></center></h4>
          <h4><center>Total Amount: <?php echo $detail1[0]; ?> </center></h4>
             <h4><center>Order Date: <?php echo $detail1[1]; ?> </center></h4>
  
             <h4><center>Payment Mode: <?php echo $detail2[0]; ?> </center></h4>
             
            </div>
            <center><a class="btn btn-success btn-lg" href="myorders.php">
  <i class="fa fa-shopping-cart"></i> &nbsp; View Your Orders</a></center>
            
  
  
  
    </div>
 </div>

   <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>  Sundarbans</span></h2>
                        <p></p>
                        
                    </div>
                </div>
				
				<div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                                                
                    </div>
                </div>
                
                 <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="acc.php">My account &nbsp; <i class="fa fa-user"></i></a></li>
                            <li><a href="myorders.php">Order history &nbsp; <i class="fa fa-history"></i></a></li>
                            <li><a href="cart.php">Cart &nbsp; <i class="fa fa-shopping-cart"></i></a></li>
                            
                        </ul>                        
                    </div>
                </div>
				
				<div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                                                
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            
                            <li><a href="accessories.php">Accessories</a></li>
                            <li><a href="electronics.php">Electronics</a></li>
                        </ul>                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> 
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2019 Sundarbans. All Rights Reserved.</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        
                        <i class="fa fa-cc-mastercard"></i>
                        
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script src="js/jquery-2.1.4.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    
   
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
   
    <script src="js/jquery.easing.1.3.min.js"></script>
    
   
    <script src="js/main.js"></script>
  </body>
</html>