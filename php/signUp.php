<!DOCTYPE html>
<?php
  session_start();
   
?>
<html>
<head>
<title>Sign Up</title>
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
		<div class="jumbotron">
				<center>
				<h1>Welcome To PizzaPlace</h1>
				</center>
		</div>
		<div class="register">
			<form method="post" id="register" action="../php_components/signUpDataSource.php" method="post" >
			<table id="tablesignup" border='0' width='450px' cellpadding='0' cellspacing='0' align='center'>
				<center>
					<tr>						
						<td><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;SignUp <hr/></h2></td>		
					</tr>	
			
				</center>
					<tr>						
						<table border='0' width='550px' cellpadding='0' cellspacing='0' align='center'>
							<tr>						
								<td align='center'id="unamelable1"><strong>User Name</strong></td>
								<td><input type="text" id="unameText1" name="uesname" placeholder="Enter User Name" required /></td>
								
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							<tr>
								<td align='center' id="name"><strong>Name </strong></td>
								<td><input type="text" id="nameText1" name="name" placeholder="Enter Name" required  /></td>
							</tr>
							
							<tr> <td>&nbsp;</td> </tr>
							<tr>
								<td align='center' id="emailLable1"><strong>Email </strong></td>
								<td><input type="email" id="emailText1" name="email" placeholder="Enter Email" required  /></td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							<tr>
								<td align='center' id="addrLable1"><strong>Address </strong></td>
								<td><input type="text" id="pwordTxt1" name="address" placeholder="Enter Address" required  /></td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							<tr>
								<td align='center' id="pwordLable1"><strong>Password </strong></td>
								<td><input type="password" id="pwordTxt1" name="password" placeholder="Enter Password" required maxlength="6" /></td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							<tr>
								<td align='center' id="rpwordLable1"><strong>Re-enter Password</strong></td>
								<td><input type="password" id="rpwordTxt1" name="rpassword" placeholder="Re-enter Password" required  maxlength="6"/></td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>					
								<table border='0' cellpadding='0' cellspacing='0' width='450px' align='center'>
								<tr> <td>&nbsp;</td> </tr>					
						<tr>
						<td align='center'><button type="submit" class="btn btn-dark" id="btnSignup" name='REGISTER' value="Register">Submit</button>
											<!--<input type='submit' id="btnSignup" name='REGISTER' value="Register" >--></td>
					</tr>
					<tr> <td>&nbsp;</td> </tr>
					<tr> <td>&nbsp;</td> </tr>
					</table>
					
		</table>
	</table>
	</form>					
	</div>
</body>
</html>
