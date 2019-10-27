<?php

?>
<div class="contentBody">
    <section class="departure animate-box" style="margin-top: 0px;">
        <!--<h1 style="margin: 50px;text-align: center;color: orange;">Daparture</h1>-->
        <div class="container avaiableLaunch">
            <h2 class="availableLaunchHeader">Available Launches</h2>
            <p class="routeNames">From
                <?php echo $start_terminal_name; ?> to
                <?php echo $destination_terminal_name; ?> (
                <?php $comTime= $fm->formatDate($booking_date); echo $comTime; ?>)</p>
            <div class="row">
                <div class="column">
                    <form method="post" action="">
                        <div class="btn-group dateSelectionButton" style="margin-bottom: 12px;margin-top: 28px;">
                            <button class="prev mybtn1 hvr-icon-wobble-horizontal" name="prevDay" type="submit"><span class="glyphicon glyphicon-chevron-left hvr-icon"></span> Prev day</button>
                            <button class="next mybtn1 hvr-icon-wobble-horizontal" name="nextDay" type="submit">Next day<span class="glyphicon glyphicon-chevron-right hvr-icon" style=" margin-left: 5px;"></span></button>
                            <button class="modify mybtn1 hvr-icon-wobble-horizontal" name="modifySearch" style="">Modify search <span class="glyphicon glyphicon-search hvr-icon" style=" margin-left: 12px;"> </span> </button>
                        </div>
                    </form>





                    <table class="table animate-box ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Launch/Ship</th>
                                <th scope="col">Dep.time</th>
                                <th scope="col">Arr.Time</th>
                                <th scope="col">Fare Range</th>
                            </tr>
                        </thead>
                        <tbody>



                            <?php
                                $i = 1;
                                while($row = $res->fetch_assoc()) {
                                    $launchId= $row["launch_id"];
                                    $temp = $row["launch_name"];
                                    $arr = $row["arrTime"];
                                    $dep = $row["depTime"];
                                    $low_price = $row["low_price"];
                                    $high_price = $row["high_price"];
                              ?>
                            <!-- <form action="" method="POST">-->
                            <tr>
                                <td>
                                    <?php echo $i; ?>
                                </td>
                                <td>
                                    <?php echo $temp; ?>
                                </td>
                                <td>
                                    <?php echo $dep; ?>
                                </td>
                                <td>
                                    <?php echo $arr; ?>
                                </td>
                                <td>BDT
                                    <?php echo $low_price;?>-
                                    <?php echo $high_price; ?>
                                </td>
                                <td>
                                    <a data-toggle="collapse" href="<?php echo '#collapse'.$i; ?>">
                                        <button id="<?php echo $i;?>" value="<?php echo $launchId;?>" class="selectSeat" onclick="myFunctionSelectedLaunch(this);">
                                            Select Seats
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="launchCabin" colspan="6" style="border: none;">
                                    <div id="<?php echo 'collapse'.$i; ?>" class="<?php echo $launchId.'robi';?> myCheck1"> </div>
                                </td>

                            </tr>


                            <!--</form>-->
                            <?php  $i++; } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
    <!-- departure section ends -->
</div>


<script>
    function myFunctionSelectedLaunch(selectedLaunch) {
        var idNo = selectedLaunch.id;
        var id = document.getElementById(idNo).value
        var contentId = '.' + id + 'robi';
        var flag = 0;
        

        //console.log(id);

        var n = document.getElementsByClassName("myCheck1").length;
        var p = idNo - 1;
        console.log('p: ' + p);
        for (var i = 0; i < n; i++) {
            if (i != p) {
                document.getElementsByClassName("myCheck1")[i].style.display = "none";
            } else if (i == p && document.getElementsByClassName("myCheck1")[i].style.display == "block") {
                document.getElementsByClassName("myCheck1")[i].style.display = "none";
                console.log('block->none');
            } else {
                document.getElementsByClassName("myCheck1")[i].style.display = "block";
            }
        }


        $.ajax({
            type: 'POST',
            url: 'launchCabin.php',
            data: {
                id: id
            },
            success: function(html) {
                $(contentId).html(html);
            }
        });


    };
</script>