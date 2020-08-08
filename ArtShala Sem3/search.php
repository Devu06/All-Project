<?php 

session_start();

require('database.php');


function product($detail1,$k,$page)
	{
		echo "<div class=\"col-md-3 col-sm-6\">";
                    echo"<div class=\"single-shop-product\">";
                        echo"<div class=\"product-upper\">";
						$img= $detail1[$k][2];
        $id=$detail1[$k][2];
						$ph=$img.".php";
                          
						$img=$img.".jpeg";
						
                            echo"<img src=\"img/$img\" alt=\"\">";
                        echo"</div>";
                        echo"<h2>"; echo $detail1[$k][0]; echo"</h2>";
                        echo"<div class=\"product-carousel-price\">";
						echo "<i class=\"fa fa-inr\"></i>";
                            
							echo " ".$detail1[$k][1]; 
							echo"</ins>"; 
                        echo"</div>";  
                        
                        echo"<div class=\"product-option-shop\">";
                           echo" <a class=\"button\" rel=\"nofollow\" href=\"$page.php?id=$id\">View Product</a>";
                        echo"</div>";                       
                    echo"</div>";
                echo"</div>";
	}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Sundarbans</title>
    

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
    </div> <!-- End header area -->
    
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
                        <a href="cart.php">Cart-&#8377; <?php if(isset($_SESSION['count'])) echo $_SESSION['total']; ?><span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php if(isset($_SESSION['count'])) echo $_SESSION['count']; ?></span></a>
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
						
                        <li><a href="electronics.php">Electronics</a></li>
                        <li class="active"><a href="search.php">Search</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Search</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        
        <div class="col-md-12">
            <div class="product-bit-title text-center">
        <form action="search.php" method="get">
        <input type="search" name="search" value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>" size="100">
            <input type="submit" name="submit" class="fa-fa" value="&#xf002;">
        </form>
            </div>
        </div>
        
 </div>
      
      
      
       <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <?php
                
                if(isset($_GET['submit']))
{
    $search= $_GET['search'];
    
    
    $q3=mysqli_query($con,"select pname,price,prodid from phones where pname like '%$search' or pname like '$search%' or pname like '%$search%' ");
     $count3= mysqli_num_rows($q3);
    $q4=mysqli_query($con,"select pname,price,prodid from laptops where pname like '%$search' or pname like '$search%' or pname like '%$search%' ");
          $count4= mysqli_num_rows($q4);           
    for($i=0;$detail3[$i]=mysqli_fetch_array($q3,MYSQLI_ASSOC);$i++);
    for($i=0;$i<$count3;$i++)
    {
        product($detail3,$i,"phone");
    }
    for($i=0;$detail4[$i]=mysqli_fetch_array($q4,MYSQLI_ASSOC);$i++);
    for($i=0;$i<$count4;$i++)
    {
        product($detail4,$i,"laptop");
    }
                    
}


if(isset($_GET['id']))
{
    $search= $_GET['id'];
    $q1=mysqli_query($con,"select pname,price,prodid from watch where brand = '$search' ");
     $count1= mysqli_num_rows($q1);
    $q2=mysqli_query($con,"select pname,price,prodid from wallets where  brand = '$search' ");
                     $count2= mysqli_num_rows($q2);
    $q3=mysqli_query($con,"select pname,price,prodid from phones where  brand = '$search' ");
     $count3= mysqli_num_rows($q3);
    $q4=mysqli_query($con,"select pname,price,prodid from laptops where  brand = '$search' ");
          $count4= mysqli_num_rows($q4);           
    for($i=0;$detail1[$i]=mysqli_fetch_array($q1,MYSQLI_ASSOC);$i++);
    for($i=0;$i<$count1;$i++)
    {
        product($detail1,$i,"watch");
    }
     for($i=0;$detail2[$i]=mysqli_fetch_array($q2,MYSQLI_ASSOC);$i++);
    for($i=0;$i<$count2;$i++)
    {
        product($detail2,$i,"wallet");
    }
    for($i=0;$detail3[$i]=mysqli_fetch_array($q3,MYSQLI_ASSOC);$i++);
    for($i=0;$i<$count3;$i++)
    {
        product($detail3,$i,"phone");
    }
    for($i=0;$detail4[$i]=mysqli_fetch_array($q4,MYSQLI_ASSOC);$i++);
    for($i=0;$i<$count4;$i++)
    {
        product($detail4,$i,"laptop");
    }
                    
    
}
                ?>
            </div>
           </div>
           <div class="promo-area">
          
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
      </div>
      

   <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>  Sundarbans</span></h2>
                        
                        
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
                        <p>&copy; 2015  Sundarbans. All Rights Reserved.</a></p>
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