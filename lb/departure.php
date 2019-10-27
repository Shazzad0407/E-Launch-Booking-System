<?php
	session_start();
	//$p_username = $_SESSION['p_name'];*/
	include("dbconnection.php");
        
		$start_terminal_name=$_SESSION['start_terminal_name'];
		$destination_terminal_name=$_SESSION['destination_terminal_name'];
        $booking_date=$_SESSION['booking_date'];
        $originalDate = $booking_date;
        $booking_date = date("Y-m-d", strtotime($originalDate));
        $_SESSION['booking_date'] = $booking_date;

    //date formating object creation
    include("classes/format.php");
    $fm = new format();
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

        
        <div class="desc">
            <?php
                  if(isset($_POST['prevDay'])){
                        $_SESSION['booking_date'] = date('Y-m-d', strtotime($booking_date .' -1 day'));
                            //echo $booking_date;
                        $start_terminal_id = $_SESSION['start_terminal_name'];
                        $destination_terminal_id = $_SESSION['destination_terminal_name'];
                        $booking_date = $_SESSION['booking_date'];

                        /*
                        $qry = "select * from launch,(select launch_id from schedule where start_terminal_id = '$start_terminal_id' AND destination_terminal_id = '$destination_terminal_id' AND schedule_date = '$booking_date') as Available where launch.launch_id = Available.launch_id order by launch.high_price asc";
                                        $res = $conn->query($qry) or die('bad query');*/
                    }
                    if(isset($_POST['nextDay'])){

                            $_SESSION['booking_date'] = date('Y-m-d', strtotime($booking_date .' +1 day'));
                                //echo $booking_date;
                            $start_terminal_id = $_SESSION['start_terminal_name'];
                            $destination_terminal_id = $_SESSION['destination_terminal_name'];
                            $booking_date = $_SESSION['booking_date'];

                            /*
                            $qry = "select * from launch,(select launch_id from schedule where start_terminal_id = '$start_terminal_id' AND destination_terminal_id = '$destination_terminal_id' AND schedule_date = '$booking_date') as Available where launch.launch_id = Available.launch_id order by launch.high_price asc";
                                            $res = $conn->query($qry) or die('bad query');*/
                        }
            
            
            
            
					if($start_terminal_name==$destination_terminal_name){
						//echo "<h3 style ='text-align :center;'>Start and Destination can not be same!</h3>";
						//echo "<h4 style ='text-align :center;'>Please select your start and destination point correctly.</h4>";
						echo "<script type='text/javascript'>alert('Start and Destination can not be same!')</script>";
						
					}
					else if($start_terminal_name != 'Dhaka' && $destination_terminal_name != 'Dhaka'){
						//echo "<h3 style ='text-align :center;'>Sorry,this route is not avaiable.</h3>";
						echo "<script type='text/javascript'>alert('Sorry,this route is not avaiable!')</script>";
					}
					else{
						$qry = "select * from terminal where terminal_name = '$start_terminal_name'";
						$res = $conn->query($qry) or die('bad query1');
						$row = $res->fetch_assoc();
						$start_terminal_id=$row["terminal_id"];
						$qry = "select * from terminal where terminal_name = '$destination_terminal_name'";
						$res = $conn->query($qry) or die('bad query2');
						$row = $res->fetch_assoc();
						$destination_terminal_id=$row["terminal_id"];
		                 
						$qry = "select * from launch,(select launch_id from launch_schedule where start_terminal_id = '$start_terminal_id' AND destination_terminal_id = '$destination_terminal_id' AND schedule_date = '$booking_date') as Available where launch.launch_id = Available.launch_id order by launch.high_price asc";
						$res = $conn->query($qry) or die('bad query3');
						//$row = $res->fetch_assoc();
						//$route_id=$row["id"];
						
						/*$qry = "select * from launch,launchroute,(select id from launch,(SELECT * from offdates,(select L_id as lid from launchroute where r_id = '$route_id') as AV where offdates.L_ID = av.lid and offdates.offdate = '$j_date' group by L_ID) as A WHERE A.l_id = launch.id) as A2 WHERE A2.id <> launch.id and launchroute.R_ID = '$route_id' and launchroute.L_ID = launch.id ";
						$res = $conn->query($qry) or die('bad query');*/
						//echo "<h4> Showing available launches:</h4>";
						include("launch_table.php");
					}
				?>
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