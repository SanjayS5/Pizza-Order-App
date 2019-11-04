<!DOCTYPE html>
<?session_start();
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
 	<!-- Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
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
       <form method='post' action='php_components/logOutDataSource.php' >
		      	<button type="submit"  id="btnlogout" name='Logout' value="Logout" class="btn place-order bg-dark">Logout</button>
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
	//$orderId=$_GET['orderId'];
	$orderId = 4;
?>
<div class="container">
		<div class="jumbotron" style="color: white" align="Center">
		
				<h1>Welcome To PizzaPlace</h1>
		</div>
	<center>
	<div>
		<?php
				include('../php_components/orderConfirmDataSource.php');
				$custId=getCustomerIdByOrderId($orderId);
				$custname=getNameByCustId($custId);
				$memberId=getMemberIdByCustId($custId);
				$email=getemailBymemberId($memberId);
				$itemList=getItemListByOrderId($orderId);
				
		?>
		<br/><br/>
		<I>
		<h1><u>Order Details</u></h1>	
		<h1> Thank You :</h1>
		<label> <?=$custname?></label>
		<h1>Your Order number is  <?=$orderId?></h1>
		<h1>Your OrderList</h1>
		<?php
				//include('../php_components/orderConfirmDataSource.php');
				printOrderList($itemList);
		?>		
		<h1>Check your email for order details</h1>
		<h1><?=$email?><h1>
		<h1>Your customer Id <?=$custId?></h1>
		<!--<h1>Your memberId <?=$memberId?></h1>-->
		</I>
	</div>	
	</center>	
</div>
</body>
</html>