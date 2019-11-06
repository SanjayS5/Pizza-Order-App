<!DOCTYPE html>
<!-- <?php
  session_start();
  if(isset($__SESSION['uname'])){
   $printName=$_SESSION['uname'];
  }
?> -->
<html>

<head>
  <title>Welcome</title>
  <!-- Style-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/welcome.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="../index.php">Pizzeria Fortuna</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

    </div>
  </nav>
</header>

<body >
  <?php
	$userName=$_GET['uname'];
	//$userName = 'dharani';
	?>

  <div class="container">
    <div class="register">
      <!-- <center> -->
      <h5>Awesome,  <?=	$userName?>!</h5>
        <!-- <h5>Awesome!  <?=$_SESSION['uname']?></h5> -->
        <h1>Thank you for registering</h1>
        <hr>
        <h4>You have been succesfully registered</h4>
        <p class="registered-desc">Your new account details have been sent to the email address that you used during the registration process.</p>
        <form class="registered-btn" method='post' action='login.php'>
          <h5> Click here to login</h5>
          <button type="submit" class="btn btn-dark" id="btnLogin" name='Login' value="Loging">LogIn</button>
        </form>
      <!-- </center> -->
    </div>
  </div>
</body>
<!-- <footer class="footer mt-auto py-3 navbar-dark bg-dark" width=100%>

    <center><I>
        <p>Address: 5, Napoli Street, Wellington 6011</p>
        <span>Email: pizzeriafortuna@mail.com</span>
        <span>Phone: 1800-834-5683</span>
        <p>&copy 2019 Pizzeria Fortuna</p>
      </I>
    </center></I>

</footer> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
