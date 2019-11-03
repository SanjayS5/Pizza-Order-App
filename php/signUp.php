<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
	<!-- Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<?php include '../php_components/navbar.php'?>
</head>

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
						<td align='center'><button type="submit" class="btn btn-primary" id="btnSignup" name='REGISTER' value="Register">Submit</button>
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
