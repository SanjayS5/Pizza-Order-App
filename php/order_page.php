
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
    <title>Pizzeria Fortuna</title>
</head>
<body>
<?php include "../php_components/navbar.php";
    include "../php_components/check_ingredients.php" ?>
    <div class="container">
       <h1>Place Order</h1>
       <form action="test.php" method="POST">
           <div class="row">
                <div class="card col-sm" style="width: 18rem;">
                    <img src="../assets/img/pizzaSample.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <label for="pizzaRadioBtn">Vegan Mozzarella</label>
                        <input type="radio" name="pizza" id="pizzaRadioBtn" value="Vegan Mozzarella">
                        
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-sm" style="width: 18rem;">
                    <img src="../assets/img/pizzaSample2.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <label for="pizzaRadioBtn">Classic Vegan</label>
                        <input type="radio" name="pizza" id="pizzaRadioBtn" value="Classic Vegan">
                        
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-sm" style="width: 18rem;">
                    <img src="../assets/img/pizzaSample3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <label for="pizzaRadioBtn">Vegetarian Delight</label>
                        <input type="radio" name="pizza" id="pizzaRadioBtn" value="Vegetarian Delight">
                        
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-sm" style="width: 18rem;">
                    <img src="../assets/img/pizzaSample3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <label for="pizzaRadioBtn">Make Your Own!</label>
                        <input type="radio" name="pizza" id="pizzaRadioBtn" value="Custom Pizza">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            
            <input type="submit" name="submit" value="Place Order">
        </form>

    </div>
</body>
</html>
