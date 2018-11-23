<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Confirmation | Kingdom of Pod</title>
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
		
	<div id="page">
	<?php include 'header.php'?>

	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="animate-box">
					
					<?php 
						$firstname = htmlspecialchars($_POST['fname']);
						$lastname = htmlspecialchars($_POST['lname']);
						$phone_number = htmlspecialchars($_POST['phone_number']);
						$email_address = htmlspecialchars($_POST['email_address']);
						$address_street_1 = htmlspecialchars($_POST['street1']);
						$address_street_2 = htmlspecialchars($_POST['street2']);
						$address_city = htmlspecialchars($_POST['city']);
						$address_state_province = htmlspecialchars($_POST['state_province']);
						$postal_code = htmlspecialchars($_POST['postcode']);
						$country = htmlspecialchars($_POST['country']);
						$credit_card_name = htmlspecialchars($_POST['ccname']);
					$credit_card_number = htmlspecialchars($_POST['ccnumber']);
						$credit_card_security_code = htmlspecialchars($_POST['ccsecuritycode']);
					?>
					
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
					<div class ="checkout_done" style="color: black;"></div>
					<h3>Full Name and Contact Details</h3>
					<p>First Name: <b><?php echo $firstname; ?></b> </p> 
					<p>Last Name: <b><?php echo $lastname; ?></b> </p>
					<p>Phone number: <b><?php echo $phone_number; ?> </b></p>
					<p>Email: <b><?php echo $email_address; ?> </b></p>
					<p>Address (Street 1): <b><?php echo $address_street_1; ?></b> </p>
					<p>Address (Street 2):<b> <?php echo $address_street_2; ?></b> </p>
					<p>City: <b><?php echo $address_city; ?> </b></p>
					<p>State: <b><?php echo $address_state_province; ?></b> </p>
					<p>Post Code: <b><?php echo $postal_code; ?></b> </p>
					<p>Country: <b><?php echo $country; ?></b> </p>
					
					
					
					
					<!--<h3 style="text-align: center; padding-top: 3em; padding-bottom: 3em;">Thank you for your purchase!</h3>-->
				</div>
				<div style="float: none; margin-left: auto; margin-right: auto; text-align: center; padding-bottom: 3em;">
				<a href="checkout-complete.php" class="button simpleCart_empty">Confirm and Pay</a>
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