<?php
session_start();
if(isset($_SESSION['uname']))
{
  $uname=$_SESSION['uname'];
}
  if (isset($_POST["submit"])) {	
    $to_email = "Dharanich1985@gmail.com";
    $from_email = $_POST["user_mail"];
    $subject = $_POST["user_subject"];	
    $body = $_POST["user_message"];
	$headers="From:".$from_email;
	
    if ( mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
    } else {
      echo("Email sending failed...");
    }
  }

?>