
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php
include_once("../php_scripts/_initialize.php");
?>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gas Top-up &mdash; MAPS. </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Know where petroleum products are available and cheaper." />
	<meta name="keywords" content="Fuel, Kerosene, Gas, Diesel, product" />
	<meta name="author" content="LOVE" />
	
	
<script src="../core_files/js/jquery/jquery-3.2.1.js"></script>

<!-- Main JS -->
<script src="../core_files/js/my_own/main_site.js"></script>


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../core_files/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../core_files/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../core_files/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="../core_files/css/superfish.css">

	<link rel="stylesheet" href="../core_files/css/style.css">
	<!-- Modernizr JS -->
	<script src="../core_files/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 text-left fh5co-link">
						<a href="#">FAQ</a>
						<a href="#">Forum</a>
						<a href="#">Contact</a>
					</div>
					<div class="col-md-6 col-sm-6 text-right fh5co-social">
						<a href="#" class="grow"><i class="icon-facebook2"></i></a>
						<a href="#" class="grow"><i class="icon-twitter2"></i></a>
						<a href="#" class="grow"><i class="icon-instagram2"></i></a>
					</div>
				</div>
			</div>
		</div>
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="../"><img src="../img/main/gastopup_logo.png" style="width: 60px; height: 60px;" alt="GSL logo" /> Gas Top-up</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li ><a href="../">Home</a></li>
							<li><a href="../products/">Products</a></li>
							<li ><a href="../stations/">Gas Stations</a></li>
							<li class="active"><a href="../maps/">Maps</a></li>
							<li><a href="../contact/">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	
		<!-- end:header-top -->
		
		<div class="container">
			<div class="our-services">
			   <?php  // IF THE DESTINATION WAS PASSED
	if(isset($_REQUEST['request_type'])&&($_REQUEST['request_type']=="direction")&& isset($_REQUEST['destination'])){ 
		$destination = trim($_REQUEST['destination']);
	?>
				
		<div class="panel panel-success" style="width: 100%;padding:0px;  margin-left:auto; margin-right:auto;">
			<div class="panel panel-heading panel-success text-center"> GET DIRECTIONS</div>
				<iframe style="width:100%; height:700px; margin-left:auto; margin-right:auto; border:0px;" src="https://www.google.com/maps/embed/v1/directions?key=ENTER_YOUR_MAP_KEY&origin=Your+Location&destination=<?php echo $destination; ?>&mode=driving&zoom=8"></iframe>
		</div>	
		<?php		
		}
		else{  // IF DESTINATION IS NOT SET, WE DISPLAY ALL THE GAS STATIONS IN YENAGOA
		?>
		<div class="panel panel-success" style="width: 100%;padding:0px;  margin-left:auto; margin-right:auto;">
			<div class="panel panel-heading panel-success text-center"> Gas stations in Yenagoa, Bayelsa State</div>
				
				<iframe style="width:100%; height:700px; margin-left:auto; margin-right:auto; border:0px;" src="https://www.google.com/maps/embed/v1/search?key=ENTER_YOUR_MAP_KEY&q=gas+stations,+yenagoa&zoom=13"></iframe>
		</div>
		<?php }
	?>
		</div>
		</div>
		<!-- fh5co-blog-section -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">
						<ul style="list-style:none;">
							<h3 class="section-title white-fg">Useful links</h3>
							<li class="footer_useful_links"> <a href="../"> Home</a></li>
							<li class="footer_useful_links"> <a href="../products/"> Products</a></li>
							<li class="footer_useful_links"> <a href="../stations/"> Gas Stations</a></li>
							<li class="footer_useful_links"> <a href="../contact/"> Contact</a></li>
							</ul>
						</div>

				<div class="col-md-4 animate-box">
							<ul class="contact-info" style="list-style: none;">
							<h3 class="section-title  white-fg">Our Address</h3>
								<li class="footer_useful_links"><i class="icon-map-marker"></i> 48 Isaac Boro Express-Way Yenagoa, Bayelsa State.</li>
								<li class="footer_useful_links"><i class="icon-phone"></i> +2341230000000</li>
								<li class="footer_useful_links"><i class="icon-envelope"></i><a href="#"> info@gastopup.com</a></li>
								<li class="footer_useful_links"><i class="icon-globe2"></i><a href="#"> www.gastopup.com</a></li>
							</ul>
						</div>
						<div class="col-md-4 animate-box">
							<h3 class="section-title  white-fg">Drop us a line</h3>
							
							<p id="success_error" class="alert hidden" style="text-align:center;"></p>	
							
							<form action="javascript:void(0);" onsubmit="submitContactUs()" id="contactForm" method="post"  >
								<div class="form-group">
								<p class="grey_text_color sr-only"> Name: </p>
										<input type="text" class="form-control" id="contact_name" placeholder="Your name..." required />
								</div>
								<div class="form-group">
								<p class="grey_text_color sr-only"> Email: </p>
										<input type="email" class="form-control" name="email" id="contact_email" placeholder="Your Email..." required />
								</div>
								<div class="form-group">
								<p class="grey_text_color sr-only"> Message: </p>
										<textarea class="form-control" id="contact_message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message..."  required></textarea>
								</div>
								<div class="form-group">
										<button type="submit" id="contact_us_submit" class="btn btn-flat form-control">SUBMIT</button>
								</div>
								
							</form>
							
						</div>
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p> &copy; Copyright 2018 gastop-up.com </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	
	<script src="../core_files/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../core_files/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../core_files/s/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../core_files/js/jquery.waypoints.min.js"></script>
	<script src="../core_files/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="../core_files/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="../core_files/js/hoverIntent.js"></script>
	<script src="../core_files/js/superfish.js"></script>
	
	<!-- Main JS -->
	<script src="../core_files/js/main.js"></script>

	</body>
</html>

