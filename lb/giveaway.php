<?php
session_start();
//$p_username = $_SESSION['p_name'];

?>
<!DOCTYPE php>
<!--[if lt IE 7]>      <php class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <php class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <php class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<php class="no-js">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Giveaway</title>
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
        <meta property="og:title" content="" />
        <meta property="og:image" content="" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
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
                            <h1 id="fh5co-logo"><a id="whatever" href="index.php"><i class=icon-logo-l></i>E-LAUNCH</a></h1>
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

                <html>

                <head>
                    <title>ELaunch Ticket Giveaway</title>
                    <link rel="stylesheet" href="main.css" type="text/css" />
                    <script type="text/javascript" src="Winwheel.js"></script>
                    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
                </head>

                <body>
                    <div align="center">

                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                                    <div class="power_controls">
                                        <br />
                                        <br />
                                        <table class="power" cellpadding="10" cellspacing="0">


                                        </table>
                                        <br />
                                        <img id="spin_button" src="spin_off.png" alt="Spin" onClick="startSpin();" />
                                        <br /><br />

                                    </div>
                                </td>
                                <td width="438" height="582" class="the_wheel" align="center" valign="center">
                                    <canvas id="canvas" width="434" height="434">
                                        <p style="{color: white}" align="center">Sorry, your browser doesn't support canvas. Please try another.</p>
                                    </canvas>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <script>
                        // Create new wheel object specifying the parameters at creation time.
                        var theWheel = new Winwheel({
                            'numSegments': 8, // Specify number of segments.
                            'outerRadius': 212, // Set outer radius so wheel fits inside the background.
                            'textFontSize': 28, // Set font size as desired.
                            'segments': // Define segments including colour and text.
                                [{
                                        'fillStyle': '#eae56f',
                                        'text': '0'
                                    },
                                    {
                                        'fillStyle': '#89f26e',
                                        'text': '500'
                                    },
                                    {
                                        'fillStyle': '#7de6ef',
                                        'text': '2000'
                                    },
                                    {
                                        'fillStyle': '#e7706f',
                                        'text': '0'
                                    },
                                    {
                                        'fillStyle': '#eae56f',
                                        'text': '1000'
                                    },
                                    {
                                        'fillStyle': '#89f26e',
                                        'text': '0'
                                    },
                                    {
                                        'fillStyle': '#7de6ef',
                                        'text': '500'
                                    },
                                    {
                                        'fillStyle': '#e7706f',
                                        'text': '350'
                                    }
                                ],
                            'animation': // Specify the animation to use.
                            {
                                'type': 'spinToStop',
                                'duration': 10,
                                'spins': 8,
                                'callbackFinished': alertPrize,
                                'callbackSound': playSound, // Function to call when the tick sound is to be triggered.
                                'soundTrigger': 'pin' // Specify pins are to trigger the sound, the other option is 'segment'.
                            },
                            'pins': {
                                'number': 16 // Number of pins. They space evenly around the wheel.
                            }
                        });

                        // -----------------------------------------------------------------
                        // This function is called when the segment under the prize pointer changes
                        // we can play a small tick sound here like you would expect on real prizewheels.
                        // -----------------------------------------------------------------
                        var audio = new Audio('tick.mp3'); // Create audio object and load tick.mp3 file.

                        function playSound() {
                            // Stop and rewind the sound if it already happens to be playing.
                            audio.pause();
                            audio.currentTime = 0;

                            // Play the sound.
                            audio.play();
                        }

                        // -------------------------------------------------------
                        // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters
                        // note the indicated segment is passed in as a parmeter as 99% of the time you will want to know this to inform the user of their prize.
                        // -------------------------------------------------------
                        function alertPrize(indicatedSegment) {

                            let prize = indicatedSegment.text;

                           // alert("Hello, You have won " + prize);
                            /*  //my fix 1
                            $.post('prize.php',{one:prize},
                            function(){
                                window.location.href = "prize.php";
                            }); */

                            //my fix 2
                            //console.log(prize);
                            $.ajax({
                                url: "prize.php",
                                method: "post",
                                data: {
                                    prize: prize
                                },
                                success: function(res) {

                                    //console.log(res);
                                  //  $('#whatever').html(res);
                                    //window.location.href = "prize.php";
                                    alert(res);
                                }
                            });
                        }

                        // =======================================================================================================================
                        // Code below for the power controls etc which is entirely optional. You can spin the wheel simply by
                        // calling theWheel.startAnimation();
                        // =======================================================================================================================
                        var wheelPower = 0;
                        var wheelSpinning = false;

                        // -------------------------------------------------------
                        // Function to handle the onClick on the power buttons.
                        // -------------------------------------------------------
                        function powerSelected(powerLevel) {
                            // Ensure that power can't be changed while wheel is spinning.
                            if (wheelSpinning == false) {
                                // Reset all to grey incase this is not the first time the user has selected the power.
                                document.getElementById('pw1').className = "";
                                document.getElementById('pw2').className = "";
                                document.getElementById('pw3').className = "";

                                // Now light up all cells below-and-including the one selected by changing the class.
                                if (powerLevel >= 1) {
                                    document.getElementById('pw1').className = "pw1";
                                }

                                if (powerLevel >= 2) {
                                    document.getElementById('pw2').className = "pw2";
                                }

                                if (powerLevel >= 3) {
                                    document.getElementById('pw3').className = "pw3";
                                }

                                // Set wheelPower var used when spin button is clicked.
                                wheelPower = powerLevel;

                                // Light up the spin button by changing it's source image and adding a clickable class to it.
                                document.getElementById('spin_button').src = "spin_on.png";
                                document.getElementById('spin_button').className = "clickable";
                            }
                        }

                        // -------------------------------------------------------
                        // Click handler for spin button.
                        // -------------------------------------------------------
                        function startSpin() {
                            // Ensure that spinning can't be clicked again while already running.
                            if (wheelSpinning == false) {
                                // Based on the power level selected adjust the number of spins for the wheel, the more times is has
                                // to rotate with the duration of the animation the quicker the wheel spins.
                                if (wheelPower == 1) {
                                    theWheel.animation.spins = 3;
                                } else if (wheelPower == 2) {
                                    theWheel.animation.spins = 8;
                                } else if (wheelPower == 3) {
                                    theWheel.animation.spins = 15;
                                }

                                // Disable the spin button so can't click again while wheel is spinning.
                                document.getElementById('spin_button').src = "spin_off.png";
                                document.getElementById('spin_button').className = "";

                                // Begin the spin animation by calling startAnimation on the wheel object.
                                theWheel.startAnimation();

                                // Set to true so that power can't be changed and spin button re-enabled during
                                // the current animation. The user will have to reset before spinning again.
                                wheelSpinning = true;
                            }
                        }

                        // -------------------------------------------------------
                        // Function for reset button.
                        // -------------------------------------------------------
                        function resetWheel() {
                            theWheel.stopAnimation(false); // Stop the animation, false as param so does not call callback function.
                            theWheel.rotationAngle = 0; // Re-set the wheel angle to 0 degrees.
                            theWheel.draw(); // Call draw to render changes to the wheel.

                            document.getElementById('pw1').className = ""; // Remove all colours from the power level indicators.
                            document.getElementById('pw2').className = "";
                            document.getElementById('pw3').className = "";

                            wheelSpinning = false; // Reset to false to power buttons and spin can be clicked again.
                        }

                    </script>
                </body>

                </html>



                <div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
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
