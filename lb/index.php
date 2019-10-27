<?php
    session_start();
    $conn=mysqli_connect("localhost","root","","launchdb");
    if(isset($_POST['Search'])){
    //$passenger_email = $_SESSION['passenger_email'];
    $_SESSION['start_terminal_name'] = $_POST['start_terminal_name'];
    $_SESSION['destination_terminal_name'] = $_POST['destination_terminal_name'];
    $_SESSION['booking_date'] = $_POST['booking_date'];
        //$date =  $_POST['booking_date'];
    //if(!isset($p_username)){
    //header("Location: http://localhost/Elaunch_v1/login.php");
     header("Location: departure.php");
     exit;
    /*}else{
    header("Location: http://localhost/Elaunch_v1/departure.php");
    }*/
    }
?>
<!DOCTYPE php>
<php class="no-js">

   <?php include("head.php");?>
   
    <body>
        <div id="fh5co-wrapper">
            <div id="fh5co-page">
                <!--header page calling-->
                <?php include("header.php");?>
                <!-- end:header-top -->

                <!--weather view-->
                <?php include("weather.php");?>
                
            
                <div class="fh5co-hero">
                    <div class="fh5co-overlay"></div>
                    <div class="fh5co-cover" data-stellar-background-ratio=".5" style="background-image: url(images/cover_bg_1.jpg);">
                        <div class="desc">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-5 col-md-5">
                                        <div class="tabulation animate-box">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs">
                                                <li class="active boxHead" role="presentation">
                                                    <h5>Find Launch By Route</h5>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <form action="" method="post" autocomplete="off">
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="Book">
                                                        <div class="row">
                                                            <div class="col-xxs-12 col-xs-6 mt">
                                                                <div class="input-field">
                                                                    <label for="from">From:
                                                                    </label>
                                                                    <!--	<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/> -->
                                                                    <select class="form-control" id="start" name="start_terminal_name" required="required" value='' >
                                                                        <option disable hidden value="">From</option>
                                                                        <?php
                                                                                include("dbconnection.php");
                                                                                $deptQuery= "SELECT terminal_name
                                                                                FROM terminal";
                                                                                $runDeptQuery = mysqli_query($conn,$deptQuery);
                                                                                while($row = mysqli_fetch_array($runDeptQuery)){
                                                                                    $dName= $row['terminal_name'];
                                                                                    echo "<option>$dName</option>";
                                                                                }
                                                                            ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxs-12 col-xs-6 mt">
                                                                <div class="input-field">
                                                                    <label for="from">To:
                                                                    </label>
                                                                    <select class="form-control" id="destination" name="destination_terminal_name" required="required" value=''>
                                                                        <option disable hidden value="">To</option>
                                                                        <?php
                                                                                include("dbconnection.php");
                                                                                $deptQuery= "SELECT terminal_name
                                                                                FROM terminal";
                                                                                $runDeptQuery = mysqli_query($conn,$deptQuery);
                                                                                while($row = mysqli_fetch_array($runDeptQuery)){
                                                                                    $dName= $row['terminal_name'];
                                                                                    echo "<option>$dName</option>";
                                                                                }
                                                                            ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=" mt alternate" style="width: 47%; margin: 0 auto;margin-bottom: 30px;">
                                                                <div class="input-field">
                                                                    <label for="date-start" style="">Date:</label>
                                                                   <input type="text" class="form-control" id="date-start" name="booking_date" placeholder="mm/dd/yyyy" required /> 
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 ">
                                                                <input type="submit" class="findRouteButton" value="Search" name="Search">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="desc2 animate-box">
                                        <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                                            <h2>Book at cheaper price!</h2>
                                            <span class="price">Starting from 100BDT only!</span>
                                            <!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fh5co-destination">
                <div class="tour-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="fh5co-destination-list" class="animate-box">
                                <li class="one-forth text-center" style="background-image: url(images/places/dhaka.png); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Dhaka</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/places/barisal.png); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Barisal</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/places/chandpur.png); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Chandpur</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/places/bhola.png); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Bhola</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/places/kuwakata.png); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Kuwakata</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-half text-center">
                                    <div class="title-bg">
                                        <div class="case-studies-summary">
                                            <h2>Most Popular Destinations</h2>
                                            <span>
                                                <a href="#">View All Destinations</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/places/monpura.png); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Monpura</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/places/saint.png); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Saint-martin</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/places/hatiya.png); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Hatiya</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/places/potuwakhali.png); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Potuwakhali</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/places/bagerhat.png); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Bagherhat</h2>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <span class="quote">
                                        <span>
                                            <i class="icon-quotes-right"></i>
                                        </span>
                                    </span>
                                    <p>&ldquo; Best online launch ticket seller available in Bangladesh&rdquo;
                                    </p>
                                </blockquote>
                                <p class="author">Maliha, Banker

                                    <a href="http://freehtml5.co/" target="_blank"></a>
                                    <span class="subtext"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-testimony animate-box">
                                <blockquote>
                                    <span class="quote">
                                        <span>
                                            <i class="icon-quotes-right"></i>
                                        </span>
                                    </span>
                                    <p>&ldquo;e Next rising company of Bangladesh, Best wishes!!.&rdquo;</p>
                                </blockquote>
                                <p class="author">Rafique, CEO-UIU<a href="http://freehtml5.co/" target="_blank"></a>
                                    <span class="subtext"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---footer ----->
            <?php include("footer.php");?>
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
        <script>
                 var dateToday = new Date();
                var dates = $("#date-start").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3,
                minDate: dateToday,
                onSelect: function(selectedDate) {
                    var option = this.id == "date-start" ? "minDate" : "maxDate",
                        instance = $(this).data("datepicker"),
                        date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                    dates.not(this).datepicker("option", option, date);
                }
            });
        </script>
     
    </body>
</php>