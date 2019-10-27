<?php
    session_start();
    include("dbconnection.php");
    $lId= $_POST['id'];
?>
<div class="row">
    <div class="col-7">
      
        <div class="launchSchedule">
            <h1><i class="fas fa-clock"></i> Schedule for next few days</h1>
            <table class="table table-striped table-fixed">
                <thead class="fixedHeader">
                    <tr class="bg-dark">
                        <th scope="col"  style="width: 103px;">Date</th>
                        <th scope="col"  style="width: 85px;">From</th>
                        <th scope="col"  style="width: 85px;">To</th>
                        <th scope="col"  style="width: 130px;">Depurture Time</th>
                    </tr>
                </thead>
                <tbody class="scrollContent">
                       <?php
                            $schedule = "SELECT schedule_date, launch_id, depTime, startName,desName
                                        FROM
                                        (SELECT*
                                        FROM
                                        (
                                        (SELECT schedule_date,launch_id,start_terminal_id,terminal.terminal_id, terminal.terminal_name as startName  FROM
                                            (SELECT * FROM launch_schedule WHERE `launch_id` = '$lId') t1
                                            NATURAL JOIN
                                            terminal
                                            WHERE terminal_id = start_terminal_id
                                         ) t1
                                         NATURAL JOIN
                                        (    
                                         SELECT  schedule_date as datewww,terminal.terminal_name as desName, destination_terminal_id  FROM
                                            (SELECT * FROM launch_schedule WHERE `launch_id` = '$lId') t3
                                            NATURAL JOIN
                                            terminal
                                            WHERE terminal_id = destination_terminal_id) t2
                                        )
                                        WHERE schedule_date = datewww
                                         )
                                        as r
                                        NATURAL JOIN launch 
                                        ORDER BY schedule_date";
                        $runSchedule = mysqli_query($conn,$schedule);  
                            while($row = mysqli_fetch_array($runSchedule)){
                                 
                                 $From= $row['startName'];
								 $date = $row['schedule_date'];
                                 $To= $row['desName'];
                                 $Departure_time= $row['depTime'];
                                echo"<tr>
                                    <td>$date</td>
                                    <td style='width: 85px;'>$From</td>
                                    <td style='width: 85px;'>$To</td>
                                    <td>$Departure_time</td>
                                </tr>";
                            }

                    
                        ?>

                </tbody>
            </table>
            
       
       
       
        </div>
        <!--end of launchSchedule-->
    </div>
    <?php
        $cabinNo="SELECT COUNT(cabin_id)  FROM cabin WHERE launch_id = '$lId' ";
        $runCabinNo = mysqli_query($conn,$cabinNo);  
        $row = mysqli_fetch_array($runCabinNo);
        $cabinNumber=$row['COUNT(cabin_id)']; 
    
        $allLaunches="SELECT* FROM launch WHERE launch_id = '$lId'";
        $runAllLaunches = mysqli_query($conn,$allLaunches);  
        while($row = mysqli_fetch_array($runAllLaunches)){
             $lname = $row['launch_name'];
             $capacity= $row['capacity'];
             $htp = $row['high_price'];
             $ltp = $row['low_price'];
             //$lname = $row['launch_id'];
        }
    ?>
    <div class="col-5">
        <div class="launchInfo">
            <h1><i class="fas fa-info-circle"></i> Launch Information</h1>
            <h6><b>Launch Name:</b> <?php echo $lname;?></h6>
            <h6><b>capacity:</b> <?php echo $capacity;?></h6>
            <h6><b>number of cabin:</b> <?php echo $cabinNumber;?></h6>
            <h6><b>heighest ticket Price:</b> <?php echo $htp;?></h6>
            <h6><b>lowest ticket Price:</b> <?php echo $ltp;?></h6>
            <h6><b>Launch route:</b> Dhaka-Barishal</h6>
        </div>
        <!--end of launch info-->
    </div>
</div>
<div class="row">
    <div class="col-12">
        



            <div class="gallery-container">

                <h1 class="text-center"><i class="fas fa-images"></i> Gallery</h1>
                <div class="tz-gallery">

                    <div class="row mb-3">
                       <?php
                            $lImgQuery= "SELECT * FROM launch_img WHERE launch_id='$lId'";
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
</div>
<!--end of row-->


<?php
    $typeOfCabin = "SELECT p.FIRSTNAME
          FROM 
              (SELECT CONCAT(c.cabin_type, ' ', c.ac_non) AS FIRSTNAME, c.*
               FROM  cabin c) as p
               WHERE launch_id ='MVSB-9'
          GROUP BY  FIRSTNAME";
    $runLTypeOfCabin = mysqli_query($conn,$typeOfCabin);  


?>

<div class="row listOfCabin">
    <div class="col-12">
        <h1><i class="fas fa-th-list"></i> list of Cabins</h1>
    </div>
    
    <?php
         while($row = mysqli_fetch_array($runLTypeOfCabin)){
            $cType = $row['FIRSTNAME'];
             echo'<div class="col">';
                echo"<h6>$cType</h6>";
                echo'<ul>';
                    $cabinName= "SELECT p.cabinName,p.cabin_id
                                 FROM 
                                (SELECT CONCAT(c.cabin_type, ' ', c.ac_non) AS FIRSTNAME, c.*
                                 FROM  cabin c) as p
                                WHERE launch_id ='$lId' AND FIRSTNAME='$cType'";
                     $runCabinName= mysqli_query($conn,$cabinName);  
                     while($row2 = mysqli_fetch_array($runCabinName)){
                            $cabinName = $row2['cabinName'];
                            $cabinId = $row2['cabin_id'];
                         echo"<li><a href='cabinDetails.php?ID=$cabinId'>$cabinName</a></li>";
                     }
                    
                    
                echo '</ul>
             </div>';
         }
    ?>
    
    
    
</div>
<!--end of row-->


<script>
    baguetteBox.run('.tz-gallery');
</script>
