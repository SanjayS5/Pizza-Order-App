<?php
//   if(isset($_POST['name'])) {
//     $ingredient = $_POST['name'];
//     echo "From capture" + $POST['name'];
//   }
//   else
//   $ingredient = "";
//   ?>

<?php
session_start();
if(isset($_SESSION['uname']))
{
  $printuname=$_SESSION['uname'];
  include('../php_components/findMemberIdDataSource.php');
  $memberId=getMemberIdByUserName($_SESSION['uname']);

 }?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/order_style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://kit.fontawesome.com/bdfac7b89e.js" crossorigin="anonymous"></script>
    <title>Pizzeria Fortuna</title>
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
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
   <li class="nav-link active" id="memberId"><?=$memberId?></li>
     <li class="nav-link active"> Hi <?=$_SESSION['uname']?></li>
    <li class="nav-item active">
       <form method='post' action='../php_components/logOutDataSource.php' >
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

</header>

<body>
    <?php include "../php_components/check_ingredients.php" ?>
    <div class="container select-top">
        <h1 class="placeorder-title">Place Order</h1>
        <div class="space"></div>
        <form id="form" action="../php_components/process_order.php" method="POST">

            <div>
                <p class="my-3"></p>
                <h2>Step 1: Select Your Pizza</h2>
                <p class="my-3"></p>
            </div>
            <div class="row" id="selectPizza">
                <div class="col-lg-3 col-md-6 col-sm-6  p-0">
                    <div class="card">
                        <div class="premade">
                            <img src="../assets/img/pizzaSample.jpeg" class="card-img-top" alt="..." height="300px" width="100%">
                        </div>
                        <div class="card-body">
                            <label for="pizzaRadioBtn">Vegan Mozzarella</label>
                            <input type="radio" name="pizza" id="pizzaRadioBtn" value="Vegan Mozzarella">

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="card">
                        <div class="premade">
                            <img src="../assets/img/pizzaSample2.jpeg" class="card-img-top" alt="..." height="300px" width="100%">
                        </div>
                        <div class="card-body">
                            <label for="pizzaRadioBtn">Classic Vegan</label>
                            <input type="radio" name="pizza" id="pizzaRadioBtn" value="Classic Vegan">

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="card">
                        <div class="premade">
                            <img src="../assets/img/pizzaSample3.jpeg" class="card-img-top" alt="..." height="300px" width="100%">
                        </div>
                        <div class="card-body">
                            <label for="pizzaRadioBtn">Vegetarian Delight</label>
                            <input type="radio" name="pizza" id="pizzaRadioBtn" value="Vegetarian Delight">

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="card">
                        <div class="premade">
                            <img src="../assets/img/makeYourOwn.jpg" class="card-img-top" alt="..." height="300px" width="100%">
                        </div>
                        <div class="card-body">
                            <label for="pizzaRadioBtn">Make Your Own!</label>
                            <input type="radio" name="pizza" id="pizzaRadioBtn" value="Custom Pizza">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <p class="my-3"></p>
                <h2>Step 2: Select Pizza Base</h2>
                <p class="my-3"></p>
            </div>
            <div class="row" id="selectBase">
                <div class="col-lg-3 col-md-4 col-sm-6 p-0">
                    <div class="card">
                        <div class="base">
                            <img src="../assets/img/thinCrust.jpg" class="card-img-top" alt="..." height="300px" width="100%">
                        </div>
                        <div class="card-body">
                            <label for="pizzaRadioBtn">Thin crust</label>
                            <input type="radio" name="base" id="baseRadioBtn" value="Thin crust">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0">
                    <div class="card">
                        <div class="base">
                            <img src="../assets/img/thickCrust.jpg" class="card-img-top" alt="..." height="300px" width="100%">
                        </div>
                        <div class="card-body">
                            <label for="pizzaRadioBtn">Thick crust</label>
                            <input type="radio" name="base" id="baseRadioBtn" value="Thick crust">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="container">
        <div>
            <p class="my-3"></p>
            <h2>Step 3: Select Toppings</h2>
            <p class="my-3"></p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 p-0">
                <div class="card">
                    <div class="toppings">
                        <img src="../assets/img/tomato.png" class="card-img-top" alt="..." height="200px" width="100%">
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="topping" name="topping" id="toppingCheckbox" value="tomatoes">
                        <label for="toppingCheckbox">Tomatoes</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0">
                <div class="card">
                    <div class="toppings">
                        <img src="../assets/img/onion.png" class="card-img-top" alt="..." height="200px" width="100%">
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="topping" name="topping" id="toppingCheckbox" value="onions">
                        <label for="toppingCheckbox">Onions</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0">
                <div class="card">
                    <div class="toppings">
                        <img src="../assets/img/spinach.png" class="card-img-top" alt="..." height="200px" width="100%">
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="topping" name="topping" id="toppingCheckbox" value="spinach">
                        <label for="toppingCheckbox">Spinach</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0">
                <div class="card">
                    <div class="toppings">
                        <img src="../assets/img/capsicum.png" class="card-img-top" alt="..." height="200px" width="100%">
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="topping" name="topping" id="toppingCheckbox" value="capsicum">
                        <label for="toppingCheckbox">Capsicum</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0">
                <div class="card">
                    <div class="toppings">
                        <img src="../assets/img/basil.png" class="card-img-top" alt="..." height="200px" width="100%">
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="topping" name="topping" id="toppingCheckbox" value="basil">
                        <label for="toppingCheckbox">Basil</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0">
                <div class="card">
                    <div class="toppings">
                        <img src="../assets/img/pineapple.png" class="card-img-top" alt="..." height="200px" width="100%">
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="topping" name="topping" id="toppingCheckbox" value="pineapple">
                        <label for="toppingCheckbox">Pineapple</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-0">
                <div class="card">
                    <div class="toppings">
                        <img src="../assets/img/ham.png" class="card-img-top" alt="..." height="200px" width="100%">
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="topping" name="topping" id="toppingCheckbox" value="ham">
                        <label for="toppingCheckbox">Ham</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row"> -->


        <!-- <input type="submit" name="submit" value="Place Order"> -->

        <!-- PAYMENTS -->
        <div class="order-btn">
            <button class="btn btn-dark" id="addOrderBtn">Add to Order</button>
            <button class="btn btn-dark" id="nextBtn"> Next </button>
        </div>
        <div id="display">
        <h3>Order Details</h3>
            <ul id="orderList"></ul>
            <div id="priceDisplay">
              <hr>
                <p id="priceText">Order total: $0</p>
            </div>
        </div>
        <div>

            <tr>
                <td>&nbsp;</td>
            </tr>
            <div id="payment">

                <br />
                <br />
                <br />
                <br />
                <!-- <table id="paymentTable" border='0' width='550px' cellpadding='0' cellspacing='0' align='center'> -->
                <table id="paymentTable" >
                    <center>
                        <tr>
                            <td align="center">
                                <h2>Add Payment Details
                                    <hr />
                                </h2>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </center>
                    <tr>
                        <center>
                            <table class="payment-form" border='0' width='250px' cellpadding='0' cellspacing='0' align='center'>
                                <tr>
                                    <td align='center' id="name_td">
                                        <strong>Name</strong>
                                    </td>
                                    <td>
                                        <input type="text" id="name" name="name" placeholder="Enter name"/>
                                    </td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align='center' id="email_td">
                                        <strong>Email </strong>
                                    </td>
                                    <td>
                                        <input type="email" id="email" name="email" placeholder="Enter email"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align='center' id="address_td">
                                        <strong>Address</strong>
                                    </td>
                                    <td>
                                        <input type="text" id="address" name="address" placeholder="Enter address"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align='center' id="card_td">
                                        <strong>Card</strong>
                                    </td>
                                    <td>
                                        <input type="text" id="card" name="card" pattern="[0-9.]+" placeholder="Enter payment card number"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <table class="payment-btn-wrap">
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <td align='center'>
                                            <button class="btn btn-dark payment-btn" id="submitOrderBtn">Confirm Payment</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>
                        </center>
                        </table>
                </table>
            </div>

        </div>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/orders.js"></script>
</body>

</html>
