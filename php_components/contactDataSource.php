<?php

session_start();

$dbhost = 'localhost';
$dbuser = 'myuser';
$dbpass = 'mypass';
$db_name = 'pizzadb';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ) {
    echo"not Connected";
            die('Could not connect: ' . mysqli_error());
      }
    else
	{
    echo"Connected";
    $name = $_POST['user_name'];	
		$email = $_POST['user_mail'];
		$phone = $_POST['user_phone'];
    $message=$_POST['user_message'];
    // insert to member table
    try{
			$query = $conn->prepare("INSERT INTO contactUs (name , email, phone,message, ) VALUES (?, ?, ?,?);");
      $query->bind_param("ssss", $name,$email, $phone, $message); 
      $query->execute();
      echo"inserted";
				//echo "Record is inserted into member table-succefully";
        $result = $query->get_result();
        print_r($result);
       	echo"<script>window.location='../php/contactUs.php'</script>";	
       
      } catch(Exception $e){ 
        echo"not inserted";
        echo "<script type='text/javascript'>alert('Enter details again');</script>";
				echo"<script>window.location='../php/contactUs.php'
						</script>";	
        die( "ERROR: Could not able to execute update the member table with custid. "  
                        . mysqli_error($conn)); 
        }  	
     
}


		
    


//require '../phpmailer/PHPMailerAutoload.php';
/*$mail = new PHPMailer(true); 
try {
    //Server settings
   // $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'dummypizzaplace@gmail.com';
    $mail->Password = 'Abcdef1!';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
 
    $mail->setFrom($_POST["user_mail"], 'Admin');
    $mail->addAddress('Dharanich1985@gmail.com', 'Recipient1');
    
    
    //Content
    $mail->isHTML(true); 
    $mail->Subject =  $_POST["user_phone"];
    $mail->Body    = $_POST["user_message"];
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

/*if(isset($_SESSION['uname']))
{
  $uname=$_SESSION['uname'];
}
  if (isset($_POST["submit"])) {	
    $to_email = "Dharanich1985@gmail.com";
    $from_email = $_POST["user_mail"];
    $subject = $_POST["user_subject"];	
    $body = $_POST["user_message"];
	$headers="From:".$from_email. "\r\n";
	print_r(mail($to_email, $subject, $body, $headers));die();
    if ( mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
    } else {
      echo("Email sending failed...");
    }
  }
*/
?>