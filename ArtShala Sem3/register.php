<?php
session_start();
require('database.php');
$error="";
$count=8;
if(isset($_POST['login']))
{   
	$email = $_POST['username'];
	$lpassword = $_POST['lpassword'];
	$login= $_POST['login'];
	if($login)
	{   
		$q=mysqli_query($con,"select * from users where email='$email'");
		$count=mysqli_num_rows($q);
		if($count==0){
		echo "<script> alert(\"You are not registered\"); </script>";
		
		}
		else
		{
			$q1 = mysqli_query($con,"select password from users where email='$email'");
			$pass= mysqli_fetch_array($q1,MYSQLI_ASSOC);
			if(strcmp($pass,$lpassword)==0)
			{
				$_SESSION['username']=$email;
				 echo "<script> alert(\"Welcome $email\"); </script>";
				echo "<script>window.location.assign(\"index.php\")</script>";
               
			  
			}
			else{
				
				echo "<script> alert(\"Wrong Password\"); </script>";
		}}
	}
	
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
                        <h1><a href="index.php"><span>  Sundarbans</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart-&#8377; <?php if(isset($_SESSION['count'])) echo $_SESSION['total']; ?> <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?phpecho $count; ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>  <!-- End site branding area -->
    
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
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Register/Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                    
                    
                    
                    
                </div>
                
                <div class="col-md-4">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <div class="woocommerce-info">Already Registered<a class="showlogin" data-toggle="collapse" href="#login-form-wrap" aria-expanded="false" aria-controls="login-form-wrap">Click here to login</a>
                            </div>
                            <?php
if(isset($_POST["submitbt"]))
{
$name = $_POST['name'];
$emailid= $_POST['email'];
$password = $_POST['password'];
$address= $_POST['address_1'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$submit = $_POST['submitbt'];

if($submit)
{
	if($name!=""&&$emailid!=""&&$password!=""&&$address!=""&&$address!=""&&$city!=""&&$pincode!=""&&$state!=""&&$phone!="")
	{
		$q1=mysqli_query($con,"select * from users where email='$emailid'");
		$count=mysqli_num_rows($q1);
		if($count==0)
		{
mysqli_query($con,"insert into users values('$emailid','$name','$phone','$password','$address','$city',$pincode,'$state')");
            echo '<div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Registration Successful
</div>';
            
		}
        else
        {
            echo "<script> alert(\"You are already Registered\"); </script>";
        }
}
}
}
                                        ?>

                            <form id="login-form-wrap" class="login collapse" method="post">


                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please register below.</p>

                                <p class="form-row form-row-first">
                                    <label for="username">Username or email <span class="required">*</span>
                                    </label>
                                    <input type="text" id="username" name="username" class="input-text" >
                                </p>
                                <p class="form-row form-row-last">
                                    <label for="password">Password <span class="required">*</span>
                                    </label>
                                    <input type="password" id="password" name="lpassword" class="input-text">
                                </p>
                                <div class="clear"></div>


                                <p class="form-row">
                                    <input type="submit" value="Login" name="login" class="button">
                                     
                                </p>
								<?php 
								if(isset($_POST['login']))
								echo $error;
								?>
                                

                                <div class="clear"></div>
                            </form>

                       

                            

                            <form action="#" class="checkout" method="post" id="register" >

                                <div id="customer_details" class="col2-set">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Enter Your Details</h3>
                                            

                                            
                                                <label for="name">Name 
                                                </label>
                                                <input type="text" value="" onchange="return(validatename());" placeholder="" id="name" name="name" class="input-text " required>
                                                
                                            
                                            
                                           
                                            <div class="clear"></div>
											
											
                                                <label for="email">Email Address 
                                                </label>
                                                <input type="text" onchange="return(validateemail());" value="" placeholder="" id="email" name="email" class="input-text " required>
                                            
											
											
                                                <label for="password">Password
                                                </label>
                                                <input type="password" value="" onchange="return(validatepassword());" placeholder="" id="password" name="password" class="input-text " size="54" required>
                                           

                                          

                                         
                                                <label for="address">Address
                                                </label>
                                                <input type="text" value=""  placeholder="Street address" id="address" name="address_1" class="input-text " required>
                                           

                                            

                                           
                                                <label for="city">City
                                                </label>
                                                <input type="text" value="" placeholder="City" id="city" name="city" class="input-text " required>
                                            
											
                                                <label for="pincode">Pincode
                                                </label>
                                                <input type="text" value="" onchange="return(validatepincoode());" placeholder="Pincode" id="pincode" name="pincode" class="input-text " required>
                                            

                                                <label for="state">State</label>
                                                <input type="text" id="state" name="state" placeholder="State" value="" class="input-text " required>
                                           
                                            

                                            <div class="clear"></div>

                                            

                                            
                                                <label for="phone">Phone 
                                                </label>
                                                <input type="text" value="" placeholder="" onchange="return(validatephone());" id="phone" name="phone" class="input-text " required>
                                            
                                            <div class="clear"></div>
											
											<p>
											<input type="submit" value="Register" name="submitbt" class="button">
											</p>
												
												</form>
                                        
                                        
      <script>
       function validateemail()
          {
               var email1 = document.getElementById("email");
              var email = /^[a-z0-9._-]+@[a-z]+.[a-z.]{2,5}$/i;
              if(!email.test(email1.value))
                   {
                     alert("Enter Correct Email");
                     email1.focus();
                       return false;
                    }
              else 
                  return true;
          }
          function validatename()
          {
               var name1 = document.getElementById("name");
              var name = /^[A-Za-z0-9 ]{3,20}$/;
              if(!name.test(name1.value))
                   {
                     alert("Enter Correct Email");
                     email1.focus();
                       return false;
                    }
              else 
                  return true;
          }
          
          function validatepassword()
          {
               var password1 = document.getElementById("password");
              var password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
              if(!password.test(password1.value))
                   {
                     alert("Enter Correct Password");
                     password1.focus();
                       return false;
                    }
              else 
                  return true;
          }
           function validatephone()
          {
              var phone1 = document.getElementById("phone");
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
          
          function validatepincode()
          {
              var pincode1 = document.getElementById("pincode");
             var pincode= /^[0-9]{6}$/i;
                if(!pincode.test(pincode1.value))
                   {
                     alert("Enter Correct Pincode");
                     pincode1.focus();
                       return false;
                    }
              else
                  {
                       return true;
                  }
              
              
              
          }
          
          
      </script>

    

                                           

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
                
              div class="col-md-3 col-sm-6">
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
                        <p>&copy; 209  Sundarbans. All Rights Reserved.</a></p>
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

