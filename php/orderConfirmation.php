<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['uname']))
{
  $printuname=$_SESSION['uname'];
}?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Order Confirmation</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	 crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/orderConfirmation.css">

</head>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
	<a class="navbar-brand" href="../index.php">Pizzeria Fortuna</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
	 aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="../index.php">Home
					<span class="sr-only">(current)</span>
				</a>
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
			<li class="nav-link active"> Hi
				<?=$_SESSION['uname']?>
			</li>
			<li class="nav-item active">
				<form method='post' action='../php_components/logOutDataSource.php'>
					<button type="submit" id="btnlogout" name='Logout' value="Logout" class="btn btn-dark">Logout</button>
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

<body style="background-color:black; color: white">
	<?php
?>
	<div class="container">

		<center>
			<div>
				<?php
				include('../php_components/orderConfirmDataSource.php');
				$orderId=getOrderIdFromDB();
				$custId=getCustomerIdByOrderId($orderId);
				$custname=getNameByCustId($custId);
				$base=getOrderBase($orderId);
				$status=getOrderStatus($orderId);
				$itemList=getItemListByOrderId($orderId);
				
		?>
				<br/>
				<br/>
					<h1>
						Order Details
					</h1>
					<hr>
					<br/>
					<h2> Thanks, 
						<?=$custname?>!
					</h2>
					<br/>
					<centre>
						<table width="350px" border=1>
							<tr>
								<td align='center'>
									<strong>Order number </strong>
								</td>
								<td align='center'>
									<strong>
										<?=$orderId?>
									</strong>
								</td>
							</tr>
							<tr>
								<td align='center'>
									<strong>Customer Id </strong>
								</td>
								<td align='center'>
									<strong>
										<?=$custId?>
									</strong>
								</td>
							</tr>
							<tr>
								<td align='center'>
									<strong>Order Base </strong>
								</td>
								<td align='center'>
									<strong>
										<?=$base?>
									</strong>
								</td>
							</tr>
							<tr>
								<td align='center'>
									<strong>Order Toppings </strong>
								</td>
								<td align='center'>
									<strong>
										<?php
				 printOrderList($itemList);
				?>
									</strong>
								</td>
							</tr>
							<tr>
								<td align='center'>
									<strong>Order Status </strong>
								</td>
								<td align='center'>
									<strong>
										<?=$status?>
									</strong>
								</td>
							</tr>

						</table>
						<br/>
						<br/>
						<p>Check your mailbox! We've emailed your order details to you for your convenience.</p>
						<p>We hope you enjoy your meal!</p>
				</centre>
			</div>
		</center>

	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>