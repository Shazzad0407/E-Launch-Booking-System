<?php
    if(isset($_POST['commentSubmit'])){
        if($loginCheck==""){
            echo'<script>alert("please Login For post comment")</script>';
        }else{
            $commentDescription= $_POST['commentDesc'];
            $insertComment= "INSERT INTO 
                            cabincomment (cabin_id, passenger_email, commentDescription, commnetTime) 
                            VALUES ('$cabinId', '$loginCheck', '$commentDescription', NOW());";
             $runInsertComment= mysqli_query($conn,$insertComment); 
        }
    }
    if(isset($_POST['replyComment'])){
        if($loginCheck==""){
            echo'<script>alert("please Login For post comment")</script>';
        }else{
            $commentRDescription= $_POST['replyCommentDes'];
            $cId= $_POST['cabinCommentId'];
            $insertComment= "INSERT INTO cabincommentreply
                              (cabinCommentId, passenger_email, comment, commnetTime) 
                              VALUES ('$cId','$loginCheck','$commentRDescription',NOW())";
             $runInsertComment= mysqli_query($conn,$insertComment); 
            
        }
    }

    $allOuterComment = "SELECT f1.*, f2.numberOflike
                        FROM 

                        (SELECT * FROM cabincomment NATURAL JOIN passenger WHERE cabin_id='$cabinId') AS f1 

                        LEFT JOIN 

                             (
                         SELECT COUNT(cabinCommentId)as numberOflike,cabinCommentId FROM
                            (SELECT t1.cabinCommentId  ,t1.passenger_email 
                         FROM(
                             (SELECT cabinCommentId,passenger_email FROM cabincomment NATURAL JOIN passenger WHERE cabin_id='$cabinId') AS t1
                             INNER JOIN cabincommentlike t2 ON t1.cabinCommentId = t2.cabinCommentId) 
                        )AS t4
                         GROUP BY t4.cabinCommentId
                             )as f2

                        ON f1.cabinCommentId=f2.cabinCommentId
                        ORDER BY commnetTime DESC";
