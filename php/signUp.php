<!DOCTYPE html>
<?php
 // session_start();
   
?>
<html>
<head>
<title>Register</title>
	<!-- Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/contact_us.css">
	
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<<<<<<< HEAD
=======
<!-- <img src="../assets/img/pizzaLogo.jpg" alt="pizza" height="42" width="42"> -->
>>>>>>> fixed with session and getpost
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
      <li class="nav-item active">
          <a class="nav-link" href="login.php">Login</a>  
	  </li>
	</ul>
  </div>
</nav>
</header>
<body  style="background-color:black; color: white">
	<div class="container">		
		<div class="register">
		<center>		<h2>Register </h2>	
		<hr/>	
		</center>
		<form class="contact-form" action="../php_components/signUpDataSource.php" method="Post">
			<label for="name">User Name</label> 	
			<input type="text" id="unameText1" name="uesname" placeholder="Enter User Name" required /><br/>
			
			<label for="name">Name</label> 	
			<input type="text" id="nameText1" name="name" placeholder="Enter Name" required  /><br/>
			
			<label for="email">Email</label>
			<input type="email" id="emailText1" name="email" placeholder="Enter Email" required  /><br/>
			
			<label for="name">Address</label> 	
			<input type="text" id="addtext" name="address" placeholder="Enter Address" required  /><br/>

			<label for="email">Password</label>
			<input type="password" id="pwordTxt1" name="password" placeholder="Enter Password" required maxlength="6" />
			<br/>
			<label for="name">Re-enter Password</label> 	
			<input type="password" id="rpwordTxt1" name="rpassword" placeholder="Re-enter Password" required  maxlength="6"/>
			<br/>
			
			
			<br/><br/>

		<div class="contact-btn">
		<button type="submit" class="btn btn-dark" id="btnSignup" name='submit' value="Register">Submit</button>	
		</div>
		<br/>

		</form>
			
	</div>				
	</div>
</body>
<footer class="footer mt-auto py-3 navbar-dark bg-dark" width=100%>
  <div class="container">
  <center><I>
    <p>Address: 5, Napoli Street, Wellington 6011</p>
    <span>Email: pizzeriafortuna@mail.com</span>
    <span>Phone: 1800-834-5683</span>
    <p>&copy 2019 Pizzeria Fortuna</p></I>
</center>
  </div>
</footer>
</html>
