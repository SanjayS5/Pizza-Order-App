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
	<!-- Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/index.css">
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
<body style="background-color:black; color: white">
	<div class="container">
		<div class="jumbotron">
				<center>
				<h1>Welcome To PizzaPlace</h1>
				</center>
		</div>
		<div>
		<center>
		<h2>Please enter your details </h2> &emsp;&emsp;
		
		<form action="contactDataSource.php" method="post">
			<table class="contactTable" width:1000px>					
				<tr>
					<td ><label for="mail">E-mail   	</label></td>
					<td height="50" width="130"><input type="email" id="mail" name="user_mail" width=50%></td>
				</tr>
				<tr>
					<td><label for="mail">Subject 	</label></td>
					<td  height="50" width="130"><input type="text" id="subject" name="user_subject" ></td>
				</tr>
				<tr>
					<td><label for="msg" >Message</label></td>
					<td height="50" width="130"><textarea id="msg" name="user_message" rows="5" cols="23"></textarea></td>
				</tr>
				</table>
				<table>
				<tr></tr>
				<tr>
					<td><center>
						<button type="submit" class="btn btn-dark" id="btncontact" name='submit' value="Submit">Submit</button>
					</center></td>
				</tr>
				</table>
				
		</form>
		</center>
		</div>									
	</div>	
</body>
</html>