?>
 

 
 <div id="comments-container">
  <section id="comment--new" class="comment">
    <div class="avatar comment__avatar">
        <span class="user">
          <img src="images/user.png" alt="Avatar" class="avatar__img">
        </span>
    </div>
    <form id="comment__form" method="post">
      <textarea id="comment__textarea" name="commentDesc" placeholder="Join the discussion……" cols="30" rows="4" maxlength="132" required></textarea>
      <button type="submit" name="commentSubmit" id="comment--send">Comment</button>
    </form>
  </section>
  <ul id="comments">
   <?php 
      $runAllOuterComment= mysqli_query($conn,$allOuterComment); 
      $r=0;
      $c=0;
       while($row = mysqli_fetch_array($runAllOuterComment)){
           $cabinCommentId = $row['cabinCommentId'];
           $passengerEmail = $row['passenger_email'];
           $commentDescription = $row['commentDescription'];
           $passangerFirstName= $row['passenger_first_name'];
           $passangerLastName= $row['passenger_last_name'];
           $commentTime = $row['commnetTime'];
           $numberOfLike = $row['numberOflike'];
           if($numberOfLike==null){
               $numberOfLike=0;
           }
           date_default_timezone_set('Asia/Dhaka');
           $currentTime= date('Y-m-d H:i:s');
               // echo $booking_date;
                //echo "........";
                  //  echo $currentTime;
                //echo "........";

                $date1=date_create($currentTime);
                $date2=date_create($commentTime);
           
           
                $diff=date_diff($date1,$date2);
                $h= $diff->format("%H");
                
                $timeDifference = $h*60 + $diff->format("%I");
                $sec= $timeDifference*60  + $diff->format("%s");
                if($sec<60){
                    $td= $sec." seconds";
                }
                else if($sec<3600){
                   $min=$timeDifference;
                    $td= $min." minutes";
                }
               else if($sec<86400){
                       $hr=floor($sec/3600);
                        $td= $hr." hour";
                    }
               else if($sec<604800){
                        $day=floor($sec/86400);
                        $td= $day." day";
                    }
               else{
                   $week =floor($sec/604800);
                    $td= $day." week";
               }
           
                $r++;
           //check if user log or not
           $l="like";
           if($loginCheck==""){
               $userLike="unlog_".$numberOfLike;
           }else{
                $ifUserLike = "SELECT* FROM cabincommentlike WHERE cabinCommentId = '$cabinCommentId' AND passenger_email = '$loginCheck'";
                $runIfUserLike= mysqli_query($conn,$ifUserLike);
                $rowcount=mysqli_num_rows($runIfUserLike);
                if($rowcount>0){
                    $userLike= "like_".$numberOfLike."_".$cabinCommentId."_".$loginCheck;
                    $l="unlike";
                }else{
                    $userLike= "nolike_".$numberOfLike."_".$cabinCommentId."_".$loginCheck;
                }
           }
               
           
           
           echo'<li class="comment">
      <div class="avatar">
        <a href="#">
          <img src="https://secure.gravatar.com/avatar/de764cb701641bd5ca3419fda6186edb?d=retro&s=55"
               alt="Ger photo avatar" class="avatar__img">
        </a>
      </div>
      <div class="comment__content">
        <header>
          <a href="#">';
            echo"<span class='user__link'>$passangerFirstName $passangerLastName</span>
          </a>
          <span class='comment__pub-date'> - posted $td ago</span> 
          
  

        </header>
        <p>
          $commentDescription
        </p>
        
        <footer class='comment__action--footer'>";
           echo"<button type='button' id='$r' class='comment__action' onclick='myFunctionLike(this);' value='$userLike'>($numberOfLike) $l</button>
                <button type='button' id='p.$cabinCommentId' value='$c' class='comment__action' onclick='myFunctionReply(this);'>reply</button>
         </footer>
        
            <form id='' class='form1' method='post' autocomplete='off'>
               <input type='text' class='reCommentBox' name='replyCommentDes' placeholder='Reply Here...' required>
               <input type='hidden' name='cabinCommentId' value='$cabinCommentId'>
               <button type='submit' id='submit' name='replyComment'>comment</button>
            </form>";
           $c++;
          
      echo'  
      </div>
      <ul class="comment__replies">';
           $replyComment= "SELECT * FROM cabincommentreply  NATURAL JOIN passenger WHERE cabinCommentId ='$cabinCommentId'  
                            ORDER BY commnetTime DESC";
           $runReplyComment= mysqli_query($conn,$replyComment); 
           while($row = mysqli_fetch_array($runReplyComment)){
              $cabinCommentReplyId = $row['cabinCommentReplyId'];
              $passenger_email = $row['passenger_email'];
              $comment = $row['comment'];
              $commnetReplyTime = $row['commnetTime'];
              $passangerFirstNameR= $row['passenger_first_name'];
               $passangerLastNameR= $row['passenger_last_name'];
               
               date_default_timezone_set('Asia/Dhaka');
           $currentTime= date('Y-m-d H:i:s');
               // echo $booking_date;
                //echo "........";
                  //  echo $currentTime;
                //echo "........";

                $date1=date_create($currentTime);
                $date2=date_create($commnetReplyTime);
           
           
                $diff=date_diff($date1,$date2);
                $h= $diff->format("%H");
                
                $timeDifference = $h*60 + $diff->format("%I");
                $sec= $timeDifference*60  + $diff->format("%s");
                if($sec<60){
                    $td= $sec." seconds";
                }
                else if($sec<3600){
                   $min=$timeDifference;
                    $td= $min." minutes";
                }
               else if($sec<86400){
                       $hr=floor($sec/3600);
                        $td= $hr." hour";
                    }
               else if($sec<604800){
                        $day=floor($sec/86400);
                        $td= $day." day";
                    }
               else{
                   $week =floor($sec/604800);
                    $td= $day." week";
               }
               
            echo'   <li class="comment">
                  <div class="avatar">
                    <a href="#">
                      <img src="https://www.phplivesupport.com/pics/icons/avatars/public/avatar_53.png"
                           alt="Eva photo avatar" class="avatar__img">
                    </a>
                  </div>
                  <div class="comment__content">
                    <header>
                      <a href="#">';
                 echo"    <span class='user__link'>$passangerFirstNameR $passangerLastNameR</span>
                      </a>
                   <span class='comment__pub-date'> - posted $td ago</span>

                    </header>
                    <p>
                      $comment
                    </p>
                  </div>
                </li>";
               
           }
           
           
           
           
        
      echo'</ul>
    </li>';
           
       }
      
    ?>
  </ul>
</div>

