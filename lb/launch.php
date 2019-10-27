<?php
session_start();
include("dbconnection.php");
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
    <title>Launches</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <!-- CS Select -->
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/cs-skin-border.css">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">


     <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <script src="js/jquery.min.js"></script>
     <script>
         var prevClick=null;
        function call(a){
            var id = a;
            document.getElementById(id).classList.add("mystyle");
            prevClick = id;
            $.ajax({
                type: 'POST',
                url: 'launchDetails.php',
                data: {
                    id: id
                },
                success: function(html) {
                    $('.launchDetail').html(html);
                }
            });
            
        };
    </script>
    
</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <?php include("header.php");?>
            <!-- end:header-top -->

            <!--weather view-->
            <?php include("weather.php");?>

            <div class="fh5co-hero">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-cover" data-stellar-background-ratio=".5" style="background-image: url(images/cover_bg_1.jpg);">
                    <div class="desc2">
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-4 launchSearch">
                                    <h1><i class="fas fa-ship"></i> All Launches</h1>
                                    <ul>
                                        <?php
                                            $allLaunches="SELECT launch_id, launch_name FROM launch ORDER BY reg_date ASC";
                                             $i=0;
                                            $runAllLaunches = mysqli_query($conn,$allLaunches);  
                                            while($row = mysqli_fetch_array($runAllLaunches)){
                                                $lId = $row['launch_id'];
                                                $lname = $row['launch_name'];
                                                echo"<li><button value='$lId' id='$lId' onclick='launchDetailsFunction(this)'>$lname</button></li>";
                                                
                                                if($i==0){
                                                    
                                                    echo"<input type='hidden' id='a' value='$lId'>";
                                                    //echo"<li><button value='$lId' id='$lId' onload='launchDetailsFunction(this);'>$lname</button></li>";
                                                    
                                                    echo '<script type="text/javascript">
                                                            var a = document.getElementById("a").value;
                                                            call(a);
                                                         </script>';
                                                    
                                                }
                                                
                                                    
                                                
                                                $i=1;
                                            }
                                        ?>
                                    </ul>
                                </div>
                                
                                
                                <div class="col-8 launchDetail">
                                
                                </div>

                            </div>
                        </div>
                        <!--end of container-->


                    </div>
                </div>
            </div>



            <!---footer ----->
            <?php include("footer.php");?>



        </div>
        <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->


    



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>
   
    
    <script>
        //var prevClick=null;
        function launchDetailsFunction(selectedLaunch) {
            //alert(selectedLaunch);
            var idNo = selectedLaunch.id;
            if(prevClick != null)
                document.getElementById(prevClick).classList.remove('mystyle');
            
            document.getElementById(idNo).classList.add("mystyle");
            prevClick = idNo;
            
            var id = document.getElementById(idNo).value;
            console.log(id);

            $.ajax({
                type: 'POST',
                url: 'launchDetails.php',
                data: {
                    id: id
                },
                success: function(html) {
                    $('.launchDetail').html(html);
                }
            });


        };
    </script>
    


</body>

</html>