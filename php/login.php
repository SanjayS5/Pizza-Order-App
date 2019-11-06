
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
	<!-- Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	  <link rel="stylesheet" type="text/css" href="../css/contact_us.css">
	
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">Pizzeria Fortuna</a>
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
      <a class="nav-link" href="signUp.php">Register</a>
      </li>
	  <?php } ?>
        </ul>
  </div>
</nav>

</header>
<body style="background-color:black; color: white">
	<div class="container">		
		<div class="register">
		<br/>
			<h1>Login</h1>			
			
			<form class="contact-form" action="../php_components/logInDataSource.php" method="Post">
	
		<label for="name">Username</label> 
		
		

		<input type="text" id="unameText1" name="uname" placeholder="Enter Username" required /><br/>
    <label for="email">Password</label>
	<input type="password" id="pwordTxt1" name="password" placeholder="Enter Password" required maxlength="6" /><br/>

	<br/>
	<br/>
	
	<div class="contact-btn">
	<button type="submit" class="btn btn-dark" id="btnSignup" name='Login' value="Loging">LogIn</button>
</div>
	<br/>
	
  </form>
	</div>					
</div>
</body>
</html>
