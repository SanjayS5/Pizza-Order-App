
  <?php
  if(isset($_POST['name'])) {
    $ingredient = $_POST['name'];
    echo "From capture" + $POST['name'];
  }
//   else
//   $ingredient = "";
//   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/order_style.css">
    <title>Pizzeria Fortuna</title>
</head>
<body>
<?php include "../php_components/navbar.php";
    include "../php_components/check_ingredients.php" ?>
    <div class="container">
       <h1>Place Order</h1>
       <form action="test.php" method="POST">
           <div class="container">
            <div>
                    <h2>Select Your Pizza</h2>
                </div>
            <div class="row">
                    <div class="card col-sm" style="width: 18rem;">
                        <div class="row premade">
                            <img src="../assets/img/pizzaSample.jpeg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <label for="pizzaRadioBtn">Vegan Mozzarella</label>
                            <input type="radio" name="pizza" id="pizzaRadioBtn" value="Vegan Mozzarella">

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-sm" style="width: 18rem;">
                        <div class="row premade">
                              <img src="../assets/img/pizzaSample2.jpeg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <label for="pizzaRadioBtn">Classic Vegan</label>
                            <input type="radio" name="pizza" id="pizzaRadioBtn" value="Classic Vegan">

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-sm" style="width: 18rem;">
                        <div class="row premade">
                          <img src="../assets/img/pizzaSample3.jpeg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <label for="pizzaRadioBtn">Vegetarian Delight</label>
                            <input type="radio" name="pizza" id="pizzaRadioBtn" value="Vegetarian Delight">

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-sm" style="width: 18rem;">
                        <div class="row premade">
                            <img src="../assets/img/pizzaSample3.jpeg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <label for="pizzaRadioBtn">Make Your Own!</label>
                            <input type="radio" name="pizza" id="pizzaRadioBtn" value="Custom Pizza">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div>
                    <h2>Select The Pizza Base</h2>
                </div>
                <div class="row justify-content-center">
                        <div class="card col-3" style="width: 18rem;">
                            <div class="row base">
                                <img src="../assets/img/pizzaSample3.jpeg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <label for="pizzaRadioBtn">Thin crust</label>
                                <input type="radio" name="base" id="pizzaRadioBtn" value="Thin crust">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card col-3" style="width: 18rem;">
                            <div class="row base">
                                <img src="../assets/img/pizzaSample3.jpeg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <label for="pizzaRadioBtn">Thick crust</label>
                                <input type="radio" name="base" id="pizzaRadioBtn" value="Thick crust">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div>
                    <h2>Select Toppings</h2>
                </div>
                <div class="row">
                        <div class="card col-sm" style="width: 18rem;  ">
                            <div class="row toppings">
                                <img src="../assets/img/tomato.png" class="card-img-top" alt="..." >
                            </div>
                            <div class="card-body">
                                <label for="toppingCheckbox">Tomatoes</label>
                                <input type="checkbox" name="topping" id="toppingCheckbox" value="tomatoes">

                            </div>
                        </div>
                        <div class="card col-sm" style="width: 18rem; ">
                            <div class="row toppings">
                                <img src="../assets/img/onion.png" class="card-img-top" alt="..." >
                            </div>
                            <div class="card-body">
                                <label for="toppingCheckbox">Onions</label>
                                <input type="checkbox" name="topping" id="toppingCheckbox" value="onions">

                            </div>
                        </div>
                        <div class="card col-sm" style="width: 18rem; ">
                            <div class="row toppings">
                                <img src="../assets/img/spinach.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <label for="toppingCheckbox">Spinach</label>
                                <input type="checkbox" name="topping" id="toppingCheckbox" value="spinach">
                            </div>
                        </div>
                        <div class="card col-sm" style="width: 18rem; ">
                            <div class="row toppings">
                                <img src="../assets/img/capsicum.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <label for="toppingCheckbox">Capsicum</label>
                                <input type="checkbox" name="topping" id="toppingCheckbox" value="capsicum">
                            </div>
                        </div>
                        <div class="card col-sm" style="width: 18rem; ">
                            <div class="row toppings">
                                <img src="../assets/img/basil.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <label for="toppingCheckbox">Basil</label>
                                <input type="checkbox" name="topping" id="toppingCheckbox" value="basil">
                            </div>
                        </div>
                        <div class="card col-sm" style="width: 18rem; ">
                            <div class="row toppings">
                                <img src="../assets/img/pineapple.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <label for="toppingCheckbox">Pineapple</label>
                                <input type="checkbox" name="topping" id="toppingCheckbox" value="pineapple">
                            </div>
                        </div>
                        <div class="card col-sm" style="width: 18rem; ">
                            <div class="row toppings">
                                  <img src="../assets/img/ham.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <label for="toppingCheckbox">Ham</label>
                                <input type="checkbox" name="topping" id="toppingCheckbox" value="ham">
                            </div>
                        </div>
                </div>
                <div class="row">
            </div>

            <input type="submit" name="submit" value="Place Order">
        </form>

    </div>
</body>
</html>
