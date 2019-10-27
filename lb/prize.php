<?php 
   session_start();
    if(isset($_POST['prize']) && isset($_SESSION['p_name']))
    {
        $email=$_SESSION['p_name'];
        $pri=$_POST['prize'];
        $conn=mysqli_connect("localhost","root","","launchdb");
        $qry1="SELECT `id`, `passenger_email`, `discount` FROM `discount` WHERE passenger_email='$email'";
        
        $res1 = $conn->query($qry1) or die('bad query inserting discount information1');
        $cnt=0;
        while($row = $res1->fetch_assoc()) {
			$cnt++;
			}
        
        if($cnt)
        {
            echo "Sorry, you already have a bonus";
        }
        else
        {
            $qry2 = "INSERT INTO `discount`(`id`, `passenger_email`, `discount`) VALUES ('','$email','$pri')";
            $res2 = $conn->query($qry2) or die('bad query inserting discount information2');
            if($pri==0) echo "Better Luck next time";
            else
            echo "Congratulations, you have won $pri TAKA";
        }
        
       
       
    }
    
?>