<?php
	session_start();
	$conn=mysqli_connect("localhost","root","","launchdb");


    $_SESSION['alertMsg'] ="";
	if(isset($_POST['submit'])){
        
		$fName=$_POST['firstName'];
		$lName=$_POST['lastName'];
		$Email=$_POST['Email'];
        $_SESSION['p_name'] = $Email;
		$Mobile=$_POST['Mobile'];
		$Password=$_POST['Password'];
		$qry = "select * from passenger where 1";
		$res = $conn->query($qry) or die('bad query');
		$flag=0;
		while($row = $res->fetch_assoc()) {
			if($row["passenger_email"] != $Email){
				$flag=0;
			}
			else{
				$flag=1;
				break;
			}
		}
		if($flag==1){
			//echo "This username in use,please try others.";
            $_SESSION['alertMsg'] = "This username already used,please try others.";
            
		}
		else{
			$query="insert into passenger(passenger_first_name, passenger_last_name, passenger_email, passenger_password, passenger_mobile_no)values('$fName','$lName','$Email','$Password','$Mobile')";
				$run=mysqli_query($conn,$query);
				if($run){
                    $_SESSION['alertMsg'] = "Registration completed Sucessfully";
                    $_SESSION['email'] = $Email;
                    header("Location: index.php");
                    exit;
				}
				else
                    $_SESSION['alertMsg'] = "Somthing error, please try again";
				echo"error at inserting data!".mysqli_error($conn);
		}
		
	}

	if(isset($_POST['Login'])){

		$p_Email=$_POST['p_email'];
		$p_password=$_POST['p_psw'];
		$_SESSION['p_name'] = $p_Email;
		$qry = "select * from passenger where 1";
		$res = $conn->query($qry) or die('bad query');
		$flag=0;
		while($row = $res->fetch_assoc()) {
			if($row["passenger_email"] != $p_Email || $row["passenger_password"] != $p_password){
				$flag=0;
			}
			else{
				$flag=1;
				break;
			}
		}
		
		if($flag==1){
			//echo "Logging successful, Welcome $p_username";
            
             $_SESSION['email'] = $p_Email;
            if(isset($_GET['cabinNo'])){
                        $cabinNo= $_GET['cabinNo'];
                        $cabinClass = $_GET['cabinClass'];
                        $price = $_GET['price'];
                        $launchId = $_GET['launchId'];
                         header("Location: payment.php?cabinNo=$cabinNo&cabinClass=$cabinClass&price=$price&launchId=$launchId");
                        exit;
                    }
                    else{
                        header("Location: index.php");
                        exit;
                    }
		}
		else{
			$_SESSION['alertMsg'] = "Invalid Username or password";	
		}
	}

		
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log In</title>
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
    <meta name="twitter:card" content="" />

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
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
            <!--header page calling-->
            <?php include("header.php");?>
            <!-- end:header-top -->

            <!--weather view-->
            <?php include("weather.php");?>

            <!-- end:header-top -->
           
            <div class="fh5co-hero" style="height:900px;">
               
                <div class="fh5co-overlay"></div>
                
                <div class="fh5co-cover">
                    <div class="myAlert"><h5><?php echo $_SESSION['alertMsg']; ?></h5></div>
                    <div class="desc animate-box">
                        <div class="container">
                            <div class="row">
                                
                                <div class="form" style="background-color: rgb(244,146,96,1);position: relative;">

                                    <ul class="tab-group">
                                        <li class="tab active"><a href="#signup">Sign Up</a></li>
                                        <li class="tab "><a href="#login">Log In</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="signup" style=" margin-top: -30px;">
                                            <h1 >Sign Up for Free</h1>

                                            <form action="" method="POST">


                                                <div class="field-wrap fn">
                                                    <label class="fnl1">
                                                        First Name<span class="req">*</span>
                                                    </label>
                                                    <input type="text" name="firstName" required autocomplete="off" />

                                                </div>
                                                <div class="field-wrap fn2">
                                                    <label class="fnl2">
                                                        Last Name<span class="req">*</span>
                                                    </label>
                                                    <input type="text" name="lastName" required autocomplete="off" />

                                                </div>

                                                <div class="field-wrap">
                                                    <label>
                                                        Email Address<span class="req">*</span>
                                                    </label>
                                                    <input type="email" name="Email" required autocomplete="off" />
                                                </div>
                                                <div class="field-wrap">
                                                    <label>
                                                        Password<span class="req">*</span>
                                                    </label>
                                                    <input type="password" name="Password" required autocomplete="off" />
                                                </div>
                                                <div class="field-wrap">
                                                    <label>
                                                        Phone Number<span class="req">*</span>
                                                    </label>
                                                    <input type="text" name="Mobile" pattern="[0-9]{11}" title="Phone Number.<br> Like: 01#########" required autocomplete="off" />
                                                </div>
                                                

                                                <button type="submit" name="submit" class="button button-block">Get Started</button>

                                            </form>

                                        </div>


                                        <div id="login">
                                            <h1>Welcome Back!</h1>

                                            <form action="" method="POST">

                                                <div class="field-wrap">
                                                    <label>
                                                        Email<span class="req">*</span>
                                                    </label>
                                                    <input type="text" name="p_email" required autocomplete="off" />
                                                </div>

                                                <div class="field-wrap">
                                                    <label>
                                                        Password<span class="req">*</span>
                                                    </label>
                                                    <input type="password" name="p_psw" required autocomplete="off" />
                                                </div>
                                                <button name="Login" id="forget" class="button button-block" onclick="">Log In</button>

                                            </form>

                                                <button class="forgot" id="forgot" onclick="showDiv()">Forgot Password?</button>
                                                <div id="forgetPass">
                                                    <h1>Recover Your Password</h1>
                                                    <p>enter your email: </p><input name="email" id="mymail" palceholder="email"/>
                                                    <button id="recover"  onclick="recover();" >recover</button>
                                                    <div class="s"></div>
                                                </div>
                                                

                                                

                                        </div>

                                    </div><!-- tab-content -->

                                </div> <!-- /form -->

                            </div>
                        </div>
                    </div>

                </div>

          <!---footer ----->
            <?php include("footer.php");?>



            </div>
            <!-- END fh5co-page -->

        </div>
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
        <!-- LogIn JS-->
        <script src="js/login.js"></script>
        <!-- Main JS -->
        <script src="js/main.js"></script>
        
        
<script>
function showDiv() {
   document.getElementById('forgetPass').style.display = "block";
};
</script>
<script>
    function recover(){
        var p= document.getElementById('mymail').value;
        console.log(p);
        
         $.ajax({
            type: 'POST',
            url: 'forgetMail.php',
            data: {
                id: p
            },
            success: function(html) {
                $('.s').html(html);
            }
        });

    };
</script>

</body>

</html>