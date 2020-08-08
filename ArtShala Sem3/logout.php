<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Urban Ladder</title>
    

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
                            <li><a href="register.php"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php"> <span>  Sundarbans</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="#">Cart - <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $_SESSION['count']; ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
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
                        <li><a href="clothing.php">Clothing</a></li>
						<li><a href="footwear.php">Footwear</a></li>
                        <li><a href="accessories.php">Accessories</a></li>
                        <li><a href="electronics.php">Electronics</a></li>
                        <li><a href="search.php">Search</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="well well-sm">
				<center><h4> You have been successfully logged out.</h4></center>
                    </div>  
                <center><a href="register.php"><button type="button" class="btn btn-primary btn-lg">Login</button></a></center>
				
				               
               
                
            
            
        </div>
    </div>
 </div>

   <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2> <span>  Sundarbans</span></h2>
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
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015   Sundarbans. All Rights Reserved.</a></p>
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
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="js/jquery-2.1.4.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>