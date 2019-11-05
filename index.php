<!DOCTYPE html>
<?php
  session_start();
  if(isset($__SESSION['uname'])){
   $printName=$_SESSION['uname'];
  }
 ?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <title>Document</title>
</head>
<header>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
  <a class="navbar-brand" href="#">Pizzeria Fortuna</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="php/order_page.php">Order</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="php/contactUs.php">Contact Us</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
  <?php if (isset($_SESSION['uname'])) { ?>
   <!-- <li class="nav-link active"> your memberID:: <?=$memberId?></li>-->
     <li class="nav-link active"> Hi <?=$_SESSION['uname']?></li>
    <li class="nav-item active">
       <form method='post' action='php_components/logOutDataSource.php' >
		      	<button type="submit"  id="btnlogout" name='Logout' value="Logout" class="btn place-order bg-dark">Logout</button>
		  </form>
    </li>
	<?php } else { ?>
	  <li class="nav-item active">
          <a class="nav-link" href="php/login.php">Login</a>
	  </li>
	  <li class="nav-item active">
      <a class="nav-link" href="php/signUp.php">Register</a>
      </li>
	  <?php } ?>
        </ul>
  </div>
</nav>
</header>
<body>

  <div class="row main-top justify-content-center align-items-center">
    <div class="page-header">
      <h1>Pizzeria Fortuna</h1>
      <h4>You wanna pizza me?</h4>
      <form action="php/order_page.php" method="POST">
        <button type="submit" class="btn place-order">Place Order</button>
      </form>
    </div>
    <div>
    </div>
  </div>

<div class="container">
  <div class="our-menu">
    <h2>Our Menu</h2>

        <div class="image-menu">
            <img src="assets/img/ourMenu.jpg" alt="" >
        </div>
    <div class="describe-story">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptatem pariatur
        fuga corrupti alias deserunt, labore porro placeat provident optio. Ut fugiat magni sint
        vel quos ullam, laborum harum quas.Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Temporibus voluptatem pariatur fuga corrupti alias deserunt, labore porro placeat provident
        optio. Ut fugiat magni sint vel quos ullam, laborum harum quas.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptatem pariatur
        fuga corrupti alias deserunt, labore porro placeat provident optio. Ut fugiat magni sint
        vel quos ullam, laborum harum quas.Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </p>
    </div>
  </div>
</div>

<div class="row main-bottom justify-content-center align-items-center">
  <div class="container">
    <div class="our-story">
      <!-- <div class="page-header"> -->
      <!-- <h2>Our Story</h2> -->
      <div class="describe-story">
        <h2>Our Story</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptatem pariatur
          fuga corrupti alias deserunt, labore porro placeat provident optio. Ut fugiat magni sint
          vel quos ullam, laborum harum quas.Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Temporibus voluptatem pariatur fuga corrupti alias deserunt, labore porro placeat provident
          optio. Ut fugiat magni sint vel quos ullam, laborum harum quas.
        </p>
        <p class="describe-story-bottom">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptatem pariatur
          fuga corrupti alias deserunt, labore porro placeat provident optio. Ut fugiat magni sint
          vel quos ullam, laborum harum quas.Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Temporibus voluptatem pariatur fuga corrupti alias deserunt, labore porro placeat provident
          optio. Ut fugiat magni sint vel quos ullam, laborum harum quas.
        </p>
        <!-- <form class="our-story-form" action="php/order_page.php" method="POST">
          <button type="submit" class="btn place-order">Read More</button>
        </form> -->
      </div>
    <!-- <h1>Pizzeria Fortuna</h1>
    <form class="scale-up-center" action="php/order_page.php" method="POST">
      <button type="submit" class="btn place-order bg-dark">Place Order</button>
    </form> -->
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
