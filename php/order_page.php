
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
       <form action="../php_components/process_order.php" method="POST">
           <div class="container">
            <div>
            <p class="my-3"></p>
                    <h2>Select Your Pizza</h2>
                    <p class="my-3"></p>
                </div>
            <div class="row">
                    <div class="col-lg-3  p-0">
                    <div class="card">
                        <div class="premade">
                            <img src="../assets/img/pizzaSample.jpeg" class="card-img-top" alt="..." height="300px" width="100%">
                        </div>
                        <div class="card-body">
                            <label for="pizzaRadioBtn">Vegan Mozzarella</label>
                            <input type="radio" name="pizza" id="pizzaRadioBtn" value="Vegan Mozzarella" required>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-3 p-0">
                    <div class="card" >
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
                    <div class="col-lg-3 p-0">
                    <div class="card" >
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

                    <div class="col-lg-3 p-0">
                    <div class="card" >
                        <div class="premade">
                            <img src="../assets/img/pizzaSample3.jpeg" class="card-img-top" alt="..." height="300px" width="100%">
                        </div>
                        <div class="card-body">
                            <label for="pizzaRadioBtn">Make Your Own!</label>
                            <input type="radio" name="pizza" id="pizzaRadioBtn" value="Custom Pizza">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div>
                    <p class="my-3"></p>
                    <h2>Select Pizza Base</h2>
                    <p class="my-3"></p>
                </div>
                <div class="row">
                <div class="col-lg-3 p-0">
                        <div class="card">
                            <div class="base">
                                <img src="../assets/img/pizzaSample3.jpeg" class="card-img-top" alt="..." height="300px" width="100%">
                            </div>
                            <div class="card-body">
                                <label for="pizzaRadioBtn">Thin crust</label>
                                <input type="radio" name="base" id="pizzaRadioBtn" value="Thin crust" required>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 p-0">
                        <div class="card">
                            <div class="base">
                                <img src="../assets/img/pizzaSample3.jpeg" class="card-img-top" alt="..." height="300px" width="100%">
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
            </div>
            <div class="container">
                <div>
                <p class="my-3"></p>
                    <h2>Select Toppings</h2>
                    <p class="my-3"></p>
                </div>
                <div class="row">
                <div class="col-lg-3 p-0">
                        <div class="card">
                            <div class="toppings">
                                <img src="../assets/img/tomato.png" class="card-img-top" alt="..." height="200px" width="100%">
                            </div>
                            <div class="card-body">
                                <input type="checkbox" name="topping[tomatoes]" id="toppingCheckbox" value="30">
                                <label for="toppingCheckbox">Tomatoes</label>    
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 p-0">
                        <div class="card">
                            <div class="toppings">
                                <img src="../assets/img/onion.png" class="card-img-top" alt="..." height="200px" width="100%">
                            </div>
                            <div class="card-body">
                                <input type="checkbox" name="topping[onions]" id="toppingCheckbox" value="20">
                                <label for="toppingCheckbox">Onions</label>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 p-0">
                        <div class="card">
                            <div class="toppings">
                                <img src="../assets/img/spinach.png" class="card-img-top" alt="..." height="200px" width="100%">
                            </div>
                            <div class="card-body">
                                <input type="checkbox" name="topping[]" id="toppingCheckbox" value="spinach"> 
                                <label for="toppingCheckbox">Spinach</label> 
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 p-0">
                        <div class="card">
                            <div class="toppings">
                                <img src="../assets/img/capsicum.png" class="card-img-top" alt="..." height="200px" width="100%">
                            </div>
                            <div class="card-body">
                                <input type="checkbox" name="topping[]" id="toppingCheckbox" value="capsicum">
                                <label for="toppingCheckbox">Capsicum</label>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 p-0">
                        <div class="card">
                            <div class="toppings">
                                <img src="../assets/img/basil.png" class="card-img-top" alt="..." height="200px" width="100%">
                            </div>
                            <div class="card-body">
                                <input type="checkbox" name="topping[]" id="toppingCheckbox" value="basil">
                                <label for="toppingCheckbox">Basil</label>     
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 p-0">
                        <div class="card">
                            <div class="toppings">
                                <img src="../assets/img/pineapple.png" class="card-img-top" alt="..." height="200px" width="100%">
                            </div>
                            <div class="card-body">
                                <input type="checkbox" name="topping[]" id="toppingCheckbox" value="pineapple"> 
                                <label for="toppingCheckbox">Pineapple</label>                              
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 p-0">
                        <div class="card">
                            <div class="toppings">
                                  <img src="../assets/img/ham.png" class="card-img-top" alt="..." height="200px" width="100%">
                            </div>
                            <div class="card-body">
                                <input type="checkbox" name="topping[]" id="toppingCheckbox" value="ham">    
                                <label for="toppingCheckbox">Ham</label>  
                            </div>
                        </div>
                        </div>
                </div>
                <!-- <div class="row">
            </div> -->

            <!-- <input type="submit" name="submit" value="Place Order"> -->

            <!-- PAYMENTS -->

            <div>
		<button class="btn btn-dark" onclick="document.getElementById('payment').style.display='block'"> Add Payment </button>
		<tr> <td>&nbsp;</td> </tr>	
		<style>
			#payment{display:none; background:#efefef; border:1px solid black; width:100%; height:100%;}
		</style>		
		<div id="payment">			

			<br /> <br /><br /><br /> 			
			<table id="paymentTable" border='0' width='550px' cellpadding='0' cellspacing='0' align='center'>
				<center>
					<tr>
						<td align="center"><h2>Add Payment Details<hr /></h2></td>						
					</tr>			
					<tr> <td>&nbsp;</td> </tr>					
				</center>
					<tr>
					<center>	
						<table border='0' width='250px' cellpadding='0' cellspacing='0' align='center'>
							<tr>						
								<td align='center'id="name_td"><strong>Name</strong></td>
								<td><input type="text" id="name" name="name" placeholder="Enter name" required /></td>
								
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							<tr>
								<td align='center' id="email_td"><strong>Email </strong></td>
								<td><input type="email" id="email" name="emailName" placeholder="Enter email" required  /></td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							<tr>
								<td align='center' id="address_td"><strong>Address</strong></td>
								<td><input type="text" id="address" name="addressName" placeholder="Enter address" required /></td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							<tr>
								<td align='center' id="card_td"><strong>Card</strong></td>
								<td><input type="text" id="card" name="card" pattern="[0-9.]+" placeholder="Enter payment card number" required /></td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>					
								<table border='0' cellpadding='0' cellspacing='0' width='450px' align='center'>
                                <tr> <td>&nbsp;</td> </tr>
                                
                                
					
					<tr>
						<td align='center'><input type='submit' name='submit' value="Place Order" ></td>
					</tr>
					<tr> <td>&nbsp;</td> </tr>	
					</table>
					</center>					
		</table>
	</table>
	</div>
    
	</div>


        </form>

    </div>
</body>
</html>
