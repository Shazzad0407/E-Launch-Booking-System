<?php
	session_start();
	$p_username = $_SESSION['email'];
    //$p_username= "ritu@gmail.com";
    $schedule_date =$_SESSION['booking_date'] ;
    $start_terminal_name=$_SESSION['start_terminal_name'];
    $destination_terminal_name=$_SESSION['destination_terminal_name'];
    $booking_date=$_SESSION['booking_date'];
    

	include("dbconnection.php");
    $cabinNo=$_GET['cabinNo'];
    $cabinClass=$_GET['cabinClass'];
    $price=$_GET['price'];
    $launchId=$_GET['launchId'];
    $Bill=$price;
    $user = $_SESSION['email'];

$elaunchFee= 30;
$processingFee= 30;
$discount= 0;
    $totalBill = $Bill + $elaunchFee+ $processingFee+ $discount;

    $findCabin = "SELECT * FROM(
                            SELECT CONCAT(cabin_type, ' ', ac_non) AS cabinClass, cabin_id,cabinName
                            FROM  cabin 
                            WHERE launch_id ='$launchId' ) as p
                         WHERE p.cabinClass ='$cabinClass'";
    $runFindCabin= mysqli_query($conn,$findCabin);
    if($cabinNo==1){
                $row = mysqli_fetch_array($runFindCabin);
                $cabinId1 = $row['cabin_id'];
                $cabinName1 = $row['cabinName'];
    }else{
        $row = mysqli_fetch_array($runFindCabin);
                 $cabinId1 = $row['cabin_id'];
                 $cabinName1 = $row['cabinName'];
        $row = mysqli_fetch_array($runFindCabin);
                 $cabinId2 = $row['cabin_id'];
                 $cabinName2 = $row['cabinName'];
    }
    

    
    $launchNameQuery= "SELECT  launch_name  FROM launch WHERE launch_id='$launchId'";
    $runLaunchName = mysqli_query($conn,$launchNameQuery);
    $row = mysqli_fetch_array($runLaunchName);
    $launchName= $row['launch_name'];

    if(isset($_POST['bKashConfirm'])){
        
       $bookingId = uniqid($p_username,$totalBill);
        $status ="processing";
        $paymentType = "bKash";
        $bookingQuery ="INSERT INTO 
                        booking(booking_id, booking_date, schedule_date, launch_id, passenger_email, status_of_Booking, paymentType, bill) 
                        VALUES ('$bookingId',NOW(),'$schedule_date','$launchId','$user','$status','$paymentType','$totalBill')";
        
        $runBookingQuery = mysqli_query($conn,$bookingQuery);
        
        if($runBookingQuery){
            $trackingId= 'BK'.rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $bkashInsert="INSERT INTO bkash(trackingId, amount, booking_id) VALUES ('$trackingId',0,'$bookingId')";
            $runBkashInsert= mysqli_query($conn,$bkashInsert);
            
            $bookCabin = "SELECT * FROM(
                            SELECT CONCAT(cabin_type, ' ', ac_non) AS cabinClass, cabin_id
                            FROM  cabin 
                            WHERE launch_id ='$launchId' ) as p
                         WHERE p.cabinClass ='$cabinClass'";
            $runBookCabin= mysqli_query($conn,$bookCabin);
            for($i=1; $i<=$cabinNo; $i++){
                $row = mysqli_fetch_array($runBookCabin);
                $cabinId = $row['cabin_id'];
                $insertBooked = "INSERT INTO booked(booking_id, cabin_id) VALUES ('$bookingId','$cabinId')";
                $runInsertBooked= mysqli_query($conn,$insertBooked);
               
            }
            
            //include("sendMail.php");
            header("Location: bkash.php?trackingId=$trackingId&bill=$totalBill");
            exit(); 
        }
        else{
            echo "-------->fail<---------";
        }
        
    }
        
?>

