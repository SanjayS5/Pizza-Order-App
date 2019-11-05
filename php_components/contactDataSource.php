<?php
if(isset($_SESSION['uname']))
{
  $uname=$_SESSION['uname'];
}

// method to store the details into contact table and enable enable <spam> tag content
function store_record_into_contactTable()
{
  $dbhost = 'localhost';
  $dbuser = 'myuser';
  $dbpass = 'mypass';
  $db_name = 'pizzadb';
  $printFlag=0;
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
    if(! $conn ) {
         return $printFlag;
              die('Could not connect: ' . mysqli_error());              
        }
      else
    {      
      $name = $_POST['user_name'];	
      $email = $_POST['user_mail'];
      $phone = $_POST['user_phone'];
      $message=$_POST['user_message'];
      // insert to member table
      try{
        $query = $conn->prepare("INSERT INTO contactUs (name , email, phone,message) VALUES (?, ?, ?,?);");
        $query->bind_param("ssss", $name,$email, $phone, $message); 
        $query->execute();
          $result = $query->get_result();
          $printFlag++;
          return $printFlag;
           } catch(Exception $e){ 
          return $printFlag;
          echo "<script type='text/javascript'>alert('Enter details again');</script>";
          echo"<script>window.location='../php/contactUs.php'
              </script>";	
          die( "ERROR: Could not able to execute update the member table with custid. "  
                          . mysqli_error($conn)); 
          }  	 
  }  
}
?>