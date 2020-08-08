
<?php
require('database.php');
session_start();
if(isset($_SESSION['username']))
	$email=$_SESSION['username'];
else
	header("Location: register.php");
$email=$_SESSION['username'];
$q=mysqli_query($con,"select name,phone,address1 from users where email='$email'");

$details[0]=mysqli_fetch_array($q,MYSQLI_ASSOC);

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
                        <h1><a href="index.php"> <span>  Sundarbans</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                          <a href="cart.php">Cart-&#8377; <?php if(isset($_SESSION['count'])) echo $_SESSION['total']; ?><span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php if(isset($_SESSION['count'])) echo $_SESSION['count']; ?></span></a>
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
                        <h2>My Account</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <br><br>
            </div>
        </div>
      <div class="row">
        <div class="col-md-12" style="margin-left:450px;">
          
                             
                                    
                            
          </div>
        </div>
      </div>
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                
                
				
				                <div class="col-md-2">
                                 
                                            
                                             <?php
                                    if(isset($_POST['changep'])){
                                        $oldp= $_POST['oldpassword'];
                                        $newp= $_POST['password'];
                                        $p=mysqli_query($con,"select password from users where email='$email'");
                                        $pass= mysqli_fetch_array($p,MYSQLI_ASSOC);
                                        if($pass[0]==$oldp)
                                        {
                                            mysqli_query($con,"update users set password='$newp' where email='$email'");
                                             echo "<script> alert(\"Password Successfully Changed\"); </script>";
                                            
                                        }
                                        else
                                        {
                                            echo "<script> alert(\"Entered Wrong Password\"); </script>";
                                        }
                                        
                                    }
                                     
                                   
                                    ?>
                                    
                    
                    
                </div>
                
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
						<div class="row">
						<div class="col-md-3">
                            <?php
                            if(isset($_POST['submit']))
{   
		
		if(empty($_POST['phone']))
		{
			$address=$_POST['address'];
			mysqli_query($con,"update users set address1='$address' where email='$email'");
            echo '<script> alert("Address Updated Successfully"); </script>';
            echo "<script>window.location.assign(\"acc.php\")</script>";
            
		}
		else if(empty($_POST['address']))
		{
			$phno=$_POST['phone'];
			mysqli_query($con,"update users set phone='$phno' where email='$email'");
            echo '<script> alert("Phone Number Updated Successfully"); </script>';
            echo "<script>window.location.assign(\"acc.php\")</script>";
            
		}
		else
		{
			$phno=$_POST['phone'];
		$address=$_POST['address'];
	mysqli_query($con,"update users set phone ='$phno' and address1='$address' where email='$email'");
            echo '<script> alert("Address and Phone Number Updated Successfully"); </script>';
            echo "<script>window.location.assign(\"acc.php\")</script>";
           
	}
}
                            ?>
                           
                           
                                    
                           
                                <table cellspacing="0" class="shop_table cart">
                                    
                              
									
                                        
                                            

                                            
                                       
										
										<tr>
										<td class="product-name">
                                            NAME
										</td>
										</tr>
										
										
										
										<tr>
										<td class="product-name">
                                            EMAIL ID 
										</td>
										</tr>
										
										
                                        
										
										<tr>
										<td class="product-name" style="padding:26px;">
                                            PHONE NO 
										</td>
										</tr>
										<tr>
										<td class="product-name" style="padding:26px;">
                                            ADDRESS 
										</td>
										</tr>
                                    <tr>
										<td class="product-name" style="padding:26px;">
                                            PASSWORD 
										</td>
										</tr>
								</table>
                            
						</div>
								<div class="col-md-2">
                                    
                           <form action ="acc.php" method="post">
                                <table cellspacing="0" class="shop_table cart">
								<tr>
								
										<td class="product-name">
										<?php echo $details[0][0];  ?>
										</td>
										
										</tr>
										<tr>
								
										<td class="product-name">
										<?php echo $email; ?>
										</td>
										
										</tr>
								        <tr>
								
										<td class="product-name">
										<input type="text" id="ph" onchange="return(validatephone());" name="phone" value="<?php echo $details[0][1]; ?>" disabled>
										</td>
										
										</tr>
										<script>
                                    function validatephone()
          {
              var phone1 = document.getElementById("ph");
              var phone = /^([+0-9]{1,3})?([0-9]{10,11})$/i;
              if(!phone.test(phone1.value))
                   {
                     alert("Enter Correct Phone");
                     phone1.focus();
                       return false;
                    }
              else 
                  return true;
          }
                                    </script>
										
										<tr>
										<td class="product-name">
										<input type="text" id="add" name="address" value="<?php echo $details[0][2]; ?>" disabled>
										</td>
										</tr>
										<tr>
                                            <tr>
										<td class="product-name">
										<input type="text" id="pass" name="password" value="<?php echo "**********"; ?>" disabled>
										</td>
										</tr>
										<tr>
                                            <td class="actions" colspan="6">
                                                
                                                
                                                <input type="submit" value="Submit" name="submit" id="sub" class="checkout-button button alt wc-forward" disabled>
                                            </td>
                                        </tr>
                                    </form>
										</table>
										
										</div>
                            <div class="col-md-1">
                            </div>
										
										<div class="col-md-2" >
                           
                                <table cellspacing="0" class="shop_table cart" style="margin-left:100px;">
									<tr>
								
										
										
										<td class="product-name" style="padding:27px">
										
										</td>
									</tr>
										
										
                                        <tr>
								
										
										
										<td class="product-name" style="padding:28px">
										</td>
										
										</tr>
										
										
                                        
								
								
										<tr>
								
										
										
										<td class="product-name" style="padding:24px">
										<button onclick="changeph();"><i class="fa fa-pencil icon-2X"></i> </button>
										<script>
										function changeph()
										{
											document.getElementById("ph").disabled=false;
											document.getElementById("sub").disabled=false;
										}
										</script>
										</td>
										</tr>
										
										
                                        <tr>
										
										
										<td class="product-name" style="padding:23px">
										<button onclick="changeadd();"><i class="fa fa-pencil icon-2X"></i> </button>
										<script>
										function changeadd()
										{
											document.getElementById("add").disabled=false;
											document.getElementById("sub").disabled=false;
										}
										</script>
										</td>
										
                                        </tr>
                                    <tr>
										
										
										<td class="product-name" style="padding:23px">
										<button type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil icon-2X"></i> </button>
                                            <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password</h4>
        </div>
        <div class="modal-body"> <form action="#" method="post">
         Old Password: <input type="password"  name="oldpassword"> <br> <br>
            New Password: <input type="password" name="password"> <br> <br>
            <input type="submit" name="changep" value="Change Password" style="margin-left:100px;">
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>  
										
										</td>
										
                                        </tr>
                                    
										</table>
                                            
                                            
										</div>
                          
										
										</div>
                            
                            
										</div>
										</div>
										</div>
										  
                                        
										</div>
            
										</div>

										
						</div>
      
						</div>
    
									
                                    </tbody>
									</form>

                                </table>
                            

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
    </div> 
    <script src="js/jquery-2.1.4.js"></script>
    
    
    <script src="js/bootstrap.min.js"></script>
    
   
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    
    <script src="js/jquery.easing.1.3.min.js"></script>
    
   
    <script src="js/main.js"></script>
  </body>
</html>