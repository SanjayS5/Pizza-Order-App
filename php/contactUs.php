<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
	<!-- Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<div class="jumbotron">	
			<center>
				<h1>Contact Us</h1>
			</center>
		</div>
		<div>
		<center>
		<h4>Please enter the details</h4> &emsp;&emsp;
		
		<form action="contactDataSource.php" method="post">
			<table>
				
				<tr>
					<td><label for="mail">E-mail   	</label></td>
					<td><input type="email" id="mail" name="user_mail"></td>
				</tr>
				<tr>
					<td><label for="mail">Subject 	</label></td>
					<td><input type="text" id="subject" name="user_subject"></td>
				</tr>
				<tr>
					<td><label for="msg" >Message</label></td>
					<td><textarea id="msg" name="user_message" rows="5" cols="23"></textarea></td>
				</tr>
				</table>
				<table>
				<tr></tr>
				<tr>
					<td><center>
						<button type="submit" class="btn btn-primary" id="btncontact" name='submit' value="Submit">Submit</button>
					</center></td>
				</tr>
				</table>
				
		</form>
		</center>
		</div>									
	</div>	
</body>
</html>