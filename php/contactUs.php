<!DOCTYPE html>
<?php
  session_start();
  if(isset($__SESSION['uname'])){
   $printName=$_SESSION['uname'];
  }  
?>
<html>
<head>
<title>Contact Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/contact_us.css">
	
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Pizzeria Fortuna</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="order_page.php">Order</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contactUs.php">Contact Us</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<?php if (isset($_SESSION['uname'])) { ?>
		
     <li class="nav-link active"> Hi <?=$_SESSION['uname']?></li>
    <li class="nav-item active">
       <form method='post' action='../php_components/logOutDataSource.php' >
	   <button type="submit"  id="btnlogout" name='Logout' value="Logout" class="btn btn-dark">Logout</button>
				  </form>	
    </li>       
	<?php } else { ?>
	  <li class="nav-item active">
          <a class="nav-link" href="login.php">Login</a>  
	  </li>
	  <li class="nav-item active">
      <a class="nav-link" href="signUp.php">Register</a>
      </li>
	  <?php } ?>
        </ul>
  </div>
  </nav>
</header>
<body>
	<div class="container">
	<br/>
	<?php

	if(isset($_POST["submit"]))
	{
	include('../php_components/contactDataSource.php');
	$printMsg=store_record_into_contactTable();
	if($printMsg==0){
		echo "<h3>Please re-enter your details</h3>";
	}
	  else{
		echo "<h3>Successfully submitted</h3>";

	}
		}?>
	
	<h1>Contact Us</h1>
	<hr>
	
	<div>
		
	<form class="contact-form" method="POST">
	
		<label for="name">Name</label> 
		
		
		<input type="text" id="fname" name="user_name" placeholder="Enter Name" width="48" height="148"><br/>
	
    <label for="email">Email</label>
    <input type="text" id="lname" name="user_mail"placeholder="Enter Email"><br/>

    <label for="phone">Phone Number</label>  
	<input type="text" id="phone" name="user_phone" placeholder="Enter Phone Number"><br/>   

    <label for="subject">Message</label>
    <textarea id="subject" name="user_message" placeholder="Enter Message" style="height:200px" cols='23'></textarea>
	<br/>
	
	<br/>
	
	<div class="contact-btn">
	<button type="submit" class="btn btn-dark" id="btncontact" name='submit' value="Submit" >Submit</button>
	</div>
	<br/>
	
  </form>
  
  
		</div>									
	</div>	
</body>
</html>