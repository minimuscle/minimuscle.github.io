<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact Us | Kingdom of Pod - Reusable Pods, Fresh Coffee &amp; More<</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Contact the Kingdom of Pod Team" />
	<meta name="keywords" content="contact, kingdom of pod, kingdom, pods, coffee, support" />

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


	</head>
	<body>
		<?php include('login.php'); ?>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php include 'header.php'?>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/coffee-beans.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Contact Us</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">

				<div class="col-md-6 animate-box" style="float: none; margin-left: auto; margin-right: auto; text-align: center;">
					<h3>Get In Touch</h3>
					<form action="contact-thanks.php">
						<div class="row form-group">
							<div class="col-md-6">
								<input type="text" id="fname" class="form-control" placeholder="First Name" required oninvalid="this.setCustomValidity('Please enter your First Name')" oninput="this.setCustomValidity('')">
							</div>
							<div class="col-md-6">
								<input type="text" id="lname" class="form-control" placeholder="Last Name" required oninvalid="this.setCustomValidity('Please enter your Last Name')" oninput="this.setCustomValidity('')">
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<input type="tel" id="phonenumber" class="form-control" placeholder="Phone Number (Optional)">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="email" id="email" class="form-control" placeholder="Email Address" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="text" id="subject" class="form-control" placeholder="Subject of This Message" required oninvalid="this.setCustomValidity('Please enter a Message Subject')" oninput="this.setCustomValidity('')">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Your Message"required oninvalid="this.setCustomValidity('Please enter a Message')" oninput="this.setCustomValidity('')"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>
					</form>		
				</div>
			</div>
		</div>
	</div>

	<!-- <div id="map" class="animate-box" data-animate-effect="fadeIn"></div> -->
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

