<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Checkout | Kingdom of Pod</title>
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
	
	<div id="fh5co-product">
		<div class="container">
		    <div class="animate-box" style="float: none; margin-left: auto; margin-right: auto;">
		    <div class="simpleCart_items"></div>
		    <div class="container">
	<table class="costs" border=0 cellspacing=0 style="margin-bottom: 0em; float: right;">
	
	<tr class="costs">
		<td class="costs"> Sub-Total:</td>
		<td class="costs"><div class="simpleCart_total"> </div></td>
	</tr>
	
	<tr class="costs">
		<td class="costs">GST (<span class="simpleCart_taxRate"> </span>%): </td>
		<td class="costs"><span class="simpleCart_tax"> </span></td>
	</tr>
	
	<tr class="costs">
		<td class="costs">Delivery Fee:</td>
		<td class="costs"><span class="simpleCart_shipping"> </span></td>
	</tr>
		<tr>
		<td><div style="border: 1px solid black"></div></td>
		</tr>
	<tr class="costs total">
		<td class="costs">Total (inc. GST): </td>
		<td class="costs"> <span class="simpleCart_grandTotal"> </span></td>
	</tr>
	
	</table>
	</div>
		     	<div align="center"> 
					<!-- Return to Store -->
                    <p>
                    <a href="product.php" class="button" style="float:right;">Continue Shopping</a>
                    </p>
                </div>
                
                <br><br>
                <br> <div style="border: 1px solid black"></div><br><br>
               
                <div class="checkout_form">
                	<!--<form action="javascript:;" method="post">-->
                	<form action="checkout-done.php" method="post" style="color: black;">
    				<div style="float: left; width: 50%">
                    <h3>Full Name and Contact Details</h3></h3>
                    <p>
                    	<div style="float: left">
                        <label for="fname">First Name:</label><br>
                        <input style="width: 100%" type="text" name ="fname" id="fname" required/>
                        </div>
                    </p>
                    <p>
                    	<div style="margin-left: 225px;">
                        <label for="lname">Last Name:</label><br>
                        <input style="width: 50%" type="text" name="lname" id="lname" required/>
                        </div>
                    </p>
                     <p>
                        <label for="phone_number">Phone Number:</label><br>
                        <input style="width: 80%" type="text" name="phone_number" id="phone_number" required />
                    </p>
                     <p>
                        <label for="email_address">Email Address:</label><br>
                        <input style="width: 80%" type="email" name="email_address" id="email_address" required/>
                    </p>
                    </div>
                    <div style=" float: left; width: 50%">
                    <h3>Delivery Address</h3>
                     <p>
                        <label for="address_street_1">Street Address:</label><br>
                        <input style="width: 100%" type="text" name="street1" id="street1" required />
                    </p>
                     <p>
                        <label for="address_street_2">Street Address Line 2:</label><br>
                        <input style="width: 100%" type="text" name="street2" id="street2"/>
                    </p>
                     <p></p>
                     	<div style="float:left">
                        <label for="address_city">City:</label><br>
                        <input type="text" name="city" id="city" required/>
                        </div>
                     	<div style="margin-left: 225px">
                        <label for="address_state_province">State:</label><br>
                        <input style="width: 75%" type="text" name="state_province" id="state_province" required/>
                        </div>
                        </p>
                        <p>
                     	<div style="float: left">
                        <label for="postal_code">Post Code:</label><br>
                        <input  style="width: 75%" type="text" name="postcode" id="postcode" required/>
                        </div>
                        <div style="">
                        <label for="country">Country:</label><br>
                        <input style="width 75%" type="text" name="country" id="country" placeholder="Australia" required/>
                        </div>
                    </p>
                    </div>
                    
                    <h3>Credit Card Details</h3>
                     <p>
                       <input type="radio" id="cc_mastercard" name="cc_mastercard" value="mastercard" />
                       <label for="cc_mastercard">Mastercard</label>
                       <br />
                       <input type="radio" id="cc_visa" name="cc_visa" value="visa" />
                       <label for="cc_visa">Visa</label>
                       <br />
                        <input type="radio" id="cc_amex" name="cc_amex" value="amex" />
                       <label for="cc_amex">American Express</label>
                       <br />
                    </p>
                    <p>
                        <label for="credit_card_name">Name on Card:</label>
                        <input type="text" name="ccname" id="ccname" /><br />
                    </p>
                    <p>
                        <label for="credit_card_number">Card Number:</label>
                        <input type="text" name="ccnumber" id="ccnumber"  /><br />
                    </p>
                    <p>
                        <label for="credit_card_security_code">Security Code:</label>
                        <input type="text" name="ccsecuritycode" id="ccsecuritycode" /><br />
                    </p>
                    
                   <input style="float: right" class="button" type="submit" value="Confirm"> 
                    <!-- Checkout -->
                    <div align="center">
                        <!--<a href="javascript:;" class="simpleCart_checkout button">Confirm and Pay</a>-->
                        <!--<a href="processformdata.php" class="simpleCart_checkout button">Confirm and Pay</a>-->
                    </div>
    
    
                </form>
		    </div>
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