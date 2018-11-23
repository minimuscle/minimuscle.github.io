
<!DOCTYPE HTML>
<html>
    <head>
    <!--<title>Process Form Data</title>-->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Your Order</title>
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
    <script>

    // Called on body's `onload` event

</script>
    <body onload="display()">
        <?php include 'header.php'?>
        <h1>Thank You for Your Order</h1>
        <script LANGUAGE="JavaScript">
		function display() {
			message = "<ul><li><b>NAME: </b>" +  + document.form1.yourname.value+ "</ul>";
			document.write(message);
		}
	</script>
        <?php
        // Delivery Details
        echo ($_GET[yourname]);
        $fname = htmlspecialchars($_GET["fname"]);
        $lname = htmlspecialchars($_GET["lname"]);
        $email = htmlspecialchars($_GET["email_address"]);
        $phone = htmlspecialchars($_GET["phone_number"]);
        $address1 = htmlspecialchars($_GET["street1"]);
        $address2 = htmlspecialchars($_GET["street2"]);
        $city = htmlspecialchars($_GET["city"]);
        $state = htmlspecialchars($_GET["state_province"]);
        $postcode = htmlspecialchars($_GET["postcode"]);
        $country = htmlspecialchars($_GET["country"]);
        // Card Details
        $cardtype = htmlspecialchars($_GET["cc_type"]);
        $card_name = htmlspecialchars($_GET["ccname"]);
        $card_no = htmlspecialchars($_GET["ccnumber"]);
        $card_security = htmlspecialchars($_GET["ccsecuritycode"]);
        // Order Details
        $product = htmlspecialchars($_GET["product_name"]);
        $product_qty = (int) $_GET["product_quantity"];
        $comments = htmlspecialchars($_GET["user_comments"]);
        
        // Delivery Details
        echo "Name: " . $fname . $lname . "<br />";
        echo "Email: " . $email . "<br />";
        echo "Phone Number: " .$phone . "<br />";
        echo "Address: " .$address1 .$address2 . "<br />";
        echo "City: " . $city . "<br />";
        echo "State: " . $state . "<br />";
        echo "Post Code: " . $postcode . "<br />";
        echo "Counrty: " . $country . "<br />";
        // Card Details
        echo "Card Type: " . $cardtype . "<br />";
        echo "Name on Card: " . $card_name . "<br />";
        echo "Card Number: " . $card_no . "<br />";
        echo "Security Code: " . $card_security . "<br />";
        // Order Details
        echo "Product: " . $product . "<br />";
        echo "Procuct Quantity: " . $product_qty . "<br />";
        echo "Comments: " . $comments . "<br />";
        ?>
       
        
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