<?php
session_start();



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
                        <h1><a href="index.php"><span>  Sundarbans</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                         <a href="cart.php">Cart-&#8377; <?php if(isset($_SESSION['total'])) echo $_SESSION['total']; ?> <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php if(isset($_SESSION['count'])) echo $_SESSION['count']; ?></span></a>
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
                        <li class="active"><a href="index.php">Home</a></li>
                        
                        <li><a href="accessories.php">Accessories</a></li>
                        <li><a href="electronics.php">Electronics</a></li>
                        <li><a href="search.php">Search</a></li>
                       
                    </ul>
                </div>  
            </div>
        </div>
    </div> 
    
    <div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-one"></div>
                        <div class="slide-text-wrapper">
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>        
    </div> 
    <div class="promo-area">
        <div class="zigzag-bottom"></div> 
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-money"></i>
                        <p>Cash On Delivery</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-cc-visa"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="promo-area">
       <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Brands</h2>
                        <div class="brand-list">
                            <a href="search.php?id=htc"><img src="img/htc.jpe" alt=""></a>
                            <a href="search.php?id=asus"><img src="img/asus.jpg" alt=""></a>
                            <a href="search.php?id=dell"><img src="img/dell.png" alt=""></a>
                            
                            <a href="search.php?id=puma"><img src="img/puma.png" alt=""></a>
                            <a href="search.php?id=reebok"><img src="img/reebok.png" alt=""></a>
                            <a href="search.php?id=titan"><img src="img/titan.png" alt=""></a>
                            <a href="search.php?id=woodland"><img src="img/woodland.jpeg" alt=""></a>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>Sundarbans</span></h2>
                        
                    </div>
                </div>
				
				<div class="col-md-3 col-sm-6">
                    
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