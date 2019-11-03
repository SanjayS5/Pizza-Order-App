
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
	<!-- Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<?php include '../php_components/navbar.php'?>
</head>
<body style="background-color:black; color: white">
	<div class="container">
		<div class="jumbotron" style="color: white">
		
				<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Welcome To PizzaPlace</h1>
		</div>
		<div class="register">
			<form method="post" id="register" action="../php_components/logInDataSource.php" method="post" >
			<table id="tablesignup" border='0' width='550px' cellpadding='0' cellspacing='0' align='center'>
				<center>
					<tr>						
						<td><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Login <hr/></h2></td>		
					</tr>	
								
									
				</center>
					<tr>						
						<table border='0' width='350px' cellpadding='0' cellspacing='0' align='center'>
							<tr>						
								<td align='center'id="unamelable1"><strong>User Name</strong></td>
								<td><input type="text" id="unameText1" name="uname" placeholder="Enter User Name" required /></td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							
								<td align='center' id="pwordLable1"><strong>Password </strong></td>
								<td><input type="password" id="pwordTxt1" name="password" placeholder="Enter Password" required maxlength="6" /></td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							
							<tr> <td>&nbsp;</td> </tr>					
								<table border='0' cellpadding='0' cellspacing='0' width='450px' align='center'>
												
						<tr>
						<td align='center'><button type="submit" class="btn btn-primary" id="btnLogin" name='Login' value="Loging">LogIn</button>
											
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
