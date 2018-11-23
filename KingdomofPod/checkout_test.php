<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kingdom of Pod - Payment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


    <!--Cart Css -->
    <link rel="stylesheet" href="css/cart.css">
    
	<!-- Simple Cart JS -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script> 
	<script src="script-js/simpleCart.js"></script> 
	<script src="script-js/simplecartjs-config.js"></script>
	
	</head>
	<body>
		<?php include('login.php'); ?>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php include 'header.php'?>
	
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/coffee/cafe-receipt.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Checkout</h1>
							<!-- <h2>Free html5 templates by <a href="https://themewagon.com/theme_tag/free/" target="_blank">Themewagon</a></h2> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-product">
		<div class="container">
		    
		    <div class="simpleCart_items"></div>
		     	<div align="center"> 
					<!-- Return to Store -->
                    <p>
                    <a href="product.php" class="button">Continue Shopping</a>
                    </p>
                </div>
                
                <div class="checkout_form" align="center">
                <!--<form action="javascript:;" method="post">-->
                	<form action="" method="post">
    
                    <h3>Full Name and Contact Details</h3></h3>
                    <p>
                        <label for="fname">First Name:</label>
                        <input type="text" name ="yourname" id="yourname" /><br />
                    </p>
                    <p>
                        <label for="lname">Last Name:</label>
                        <input type="text" name="lname" id="lname" /><br />
                    </p>
                     <p>
                        <label for="phone_number">Phone Number:</label>
                        <input type="text" name="phone_number" id="phone_number" /><br />
                    </p>
                     <p>
                        <label for="email_address">Email Address:</label>
                        <input type="email" name="email_address" id="email_address" /><br />
                    </p>
                    
                    <h3>Delivery Address</h3>
                     <p>
                        <label for="address_street_1">Street Address:</label>
                        <input type="text" name="street1" id="address_street_1" /><br />
                    </p>
                     <p>
                        <label for="address_street_2">Street Address Line 2:</label>
                        <input type="text" name="street2" id="address_street_2" /><br />
                    </p>
                     <p>
                        <label for="address_city">City:</label>
                        <input type="text" name="city" id="address_city" /><br />
                    </p>
                     <p>
                        <label for="address_state_province">State:</label>
                        <input type="text" name="state_province" id="address_state_province" /><br />
                    </p>
                     <p>
                        <label for="postal_code">Post Code:</label>
                        <input type="text" name="postcode" id="postal_code" /><br />
                    </p>
                     <p>
                        <label for="country">Country:</label>
                        <input type="text" name="country" id="country" placeholder="Australia" /><br />
                    </p>
                    
                    <h3>Credit Card Details</h3>
                     <p>
                       <input type="radio" id="cc_mastercard" name="cc_type" value="mastercard" />
                       <label for="cc_mastercard">Mastercard</label>
                       <br />
                       <input type="radio" id="cc_visa" name="cc_type" value="visa" />
                       <label for="cc_visa">Visa</label>
                       <br />
                        <input type="radio" id="cc_amex" name="cc_type" value="amex" />
                       <label for="cc_amex">American Express</label>
                       <br />
                    </p>
                    <p>
                        <label for="credit_card_name">Name on Card:</label>
                        <input type="text" name="ccname" id="credit_card_name" /><br />
                    </p>
                    <p>
                        <label for="credit_card_number">Card Number:</label>
                        <input type="text" name="ccnumber" id="credit_card_number"  /><br />
                    </p>
                    <p>
                        <label for="credit_card_security_code">Security Code:</label>
                        <input type="text" name="ccsecuritycode" id="credit_card_security_code" required/><br />
                    </p>
                    
                    <!-- Checkout -->
                    <div align="center">
                    	<a href="javascript:;" class="simpleCart_empty button" onClick="window.open('checkout-done.php', '_self');">Confirm and Pay</a>
                        <!--<a href="javascript:;" class="simpleCart_checkout button">Confirm and Pay</a>-->
                         <!--<a href="processformdata.php" class="simpleCart_checkout button">Confirm and Pay</a>-->
                    </div>
    
    
                </form>
		    </div>
		    
		  </div>
	</div>
	
		<?php include 'footer.php'?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>


	</body>
</html>