<!DOCTYPE php>
<!--[if lt IE 7]>      <php class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <php class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <php class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<php class="no-js">
    <!--<![endif]-->

    <?php include("head.php");?>

    <body>


        <!--header page calling-->
        <?php include("header.php");?>
        <!-- end:header-top -->

        <!--weather view-->
        <?php include("weather.php");?>
        <div class="contentBody">
            <div class="container">
               <div class="PassengerDetails payment">
                    <h2>Passenger Details</h2>
                    <div class="border"></div>
                    <div class="TotalAmountPayable">
                       <?php
                            $pd= "SELECT * FROM passenger WHERE passenger_email='$user'";
                             $runPd = mysqli_query($conn,$pd);
                            while($row = mysqli_fetch_array($runPd)){

                                    $passenger_first_name= $row['passenger_first_name'];
                                    $passenger_last_name= $row['passenger_last_name'];
                                    $passenger_mobile_no= $row['passenger_mobile_no'];
                                    $gender= $row['gender'];
                                    $age= $row['age'];
                            }
                        ?>
                        <ul class="pd">
                            <li><b>Name: </b><?php echo"$passenger_first_name $passenger_last_name";?> </li>
                            <li><b>Age: </b><?php echo"$age";?></li>
                            <li><b>Gender: </b><?php echo"$gender";?></li>
                        </ul>
                        <ul class="pd pd2">
                            <li><b>Mobile No: </b><?php echo"$passenger_mobile_no";?></li>
                            <li><b>email: </b><?php echo"$user";?></li>
                        </ul>
                    </div>
                </div><!--end of passenger details-->
                <div class="journeyDetails">
                    <h2>Journey Details</h2>
                    <h5><?php echo $start_terminal_name; ?> To <?php echo $destination_terminal_name; ?></h5>
                    <h5>launch Name: <a href="launch.php" target="_blank"><?php echo $launchName;?></a></h5>
                    <?php
                     if($cabinNo==1){
                         echo"<h5>Cabin No: <a href='cabinDetails.php?ID=$cabinId1' target='_blank'> $cabinName1</a></h5>";
                     }
                     else{
                         echo"<h5>Cabin No: <a href='cabinDetails.php?ID=$cabinId1' target='_blank'> $cabinName1; </a><a href='cabinDetails.php?ID=$cabinId2' target='_blank'> $cabinName2</a></h5>";
                     }
                    ?>
                    
                    <h5>Time: <?php echo $booking_date ."at 8 p.m";?></h5>
                </div><!--end of journey details-->
               
                <div class="payment">
                    <h2>Payment Details</h2>
                    <div class="border"></div>
                    <div class="TotalAmountPayable">
                        <h4>Total Amount Payable:
                            <?php echo $totalBill;?> &#2547;</h4>
                    </div><!--TotalAmountPayable-->
                    
                    
                    <div class="paymentOption">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs pay" role="tablist" id="myTab">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">bKash</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Cash On Delivery</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Credit/Debit Card</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Internet banking</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="bkash">
                                    Your ticket(s) would be reserved and inactive for 30 minutes from the time of booking. Pay through bKash to our <span>Merchant Account No: 01705154820</span> and confirm your transaction ID within 30 minutes to get the confirmed ticket.
                                    <div class="conBikash">
                                        <form action="" method="post">
                                            <button class="bkashConfirm" name="bKashConfirm">Confirm Reservesion</button>
                                        </form>

                                    </div>
                                </div><!--end of bkash -->
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">Content Profile</div>
                            <div role="tabpanel" class="tab-pane" id="messages">Content Messages</div>
                            <div role="tabpanel" class="tab-pane" id="settings">Content Settings</div>
                        </div>

                    </div><!--end of paymentOption-->
                </div><!--end of payment-->
                
                <div class="journeyDetails fareDetails">
                    <h2>Fare Details</h2>
                
                        <h5>Ticket Price: <span><?php echo $Bill;?></span></h5>
                        <h5>Elaunch Fee: <span><?php echo $elaunchFee;?></span></h5>
                        <h5>processing Fee: <span><?php echo $processingFee;?></span></h5>
                        <h5>Discount: <span></span><?php echo $discount;?></h5>
                    <h5><b>Total: <span><?php echo $totalBill;?></span></b></h5>
                </div><!--end of journey details-->
            </div>
            <!--end of container-->
        </div>





        <!---footer ----->
        <?php include("footer.php");?>



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