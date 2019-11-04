
<!DOCTYPE html>
<?php
  session_start();
  if(isset($__SESSION['uname'])){
   $printName=$_SESSION['uname'];
  }
?>
<html>
<head>
<title>Welcome</title>
	<!-- Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<img src="../assets/img/pizzaLogo.jpg" alt="pizza" height="42" width="42">
  <a class="navbar-brand" href="#">Pizzeria Fortuna</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="php/order_page.php">Order</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="php/contactUs.php">Contact Us</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<?php if (isset($_SESSION['uname'])) { ?>
     <li class="nav-link active"> Hi <?=$_SESSION['uname']?></li>
    <li class="nav-item active">
       <form method='post' action='php_components/logOutDataSource.php' >
		      	<button type="submit"  id="btnlogout" name='Logout' value="Logout" class="btn place-order bg-dark">Logout</button>
		  </form>	
    </li>     
	<?php } else { ?>
	  <li class="nav-item active">
          <a class="nav-link" href="php/login.php">Login</a>  
	  </li>
	  <li class="nav-item active">
      <a class="nav-link" href="php/signUp.php">Register</a>
      </li>
	  <?php } ?>
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
			
		<div class="register">
        <center>
		<h5>Awesome!  <?=$_SESSION['uname']?></h5>
        <h5>You have been succesfully registered</h5>
       <h5> Click here to login</h5>
        <form method='post' action='login.php'>
        <button type="submit" class="btn btn-primary" id="btnLogin" name='Login' value="Loging">LogIn</button>
		</form>	
        </center>		
	    </div>
</body>
<footer class="footer mt-auto py-3 navbar-dark bg-dark" width=100%>
  <div class="container">
  <center><I>
    <p>Address: 5, Napoli Street, Wellington 6011</p>
    <span>Email: pizzeriafortuna@mail.com</span>
    <span>Phone: 1800-834-5683</span>
    <p>&copy 2019 Pizzeria Fortuna</p></I>
</center></I>
  </div>
</footer>
</html>
