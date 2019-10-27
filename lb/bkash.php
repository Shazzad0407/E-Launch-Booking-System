<?php
	session_start();
	//$p_username = $_SESSION['p_name'];*/
	include("dbconnection.php");

    $trackingId = $_GET['trackingId'];
    $bill = $_GET['bill'];
        
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
                <div class="confirmation">
                    <h1>Shumon, Your Ticket is reserved!</h1>
                    <h6>Reservation confirmation e-mail has been sent to 01677084370</h6>

                    <h5>But you are not done yet! Please do not close the page, but follow the steps below:</h5>
                    <ol>
                        <li>
                            <p>please pay for your tickets though bKash to our Merchant Account Number given below within next <span>30 minutes</span>, wlse your ticket will be cancelled.</p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Merchant No.</th>
                                        <th>Bill</th>
                                        <th>Reservation Ref.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01677084370</td>
                                        <td><?php echo $bill;?> &#2547;</td>
                                        <td><?php echo $trackingId;?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            <p>After paying through bKash, please enter the Transaction ID received from bKash below:</p>
                            <div class="bverifyBox">
                                <div class="alertMsg2"></div>
                                <h3>Our Merchant Account No: 01677084370</h3>
                                   
                                    <div class="input-group mb-6 mr-sm-12" style="width: 100%;">
                                        <input type="text"  name="tId" class="form-control trPin" id="tId1" placeholder="Enter Your bKash Transaction Id" required>
                                        <button id="bsend" class="bsend" value="verify transection" onclick="startAjax();">verify transection</button>
                                    </div>
                                
                                <ul>
                                    <li>You MUST verify your bKash Transaction ID within 30 minutes of booking the ticket, else your ticket will be cancelled automatically by the system.</li>
                                    <li>In case you close the page by mistake, you can always visit the link - Verify bKash / Print from the top menu and verify your bKash transaction.</li>
                                    <li>Please save your bKash Reservation Reference Number (starting with "BK") for future reference.</li>
                                </ul>
                            </div>
                        </li>
                    </ol>
                </div>

            </div>
            <!--end of container-->
        </div>




        <!---footer ----->
        <?php include("footer.php");?>



        <!-- jQuery -->
        
        <script type='text/javascript'>

            //AJAX function
            function startAjax() {
                
                var trackingId = "<?php echo $trackingId; ?>";
             var tId = document.getElementById('tId1').value;
             var dataString = 'trackingId='+ trackingId + '&tId=' + tId;
             console.log(dataString);
                
                
              $.ajax({
                type: "POST",
                url: "bKashPayment.php",
                data: dataString,
                success: function(html){
                  $(".alertMsg2").html(html);
                }
              });
            }

            //Call AJAX:
            $(document).ready(startAjax);
        </script>
        
        
        
<!--        <script>
             var trackingId = "<?php //echo $trackingId; ?>";
             var tId = document.getElementById('tId1').value;
             var dataString = 'trackingId='+ trackingId + '&tId=' + tId;
             console.log(dataString);
            
            
            $("#bsend").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "bKashPayment.php",
                    data: dataString,
                    success: function(result) {
                        alert('ok');
                    },
                    error: function(result) {
                        alert('error');
                    }
                });
            });

            
            
            
            
            
            
            
            
           /* 
            
            function myFunctionVerify(verify) {
                
               
                $.ajax({
                    type: 'POST',
                    url: 'bKashPayment.php',
                    data: dataString,
                    success: function(html) {
                        $(.alertMsg2).html(html);
                    }
                });

                
            };*/
        </script>-->

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