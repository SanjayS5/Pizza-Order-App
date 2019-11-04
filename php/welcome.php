
<!DOCTYPE html>
<?php
  session_start();
 $_SESSION['uname'];
?>
<html>
<head>
<title>Welcome</title>
	<!-- Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
    
  </div>
</nav>
</header>
<body style="background-color:black; color: white">
<?php/*
	$userName=$_GET['uname'];
	//$userName = 'dharani';*/
	?> 
	
	<div class="container">
			<div class="jumbotron">
			
			<center>
					<h1>Welcome To PizzaPlace</h1>
			</center>
			</div>
		<div class="register">
        <center>
		<h1>Welcome <?=$_SESSION['uname']?></h1>
        <h5>Our customers are valuable assets for us. Thanks for Signup. We will mail you our deals and offers as soon as possible</h5>
       <h3> Please log in to place order</h3>
        <form method='post' action='login.php'>
        <button type="submit" class="btn btn-primary" id="btnLogin" name='Login' value="Loging">LogIn</button>
		</form>	
        </center>		
	    </div>
</body>
</html>
