<?php
session_start();
include("dbconnection.php");
$loginCheck=(isset($_SESSION['email']))?$_SESSION['email']:''; 
$_SESSION['msg']="";
$cabinId = $_GET["ID"];
$cabinDetailsQuery="SELECT p.*,l.launch_name
                    FROM 
                        (SELECT CONCAT(c.cabin_type, ' ', c.ac_non) AS FIRSTNAME, c.*
                         FROM  cabin c) as p NATURAL JOIN launch l
                    WHERE cabin_id ='$cabinId'";
 $runCabinDetailsQuery= mysqli_query($conn,$cabinDetailsQuery);  
while($row2 = mysqli_fetch_array($runCabinDetailsQuery)){
    $cabinName = $row2['cabinName'];
    $cabinType = $row2['FIRSTNAME'];
    $cabinFloor = $row2['cabin_floor'];
    $cabinCost = $row2['cabin_cost'];
    $cabinSeat = $row2['cabin_seat'];
    $cabinDesc = $row2['description'];
    $launchName = $row2['launch_name'];
    if( $row2['attachBathroom'] ==0) 
        $bath= "No";
    else $bath= "yes";
    if( $row2['balcony'] ==0) 
        $balcony= "No";
    else $balcony= "yes";
    
    if(isset($_POST["excillent"])){
        if($loginCheck=="")
            $_SESSION['msg']="For giving rating, please login first";
        else{
            $checkRatingExistence= "SELECT* FROM cabinratingbyuser WHERE cabin_id='$cabinId' AND passenger_email='$loginCheck'";
            $runCheckRatingExistence= mysqli_query($conn,$checkRatingExistence);
            $rowcount=mysqli_num_rows($runCheckRatingExistence);
            if($rowcount==0){
                $insertRating= "INSERT INTO cabinratingbyuser (passenger_email, cabin_id, rating) VALUES ('$loginCheck', '$cabinId', '5');";
                $runInsertRating= mysqli_query($conn,$insertRating);  
                if($runInsertRating)
                    $_SESSION['msg']="ThankYou For your Review";
            }
            else{
                $row= mysqli_fetch_array($runCheckRatingExistence);
                $cabinRatingId= $row['cabinRatingId'];
                $updateR="UPDATE cabinratingbyuser SET rating='5' WHERE cabinRatingId='$cabinRatingId'";
                $runUpdateR= mysqli_query($conn,$updateR); 
                if($runUpdateR)
                    $_SESSION['msg']="ThankYou, your Review updated successfully";
            }
        }
    }
    
    if(isset($_POST["veryGood"])){
        if($loginCheck=="")
            $_SESSION['msg']="For giving rating, please login first";
        else{
            $checkRatingExistence= "SELECT* FROM cabinratingbyuser WHERE cabin_id='$cabinId' AND passenger_email='$loginCheck'";
            $runCheckRatingExistence= mysqli_query($conn,$checkRatingExistence);
            $rowcount=mysqli_num_rows($runCheckRatingExistence);
            if($rowcount==0){
                $insertRating= "INSERT INTO cabinratingbyuser (passenger_email, cabin_id, rating) VALUES ('$loginCheck', '$cabinId', '4');";
                $runInsertRating= mysqli_query($conn,$insertRating);  
                if($runInsertRating)
                    $_SESSION['msg']="ThankYou For your Review";
            }
            else{
                $row= mysqli_fetch_array($runCheckRatingExistence);
                $cabinRatingId= $row['cabinRatingId'];
                $updateR="UPDATE cabinratingbyuser SET rating='4' WHERE cabinRatingId='$cabinRatingId'";
                $runUpdateR= mysqli_query($conn,$updateR); 
                if($runUpdateR)
                    $_SESSION['msg']="ThankYou, your Review updated successfully";
            }
        }
    }
    
    if(isset($_POST["good"])){
        if($loginCheck=="")
            $_SESSION['msg']="For giving rating, please login first";
        else{
            $checkRatingExistence= "SELECT* FROM cabinratingbyuser WHERE cabin_id='$cabinId' AND passenger_email='$loginCheck'";
            $runCheckRatingExistence= mysqli_query($conn,$checkRatingExistence);
            $rowcount=mysqli_num_rows($runCheckRatingExistence);
            if($rowcount==0){
                $insertRating= "INSERT INTO cabinratingbyuser (passenger_email, cabin_id, rating) VALUES ('$loginCheck', '$cabinId', '3');";
                $runInsertRating= mysqli_query($conn,$insertRating);  
                if($runInsertRating)
                    $_SESSION['msg']="ThankYou For your Review";
            }
            else{
                $row= mysqli_fetch_array($runCheckRatingExistence);
                $cabinRatingId= $row['cabinRatingId'];
                $updateR="UPDATE cabinratingbyuser SET rating='3' WHERE cabinRatingId='$cabinRatingId'";
                $runUpdateR= mysqli_query($conn,$updateR); 
                if($runUpdateR)
                    $_SESSION['msg']="ThankYou, your Review updated successfully";
            }
        }
    }
    
    
    if(isset($_POST["average"])){
        if($loginCheck=="")
            $_SESSION['msg']="For giving rating, please login first";
        else{
            $checkRatingExistence= "SELECT* FROM cabinratingbyuser WHERE cabin_id='$cabinId' AND passenger_email='$loginCheck'";
            $runCheckRatingExistence= mysqli_query($conn,$checkRatingExistence);
            $rowcount=mysqli_num_rows($runCheckRatingExistence);
            if($rowcount==0){
                $insertRating= "INSERT INTO cabinratingbyuser (passenger_email, cabin_id, rating) VALUES ('$loginCheck', '$cabinId', '2');";
                $runInsertRating= mysqli_query($conn,$insertRating);  
                if($runInsertRating)
                    $_SESSION['msg']="ThankYou For your Review";
            }
            else{
                $row= mysqli_fetch_array($runCheckRatingExistence);
                $cabinRatingId= $row['cabinRatingId'];
                $updateR="UPDATE cabinratingbyuser SET rating='2' WHERE cabinRatingId='$cabinRatingId'";
                $runUpdateR= mysqli_query($conn,$updateR); 
                if($runUpdateR)
                    $_SESSION['msg']="ThankYou, your Review updated successfully";
            }
        }
    }
    
    
    if(isset($_POST["disaster"])){
        if($loginCheck=="")
            $_SESSION['msg']="For giving rating, please login first";
        else{
            $checkRatingExistence= "SELECT* FROM cabinratingbyuser WHERE cabin_id='$cabinId' AND passenger_email='$loginCheck'";
            $runCheckRatingExistence= mysqli_query($conn,$checkRatingExistence);
            $rowcount=mysqli_num_rows($runCheckRatingExistence);
            if($rowcount==0){
                $insertRating= "INSERT INTO cabinratingbyuser (passenger_email, cabin_id, rating) VALUES ('$loginCheck', '$cabinId', '1');";
                $runInsertRating= mysqli_query($conn,$insertRating);  
                if($runInsertRating)
                    $_SESSION['msg']="ThankYou For your Review";
            }
            else{
                $row= mysqli_fetch_array($runCheckRatingExistence);
                $cabinRatingId= $row['cabinRatingId'];
                $updateR="UPDATE cabinratingbyuser SET rating='1' WHERE cabinRatingId='$cabinRatingId'";
                $runUpdateR= mysqli_query($conn,$updateR); 
                if($runUpdateR)
                    $_SESSION['msg']="ThankYou, your Review updated successfully";
            }
        }
    }
    
    $numberOfReview="SELECT count(r.rating) AS userNumber,r.rating  
                     FROM cabinratingbyuser  r WHERE cabin_id= '$cabinId'
                     GROUP BY rating";
     $runNumberOfReview= mysqli_query($conn,$numberOfReview);  
        $r1=0;$r2=0;$r3=0;$r4=0;$r5=0;
     while($row = mysqli_fetch_array($runNumberOfReview)){
            $rating = $row['rating'];
            $userNumber = $row['userNumber'];
            if($rating==1){
                $r1=$userNumber;
            }elseif($rating==2){
                $r2=$userNumber;
            }elseif($rating==3){
                $r3=$userNumber;
            }elseif($rating==4){
                $r4=$userNumber;
            }elseif($rating==5){
                $r5=$userNumber;
            }
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
    <link rel="stylesheet" href="css/comment.css">


     <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    
    
   
    
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
                           <div class="myAlert ma"><h5><?php echo $_SESSION['msg']; ?></h5></div>
                            <div class="row">
                               <div class="col-md-6 cabinDetails">
                                   <h1><i class="fas fa-exclamation-circle"></i> Cabin Details</h1>
                                   <ul>
                                       <li><b>Launch Name: </b><?php echo"$launchName";?></li>
                                       <li><b>Cabin Name: </b><?php echo"$cabinName";?></li>
                                       <li><b>Floor No: </b><?php echo"$cabinFloor";?></li>
                                       <li><b>Cabin Type: </b><?php echo"$cabinType";?></li>
                                       <li><b>Number Of Bed: </b><?php echo"$cabinSeat";?></li>
                                       <li><b>Attach Bathroom: </b><?php echo"$bath";?></li>
                                       <li><b>Has Balcony: </b><?php echo"$balcony";?></li>
                                       <li><b>Regular Price: </b><?php echo"$cabinCost";?> &#2547;</li>
                                       <li><b>Description: </b><?php echo"$cabinDesc";?></li>
                                   </ul>
                               </div>
                                <div class="col-md-6 cabinReview">
                                    <h1><i class="fas fa-users"></i> review</h1>
                                    <ul class="review">
                                        <li><b>Excellent &nbsp;&nbsp;&nbsp; <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> :</b> <?php echo $r5;?> people</li>
                                        
                                        <li><b>Very Good &nbsp;&nbsp;<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>&nbsp;&nbsp;&nbsp;&nbsp; :</b> <?php echo $r4;?> people</li>
                                        
                                        <li><b>Good &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b> <?php echo $r3;?> people</li>
                                        <li><b>Average &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-star"></i><i class="fas fa-star"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <?php echo $r2;?> people</li>
                                        <li><b>disaster &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-star"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <?php echo $r1;?> people</li>
                                    </ul>
                                    <h1><i class="fas fa-question-circle"></i> What Is your rating</h1>
                                    <form method="post" class="giveRating">
                                        <input type="submit" name="excillent" class="excillent" value="Excillent">
                                        <input type="submit" name="veryGood" class="excillent" value="Very Good">
                                        <input type="submit" name="good" class="excillent" value="Good">
                                        <input type="submit" name="average" class="excillent" value="Average">
                                        <input type="submit" name="disaster" class="excillent" value="Disaster">
                                    </form>
                                    
                                </div>
                            </div><!--end of row-->
                            
                                <div class="row">
                                    <div class="col-12">
                                        <div class="gallery-container">

                                            <h1 class="text-center"><i class="fas fa-images"></i> Gallery</h1>
                                            <div class="tz-gallery">

                                                <div class="row mb-3">
                                                    <?php
                                                        $lImgQuery= "SELECT * FROM cabin_img WHERE cabin_id='$cabinId'";
                                                        $runLImgQuery = mysqli_query($conn,$lImgQuery);  
                                                        while($row = mysqli_fetch_array($runLImgQuery)){
                                                            $lPath = $row['img_path'];
                                                            echo"
                                                                    <div class='col-md-4'>
                                                                        <div class='card'>
                                                                            <a class='lightbox' href='$lPath'>
                                                                                <img src='$lPath' class='card-img-top'>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                ";
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end of row-->
                            <div class="row">
                                <div class="col giveReview">
                                    <h1><i class="fas fa-comments"></i> comments</h1>
                                    <?php include("comment.php");?>
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
    baguetteBox.run('.tz-gallery');
</script>
<script>
   
</script>

<script>
    function myFunctionReply(sc) {
        var idNo = sc.id;
        var index = document.getElementById(idNo).value;
         
        
       if (document.getElementsByClassName("form1")[index].style.display == "block") {
                document.getElementsByClassName("form1")[index].style.display = "none";
       }else{
           document.getElementsByClassName("form1")[index].style.display = "block";
       }
        
        console.log(index);
    };
</script>

<script>
    function myFunctionLike(sc) {
        var idNo = sc.id;
        var numberOfLike = document.getElementById(idNo).value;
        
        var fields = numberOfLike.split('_');
        var status = fields[0];
        var numberOfLike = fields[1];
        var cabinCommentId = fields[2];
        var user = fields[3];
        
        console.log(status);
        console.log(numberOfLike);
        console.log(cabinCommentId);
        console.log(user);
        
        if(status=="unlog"){
            alert("please Login for like comments");
        }else{
            if(status=='like'){
                numberOfLike--;
                document.getElementById(idNo).innerText = '('+(numberOfLike)+') '+'like';
                var p = "nolike_"+numberOfLike+"_"+cabinCommentId+"_"+user;
                document.getElementById(idNo).value=  p;
                console.log(p);
                var mode= "delete";
            }
            else if(status=="nolike"){
                numberOfLike++;
                document.getElementById(idNo).innerText = '('+(numberOfLike)+') '+'unlike';
                var p = "like_"+numberOfLike+"_"+cabinCommentId+"_"+user;
                document.getElementById(idNo).value=  p;
                console.log(p);
                var mode= "insert";
            }
            
            $.ajax({
                type: 'POST',
                url: 'cabinComentLikeInsert.php',
                data: {
                    cabinCommentId: cabinCommentId, user: user, mode: mode
                },
                success: function(html) {
                    
                }
            });
        }
        

    };
</script>


</body>

</html>