<?php
        include("dbconnection.php");
    
         $alertMsg="";
        $tId = $_POST['tId'];
        //echo $tId;
        $trackingId = $_POST['trackingId'];
        $url = "http://localhost/bkashApi/items/read.php?tId=".$tId;
        //echo $url;

       $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($client);		
        curl_close($client);




        $result = json_decode($response,true);
        if($result['status_message'] =="Items Not Found"){
            //echo "";
             $alertMsg="invalid transection Id, please try again";
            echo"<div class='alertMsg'><h5>$alertMsg</h5></div>";
            

        }
        else{
           $sender = $result['data']['0']['sender'];
            $receiever = $result['data']['0']['receiver'];
            $amount = $result['data']['0']['amount'];
            $t_date = $result['data']['0']['t_date'];
            //echo '<scrip>alert($tId);</script>';
           // echo $sender;
            //echo $receiever;
            //echo $amount;
            //echo $t_date;
            //cheking first is the transection id used before or not
            $findTransectionValidity ="SELECT* FROM bkash WHERE transactionId='$tId'";
            $runFindTransectionValidity = mysqli_query($conn, $findTransectionValidity);
            $rows = mysqli_num_rows($runFindTransectionValidity);
            if($rows==0 && $receiever=='01677084370'){
                //valid
                date_default_timezone_set('Asia/Dhaka');

                $getBookingIdFromTrackingId = "SELECT* FROM booking NATURAL JOIN bkash WHERE trackingId ='$trackingId'";
                $RunGetBookingIdFromTrackingId = mysqli_query($conn, $getBookingIdFromTrackingId);
                $row = mysqli_fetch_assoc($RunGetBookingIdFromTrackingId);
                $bookingId = $row['booking_id'];
                $bill = $row['bill'];
                $booking_date = $row['booking_date'];
                $currentTime= date('Y-m-d H:i:s');
               // echo $booking_date;
                //echo "........";
                  //  echo $currentTime;
                //echo "........";

                $date1=date_create($currentTime);
                $date2=date_create($booking_date);
                $diff=date_diff($date1,$date2);
                $h= $diff->format("%H");
                $timeDifference = $h*60 + $diff->format("%I");
               // echo $timeDifference;

                if($timeDifference>30){
                    //time over
                     $BookingLate ="UPDATE booking SET status_of_Booking='cancel' WHERE booking_id='$bookingId'";
                     $runBookingLate = mysqli_query($conn, $BookingLate);
                    
                    $alertMsg="your 30 minute period has been over, please book again.";
                    echo"<div class='alertMsg'><h5>$alertMsg</h5></div>";

                }
                else{
                    
                    $bkashInsert="INSERT INTO 
                                  bkash(transactionId,trackingId, sender, amount,paymentTime, booking_id) 
                                  VALUES ('$tId','$trackingId','$sender','$amount','$t_date','$bookingId')";
                    $runBkashInsert= mysqli_query($conn,$bkashInsert);
                    if($runBkashInsert){
                        $allBikashTrackForBooking = "SELECT * FROM bkash WHERE booking_id ='$bookingId'";
                    $runAllBikashTrackForBooking = mysqli_query($conn, $allBikashTrackForBooking);
                    $paidAmount=0;
                    while($row = mysqli_fetch_array($runAllBikashTrackForBooking)){
                         $paidAmount = $paidAmount + $row['amount'];
                     }
                   // $amount= $amount + $paidAmount;
                    //in time
                    //now checking is the amount match with bill
                    if($bill-$paidAmount ==0){
                        /*$BookingConfirm="UPDATE bkash SET transactionId='$tId', sender='$sender',amount='$amount',paymentTime='$t_date' WHERE booking_id='$bookingId'";*/

                        $BookingComplete =" UPDATE booking SET status_of_Booking='completed' WHERE booking_id='$bookingId'";

                        //$runBookingConfirm = mysqli_query($conn, $BookingConfirm);
                        $runBookingComplete = mysqli_query($conn, $BookingComplete);
                        $alertMsg="Congratulation. Your Ticket Booked Successfully.<br> <a href=''>click here</a> for getting ticket or check your mail";
                        echo"<div class='alertMsg'><h5>$alertMsg</h5></div>";
                    }
                    else{
                        if($bill>$paidAmount){
                            /*$BookingConfirm="UPDATE bkash SET transactionId='$tId', sender='$sender',amount='$amount',paymentTime='$t_date' WHERE booking_id='$bookingId'";*/

                            $BookingComplete =" UPDATE booking SET status_of_Booking='insufficient payment' WHERE booking_id='$bookingId'";

                            //$runBookingConfirm = mysqli_query($conn, $BookingConfirm);
                            $runBookingComplete = mysqli_query($conn, $BookingComplete);
                            
                            $restAmount = $bill - $paidAmount;
                            $alertMsg="Sir your bill is ".$bill."&#2547; but you pay ".$paidAmount."&#2547; </br> Please pay ".$restAmount."&#2547; more for booking confirmation";
                            echo"<div class='alertMsg'><h5>$alertMsg</h5></div>";
                        }
                        else{
                            /*$BookingConfirm="UPDATE bkash SET transactionId='$tId', sender='$sender',amount='$amount',paymentTime='$t_date' WHERE booking_id='$bookingId'";*/

                            $BookingComplete =" UPDATE booking SET status_of_Booking='completed' WHERE booking_id='$bookingId'";

                            //$runBookingConfirm = mysqli_query($conn, $BookingConfirm);
                            $runBookingComplete = mysqli_query($conn, $BookingComplete);
                            
                            
                            $restAmount = $paidAmount - $bill ;
                            $alertMsg="Congratulation. Your Ticket Booking Successfully.</br><a href=''>click here</a> for getting ticket or check your mail.</br>Sir your bill is ".$bill."&#2547; but you pay ".$paidAmount."&#2547; </br> Please Contact with us for re-fund";
                            echo"<div class='alertMsg'><h5>$alertMsg</h5></div>";
                        }
                        
                    }
                    }
                    

                }
            }
            else{
                //invalid transaction id
                $alertMsg="invalid transection Id, please try again";
                echo"<div class='alertMsg'><h5>$alertMsg</h5></div>";
            }



        }


        //print_r($result);
        //$jsonData =file_get_contents($response);
        //$json = json_decode($jsonData,true);
        //echo $result['data'][0][amount];
    
    ?>
