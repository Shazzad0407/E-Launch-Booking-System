<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "launchdb";

    // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
     if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
		
			$email=$_POST['id'];
			$sql="SELECT * FROM passenger WHERE passenger_email='$email'";
			$result=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($result);
			
			if( $count >0){
				$row=mysqli_fetch_array($result);
				require 'vendor/autoload.php';
                
				$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
				try {
					//Server settings
					//$mail->SMTPDebug = 2;                                 // Enable verbose debug output
					$mail->isSMTP();                                      // Set mailer to use SMTP
					$mail->Host = 'smtp.gmail.com.';  // Specify main and backup SMTP servers
					$mail->SMTPAuth = true;                               // Enable SMTP authentication
					$mail->Username = 'nazmiatamannamouri@gmail.com';                 // SMTP username
					$mail->Password = '01511527676';                           // SMTP password
					$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
					$mail->Port = 587;                                    // TCP port to connect to

					//Recipients
					$mail->setFrom('nazmiatamannamouri@gmail.com', 'E-lauch Service');
					$mail->addAddress($email, $email);     // Add a recipient
				   

				   
					//Content
					$mail->isHTML(true);                                  // Set email format to HTML
					$mail->Subject = 'Recover password';
					$mail->Body    ="Hi $email your password is {$row['passenger_password']}";
					$mail->AltBody = "Hi $email your password is {$row['passenger_password']}";

					$mail->send();
					echo '</br></br></br></br></br><h4 style="text-align: center;">Your password  has been sent</h4>';
				} catch (Exception $e) {
					echo 'Mailer Error: ', $mail->ErrorInfo;
				}

			}	
							else{
								echo"<script>alert('Email not found')</script>";
							}
			
		
?>

<!--<html>
     <body>
	 
	     <form method="post">
		    Email:<input type="email" name="email">
			<br/>
			<input type="submit">
			
		</form>
		
		</body>
		
		</html>
		-->