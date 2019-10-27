
<?php
	session_start();
	include("launch_availability.php");
?>

<!DOCTYPE php>
<!--[if lt IE 7]>      <php class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <php class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <php class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <php class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E-Launch</title>
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
	<link rel="stylesheet" href="css/w3.css" 
	

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		table, th, td {
		    border: 1px solid black;
		    border-collapse: collapse;
		}
		th, td {
		    padding: 15px;
		    text-align: left;
		    color:black;
		}
		.flip:hover{
			background-color: #393e46;
		}
		#panel, .flip {
		    font-size: 16px;
		    padding: 10px;
		    text-align: center;
		    background-color: white;
		    color: white;
		    border: solid 1px #a6d8a8;
		    margin: auto;  
		    margin-top: 50px;
		}

		#panel {
		    display: none;
		    color: white
		}
	</style>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"></a>
					<h1 id="fh5co-logo"><a href="index.php"><i class = icon-logo-l></i>E-Launch</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.php">Home</a></li>
							
							
							<li><a href="launch.php">Launches</a></li>
							<li><a href="navigation.php">Navigation</a></li>
							<li><a href="giveaway.php">Giveaway</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="profile.php">Profile</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->


		<!-- seat booking section -->
		<section class="departure2" style="padding: 100px; background: linear-gradient(to right, rgba(255, 62, 28, 0.5) 0%, rgba(255, 140, 0, 0.5) 100%);-webkit-transition: background-color 0.1s;-moz-transition: background-color 0.1s;-o-transition: background-color 0.1s;transition: background-color 0.1s; color:black;">
			<h1>Cabin-wise seat availability</h1>
			<div class="container">
				<div class="row">
					<table style="width:100%">
					  <tr>
					    <th>Cabin Class</th>
					    <th>Seats</th> 
					    <th>Cabin Fare</th>
					    <th>Availability</th>
					  </tr>
					  <tr>
					    <td>Single AC</td>
					    <td>1</td>
					    <td>BDT 1000</td>
					    <td>13 available</td>
					  </tr>
					  <tr>
						<td>Single Non AC</td>
					    <td>1</td>
					    <td>BDT 1000</td>
					    <td>10 available</td>
					  </tr>
					  <tr>
						<td>Double AC</td>
					    <td>2</td>
					    <td>BDT 1800</td>
					    <td>7 available</td>
					  </tr>
					  <tr>
						<td>Double Non AC</td>
					    <td>2</td>
					    <td>BDT 1700</td>
					    <td>23 available</td>
					  </tr>
					  <tr>
						<td>Sofa</td>
					    <td>1</td>
					    <td>BDT 500</td>
					    <td>70 available</td>
					  </tr>
					  <tr>
						<td>Family Non AC</td>
					    <td>2</td>
					    <td>BDT 1800</td>
					    <td>2 available</td>
					  </tr>
					  <tr>
						<td>Semi VIP Non AC</td>
					    <td>3</td>
					    <td>BDT 2700</td>
					    <td>1 available</td>
					  </tr>
					</table>	
					<label for="Cabin Class" style="padding-top:20px; padding-bottom:20px;">Cabin Class</label>	
					<select class="form-control" style="width: 50%;" >
						<option>Select Cabin Type</option>
						<option>Single AC</option>
						<option>Single Non AC</option>
						<option>Double AC</option>
						<option>Double Non AC</option>
						<option>Sofa</option>
						<option>Family Non AC</option>
						<option>Semi VIP Non AC</option>
					</select>
					<label for="Cabin Class" style="padding-top:20px; padding-bottom:20px;">Select Number of cabins</label>	
					<select class="form-control" style="width: 50%;" style="padding: 15px;" >
						<option>1</option>
						<option>2</option>
						<option>3</option>
					</select>
					<!--<div class="col-md-8" style="margin-top:20px;border:1px solid #dddddd;width:162px;color:#F39030;padding:15px 5px;height:50px;font-size:19px;font-weight: bold;text-align: center;background-color:#f7f7f7;">
                        BDT <span id="seatselecttotal">1000</span>
                    </div>	-->
					<!--<button type="button" class="btn btn-success" onclick="alert('Your booking has been completed successfully') " style="margin-top: 25px; ">Confirm</button>-->
					<button class="flip" onclick="myFunction()" style=" background-color:green;margin-top: 50px; font-size:16px;font-weight: bold;border-radius: 5px;padding: 10px 25px;">Confirm</button>

					<div id="panel">
					  <p style="color:black; font-size:20px;font-weight: bold;">Your Booking has been completed Successfully!<br>Thank you for using Elaunch</p>
					  
					</div>

					<script>
					function myFunction() {
					    document.getElementById("panel").style.display = "block";
					}
					</script>
				</div>
			</div>
		</section>

				
		<!-- fh5co-blog-section -->
		<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo; Best online launch ticket seller available in Bangladesh&rdquo;</p>
						</blockquote>
						<p class="author">Maliha, Banker<a href="http://freehtml5.co/" target="_blank"></a> <span class="subtext"></span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;e Next rising company of Bangladesh, Best wishes!!.&rdquo;</p>
						</blockquote>
						<p class="author">Rafique, CEO-UIU <a href="http://freehtml5.co/" target="_blank"></a> <span class="subtext"></span></p>
					</div>
					
					
				</div>
				
			</div>
		</div>
	</div>
		

	

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

