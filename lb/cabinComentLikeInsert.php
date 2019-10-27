<?php
    session_start();
    include("dbconnection.php");
    $cabinCommentId= $_POST['cabinCommentId'];
    $user= $_POST['user'];
    $mode= $_POST['mode'];
    if($mode=='insert'){
        $insertLike="INSERT INTO cabincommentlike(passenger_email, cabinCommentId) VALUES ('$user','$cabinCommentId')";
    }else{
       $insertLike=  "DELETE FROM cabincommentlike WHERE cabinCommentId='$cabinCommentId' AND passenger_email='$user'";
    }
    $runInsertLike= mysqli_query($conn,$insertLike);

?>