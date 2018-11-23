<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shopping Cart | Kingdom of Pod - Reusable Pods, Fresh Coffee &amp; More</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Shopping Cart of Kingdom of Pod" />
	<meta name="keywords" content="cart, shop, store, shopping cart, coffee, pods" />

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
		    	<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					
					<h1>Your Order</h1>
					<!-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> -->
				</div>
			</div>
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
		    
		    <div>
		    		<p>
                    <!-- Empty the cart -->
                    <a style="float: left" href="javascript:;" class="simpleCart_empty button">Empty Cart</a>
                    
                    <!-- Checkout -->
                    <a style="float: right" href="checkout.php" class="button">Proceed to Checkout</a>
                    
                    <!--Return to Store -->
                    <a style="float: right" href="product.php" class="button">Continue Shopping</a>

                    </p>    
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