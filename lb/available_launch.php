<?php
session_start();
$p_username = $_SESSION['p_name'];
?>
<!DOCTYPE php>
<!--[if lt IE 7]>      <php class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <php class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <php class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <php class="no-js"> <!--<![endif]-->
	<head>
	<head>
	<title>E-LAUNCH</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
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
	<meta name="twitter:giveawayd" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"></a>
					<h1 id="fh5co-logo"><a href="index.php"><i class = icon-logo-l></i>E-LAUNCH</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="index.php">Home</a></li>
							<!--<li>
								<a href="vacation.php" class="fh5co-sub-ddown">Vacations</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Family</a></li>
									<li><a href="#">CSS3 &amp; HTML5</a></li>
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">Node JS</a></li>
									<li><a href="#">Django &amp; Python</a></li>
								</ul>
							</li>-->
							<li><a href="launch.php">Launches</a></li>
							<li><a href="navigation.php">Navigation</a></li>
							<li class="active"><a href="giveaway.php">Giveaway</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="profile.php">Profile</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
		
		<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Date</th>
								<th class="column2">Launch ID</th>
								<th class="column3">Launch Name</th>
								<th class="column4">Price(Single Cabins)</th>
								<th class="column5">Start</th>
								<th class="column6">Destination</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1">2017-09-29 01:22</td>
									<td class="column2">200398</td>
									<td class="column3">MV Sonar Tori</td>
									<td class="column4">400BDT</td>
									<td class="column5">Dhaka</td>
									<td class="column6">Chandpur</td>
								</tr>
								<tr>
									<td class="column1">2017-09-28 05:57</td>
									<td class="column2">200397</td>
									<td class="column3">MV Riu</td>
									<td class="column4">500BDT</td>
									<td class="column5">Dhaka</td>
									<td class="column6">Chandpur</td>
								</tr>
								<tr>
									<td class="column1">2017-09-26 05:57</td>
									<td class="column2">200396</td>
									<td class="column3">MV Shahed and Shahan</td>
									<td class="column4">800BDT</td>
									<td class="column5">Dhaka</td>
									<td class="column6">Chandpur</td>
								</tr>
								<tr>
									<td class="column1">2017-09-25 23:06</td>
									<td class="column2">200392</td>
									<td class="column3">MV Nodi</td>
									<td class="column4">100BDT</td>
									<td class="column5">Dhaka</td>
									<td class="column6">Chandpur</td>
								</tr>
							<tr>
									<td class="column1">2017-09-29 01:22</td>
									<td class="column2">200398</td>
									<td class="column3">MV Sonar Tori</td>
									<td class="column4">400BDT</td>
									<td class="column5">Dhaka</td>
									<td class="column6">Chandpur</td>
								</tr>
								<tr>
									<td class="column1">2017-09-28 05:57</td>
									<td class="column2">200397</td>
									<td class="column3">MV Riu</td>
									<td class="column4">500BDT</td>
									<td class="column5">Dhaka</td>
									<td class="column6">Chandpur</td>
								</tr>	
								
								
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main_s.js"></script>
	
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="">
				<div class="desc">
					<div class="container">
						<div class="row">
							
						</div>
					</div>
				</div>
			</div>

		</div>

	
		<div id="" style="">
		<div class="container">
			
		</div>
	</div>
	<footer>
		<div id="footer">
			<div class="container" style="margin-left: 250px;">
				<div class="row row-bottom-padded-md">
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
						<h3>About E-Launch</h3>
						<p></p>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link" style="    margin-left: 65px;">
						<h3>Top Routes</h3>
						<ul>
							<li><a href="#">Dhaka</a></li>
							<li><a href="#">Barisal</a></li>
							<li><a href="#">Saint Martin</a></li>
							<li><a href="#">kuwakata</a></li>
							<li><a href="#">Chadpur</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
						<h3>Best Places</h3>
						<ul>
							<li><a href="#">Saint Martin</a></li>
							<li><a href="#">Kuwakata</a></li>
							<li><a href="#">Monpura</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
						<h3>Payment Methods</h3>
						<ul>
							<li><a href="#">Bkash</a></li>
							<li><a href="#">Rocket</a></li>
							<li><a href="#">NexusPay</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-2 text-center" style="margin-left:100px;">
						<p class="fh5co-social-icons">
							<a href="#"><i class="icon-twitter2"></i></a>
							<a href="#"><i class="icon-facebook2"></i></a>
							<a href="#"><i class="icon-instagram"></i></a>
							<a href="#"><i class="icon-dribbble2"></i></a>
							<a href="#"><i class="icon-youtube"></i></a>
						</p>
						<p>Copyright 2018 <a href="#"> </a>. All Rights Reserved. <br>Powered <i class="icon-heart3"></i> by <a href="https://images.unsplash.com/photo-1533293046890-f1ab3e5e3af9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6881a99773ca42bda1bd724e6b388000&auto=format&fit=crop&w=375&q=80" target="_blank">E-Launch Developers LTD.</a> </a></p>
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


<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/sticky.js"></script>

<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</php>

