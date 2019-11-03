
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
	<?php include '../php_components/navbar.php'?>

</head>
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
