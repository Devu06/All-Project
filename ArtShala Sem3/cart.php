<?php
error_reporting(0);
require('database.php');
session_start();

if(isset($_SESSION['username']))
$email=$_SESSION['username'];
else
    header("Location: register.php");
if(isset($_POST['submitt']))
$prod=$_GET['delete'];
$q=mysqli_query($con,"select * from cart where email='$email'");
$count=mysqli_num_rows($q);
$_SESSION['count']=$count;




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  Sundarbans</title>
    

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
                        <h1><a href="index.php"> <span>Sundarbans</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart-&#8377; <?php if(isset($_SESSION['count'])) echo $_SESSION['total']; ?> <span class="cart-amunt">
						
						</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $count; ?></span></a>
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
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    
                    
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                           
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                        error_reporting(0);
                                        for($j=0;$j<$count;$j++)
									{
									$prod=$detail[$j][1];
									$pro=$prod[0].$prod[1];
									switch($pro)
										{
									case "WA":
									$tabname="wallets";
									break;
									case "WT":
									$tabname="watch";
									break;
                                        case "PH":
                                            $tabname="phones";
                                            break;
                                        case "LA":
                                            $tabname="laptops";
                                            break;
	
									    }
									$q1=mysqli_query("$con,select pname,price from $tabname where prodid='$prod'");
									$count1=mysqli_num_rows($q1);
									for($i=0;$detail1[$i]=mysqli_fetch_array($q1,MYSQLI_ASSOC);$i++);	
									for($k=0;$k<$count1;$k++)
									{
										
									
									?>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                 
                                                <form action="cart.php?delete=<?php echo $prod; ?>" method="post">
                                                    <input type="submit" name="submitt" value="&#xf00d;" class="fa-fa" style="padding:3px; padding-top:1px; padding-bottom:1px;">
                                                </form>
                                            </td>

                                            <td class="product-thumbnail">
											<?php if($tabname=="wallets")
												   $page="wallet";
											   if($tabname=="watch")
												   $page="watch";
											   if($tabname=="phones")
												   $page="phone";
											   if($tabname=="laptops")
												   $page="laptop";
											   
											      
											?>
											
											
                                                <a href=" <?php echo "$page.php?id=$prod" ?>"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/<?php echo $prod.".jpeg" ?> "></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="<?php echo "$page.php?id=$prod" ?>"><?php echo $detail1[$k][0]; ?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"> &#8377;&nbsp;<?php $total=$total+$detail1[$k][1]*$detail[$j][2];	echo $detail1[$k][1]; ?></span> 
                                            </td>

                                            <td class="product-quantity">
                                                <span class="amount"><?php echo $detail[$j][2] ?></span>
                                            </td>

                                            
                                        </tr>
									<?php } } ?>
									<tr>
                                            <td class="product_name" colspan="6">
											
                                                
                                               <center> Total amount = &#8377; <?php echo $total; 
                                                                                            $_SESSION['total']=$total;
                                                   ?> </center>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                
                                               <?php
                                                if($total!=0)
                                                {
                                              echo '<a class="btn btn-success" href="checkout.php">
  <i class="fa fa-shopping-cart"></i> &nbsp; Proceed to Checkout</a>';
                                                }
                                                else
                                                { echo '<div class="alert alert-info">';
                                                    echo 'Add Some Items To Cart To Place Order';
                                                 echo '</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
									
                                    </tbody>
                                </table>
                            

                            <div class="cart-collaterals">


                                


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
                        <h2> <span>  Sundarbans</span></h2>
                        
                        
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
                        <p>&copy; 2019   Sundarbans. All Rights Reserved.</a></p>
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