<?php
    session_start();
    $loginCheck=(isset($_SESSION['email']))?$_SESSION['email']:''; 
    include("dbconnection.php");
    $scheduleDate= $_SESSION['booking_date'];
    
    
    //echo $date;
    if(isset($_POST['id'])){
        $launchId= $_POST['id'];
        $availableCabinQuery = "SELECT COUNT(cabin_id) as available, p.FIRSTNAME,cabin_cost, cabin_seat
                                FROM 
                                     (SELECT CONCAT(c.cabin_type, ' ', c.ac_non) AS FIRSTNAME, c.*
                                     FROM 
                                      (SELECT a.* 
                                        FROM (SELECT * FROM cabin c WHERE c.launch_id = '$launchId') AS a 
                                         LEFT JOIN 
                                        (SELECT cabin_id,cabin_type,ac_non,cabin_floor,cabin_cost,launch_id, cabin_seat 
                                         FROM booking  NATURAL JOIN booked  NATURAL JOIN cabin
                                         WHERE schedule_date='$scheduleDate' AND  launch_id = '$launchId'  AND status_of_Booking!='cancel') AS B
                                      ON a.cabin_id = B.cabin_id
                                      where B.cabin_id IS NULL) c
                                     ) as p

                                GROUP BY  FIRSTNAME
                                ";
        $runAvailableCabinQuery = mysqli_query($conn,$availableCabinQuery);  
        //for send lauch Id to javascript
            echo"<input type='hidden' id='lid' value='$launchId'/>";
}
        
   
?>
<div class="ticketAvailableForBooking">
    <div class="heading">
        <h3>Cabin-wise seat availability</h3>
    </div>
    <div class="cabinAvailability">
        <p class=note> Maximum of 2 cabins can be booked per ticket.<p>
                <div class="availableSeatTable">
                    <table style="width:100%">
                        <tr>
                            <th>Cabin Class</th>
                            <th>Seats</th>
                            <th>Cabin Fare</th>
                            <th>Availability</th>
                        </tr>

<?php
         $a=array();
        while($row = mysqli_fetch_array($runAvailableCabinQuery)){
            $available = $row['available'];
            $FIRSTNAME= $row['FIRSTNAME'];
            if($available>0){
                array_push($a,$FIRSTNAME);
            }
            
            $cabin_cost= $row['cabin_cost'];
            $cabin_seat= $row['cabin_seat'];
            echo'<tr>';
                echo'<td>'.$FIRSTNAME.'</td>';
                echo'<td>'.$cabin_seat.'</td>';
                echo'<td>'.$cabin_cost.'</td>';
                echo'<td>'.$available.'</td>';
            echo'</tr>';  
            $myId = str_replace(' ', '', $FIRSTNAME);
            echo"<input type='hidden' id='$myId' value='$available'/>";
            $myId1 = $myId."1";
            echo"<input type='hidden' id='$myId1' value='$cabin_cost'/>";
            
        }
    
?>




                    </table>
                </div>
    </div>
    <div class="selectingCabin">
        <div id="alertMsg"><h5></h5></div>
        <div class="choosingTicket">
            <!--<form method="post" action="">-->
                <div class="input-field p1">
                    <label for="cabinClass">cabin class<sup>*</sup></label>
                    <select class="form-control" id="Cclass" name="classType" value=''>
                        <option disable hidden value="">select cabin</option>
                        <?php
                            $i=0;
                            while($i< sizeof($a)){
                                echo "<option value='$a[$i]'>$a[$i]</option>";
                                $i++;
                                //echo $a[$i];
                            }
        //}
                        ?>
                    </select>
                </div>

                <div class="input-field p2">
                    <label for="cabinClass">Select Number of cabins<sup>*</sup></label>
                    <select class="form-control" id="cabinNo" name="cabinNo"  value=''>
                        <option disable hidden value="0">0</option>
                    </select>
                </div>
                <!-- <div class="input-field p3">
                    <label for="cabinClass">Choose boarding point<sup>*</sup></label>
                    <select class="form-control" id="boardingPoint" name="boardingPoint" required="required" value=''>
                        <option disable hidden value="">Boarding Point</option>
                    </select>
                </div>-->
                <div class="calculation">
                    <h5>&#2547; <span id="cost">0</span></h5>
                </div>
                <button type="" name="booking" class="continueToPayment btn" onclick="myFunctionContinue(this);">Continue</button>
            <!--</form>-->
        </div>
    </div>
</div>

<script>
    var price;
    $(document).ready(function() {
        $("#Cclass").change(function() {

            var val = $(this).val();
            val = val.replace(/\s/g, '')
            val = '#' + val;
            var available = $(val).val();
            var p = val + '1';
            price = $(p).val();
            console.log(available);
            if (available > 1) {
                $("#cabinNo").html("<option disable hidden value='0'>0</option><option value='1'>1</option><option value='2'> 2</option>");
            } else if (available == 1) {
                $("#cabinNo").html("<option disable hidden value='0'>0</option><option value='1'>1</option>");

            } else {
                $("#cabinNo").html("<option disable hidden value='0'>0</option>");
            }
            //set the price 0
            document.getElementById("cost").innerHTML = 0;

        });

    });
</script>

<script>
    $(document).ready(function() {

        $("#cabinNo").change(function() {
            var noOfcabin = $(this).val();
            console.log("noOfCabin:" + noOfcabin);
            console.log("price:" + price);
            var cabinBill = price * noOfcabin;
            document.getElementById("cost").innerHTML = cabinBill;
        });
    });
</script>


<script>
    function myFunctionContinue(cont) {
         var selector1 = document.getElementById('cabinNo');
        var cabinNo = selector1[selector1.selectedIndex].value;
        //console.log(cabinNo);
        
        var selector2 = document.getElementById('Cclass');
        var cabinClass = selector2[selector2.selectedIndex].value;
        var launchId = document.getElementById('lid').value;
        console.log(launchId);
        if(cabinNo>0){
            var loginCheck= '<?php echo $loginCheck;?>';
            var cabinBill = price * cabinNo;
            if(loginCheck==""){
                window.location.href = "login.php?cabinNo="+cabinNo+"&cabinClass="+cabinClass+"&price="+cabinBill+"&launchId="+launchId;
            }
            else{
                window.location.href = "payment.php?cabinNo="+cabinNo+"&cabinClass="+cabinClass+"&price="+cabinBill+"&launchId="+launchId;
         
            }
                
        }
        else if(cabinClass==0){
            document.getElementById("alertMsg").innerHTML = "<h5>*please Select a cabin class</h5>";
            document.getElementById("alertMsg").style.display = "block";
        }
        else if(cabinNo==0){
            document.getElementById("alertMsg").innerHTML = "<h5>*please Select Number of cabins</h5>";
            document.getElementById("alertMsg").style.display = "block";
            
        }

    };
</script>