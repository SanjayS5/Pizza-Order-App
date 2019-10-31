<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Order</title>
</head>

<body>
    <form method="POST" action="purchase.php"  height="180" width="120">
	<div id="menuid" name="menuName" title="Pizza Menu" align="centre">
	   <h1> Pizza Menu </h1>
	   <hr/>
			<table>			
			<tr>
			<td><img src="Vegan_pizza.jpg" height="150" width="130"></td>			
			<td><img src="traditionalPizza.jpg" height="150" width="130"></td>			
			<td><img src="miniVeg_Pizza.jpg" height="150" width="130"></td>			
			<td><img src="GLUTEN_FREE.jpg" height="150" width="130"></td>
			</tr>
			<tr>
				<th>Vegan Pizza <input type="submit" name="add_to_cart1" style="magin-top:5px;" value="+"/></th>
				<th>Traditional Pizza<input type="submit" name="add_to_cart2" style="magin-top:5px;" value="+"/></th>
				<th>MiniVeg Pizza<input type="submit" name="add_to_cart3" style="magin-top:5px;" value="+"/></th>
				<th>Gluten Free Pizza<input type="submit" name="add_to_cart4" style="magin-top:5px;" value="+"/></th>
			</tr>
			<!--<tr>
				<td><input type="text" name="quantity1" class="form-control" value="1"/></td>	
				<td><input type="text" name="quantity2" class="form-control" value="1"/></td>	
				<td><input type="text" name="quantity3" class="form-control" value="1"/></td>	
				<td><input type="text" name="quantity4" class="form-control" value="1"/></td>					
			</tr>
			<tr>
				<td><input type="submit" name="add_to_cart1" style="magin-top:5px;" value="Add to cart"/></td>	
				<td><input type="submit" name="add_to_cart2" style="magin-top:5px;" value="Add to cart"/></td>	
				<td><input type="submit" name="add_to_cart3" style="magin-top:5px;" value="Add to cart"/></td>	
				<td><input type="submit" name="add_to_cart3" style="magin-top:5px;" value="Add to cart"/></td>					
			</tr>-->
			
			</table>
			<br>			
	</div>
  <br />
  <div id="base" name="menubase" title="Base" align="centre">   			 
			 <label style="color:black;"><h1> Base Menu </h1></label>
			 <hr/>			
			 <select name="item_name" type="text"  required >
				<option value="thincrust" name= "thinCrustName">Thin Crust</option>
				<option value="thickcrust" name= "thickCrustName">Thick Crust</option>
			 </select>
			
  </div>
  
  <div id="toppings" name="menutoppings" title="Toppings" align="centre">  
			<h1> Toppings Menu </h1>  
			<hr/>
			<table>			
			<tr>
			<td><img src="tomatoes.jpg" height="150" width="130"></td>			
			<td><img src="onion.jpg" height="150" width="130"></td>			
			<td><img src="spinach.jpg" height="150" width="130"></td>			
			<td><img src="capsicum.jpg" height="150" width="130"></td>
			<td><img src="basil.jpg" height="150" width="130"></td>			
			<td><img src="pineapple.jpg" height="150" width="130"></td>			
			<td><img src="chicken.jpg" height="150" width="130"></td>			
			<td><img src="sausage.jpg" height="150" width="130"></td>
			<td><img src="ham.jpg" height="150" width="130"></td>
			</tr>
			<tr>
				<th>Tomatoes<input type="submit" name="add_to_cart4" style="magin-top:5px;" value="+"/></th>
				<th>Onions<input type="submit" name="add_to_cart4" style="magin-top:5px;" value="+"/></th>
				<th>Spinach<input type="submit" name="add_to_cart4" style="magin-top:5px;" value="+"/></th>
				<th>Capsicum<input type="submit" name="add_to_cart4" style="magin-top:5px;" value="+"/></th>
				<th>Basil<input type="submit" name="add_to_cart4" style="magin-top:5px;" value="+"/></th>
				<th>Pineapple<input type="submit" name="add_to_cart4" style="magin-top:5px;" value="+"/></th>
				<th>Chicken<input type="submit" name="add_to_cart4" style="magin-top:5px;" value="+"/></th>
				<th>Sausage<input type="submit" name="add_to_cart4" style="magin-top:5px;" value="+"/></th>
				<th>Ham<input type="submit" name="add_to_cart4" style="magin-top:5px;" value="+"/></th>
			</tr>
			</table>		
	</div>
	<div>
		<button  onclick="document.getElementById('popup').style.display='block'"> Add PayMents </button>
		<tr> <td>&nbsp;</td> </tr>	
		<style>
			#popup{display:none; background:#efefef; border:1px solid black; width:100%; height:100%;}
		</style>		
		<div id="popup">			
			<!--<form id= "" action="SourceCode.php" method="post" >-->
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
								<td align='center'id="Name"><strong>Name</strong></td>
								<td><input type="text" id="nameText1" name="uname" placeholder="Enter User Name" required /></td>
								
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							<tr>
								<td align='center' id="emailLable1"><strong>Email </strong></td>
								<td><input type="email" id="emailText1" name="emailName" placeholder="Enter Email" required  /></td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							<tr>
								<td align='center' id="address"><strong>Address</strong></td>
								<td><input type="text" id="addressTxt1" name="addressName" placeholder="Enter Address" required /></td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>
							<tr>
								<td align='center' id="card"><strong>Card</strong></td>
								<td><input type="text" id="cardwordTxt1" name="cardwordName" placeholder="Enter Card" required /></td>
							</tr>
							<tr> <td>&nbsp;</td> </tr>					
								<table border='0' cellpadding='0' cellspacing='0' width='450px' align='center'>
								<tr> <td>&nbsp;</td> </tr>								
					
					<tr>
						<td align='center'><input type='submit' id="submitId" name='submitName' value="Register" ></td>
					</tr>
					<tr> <td>&nbsp;</td> </tr>	
					</table>
					</center>					
		</table>
	</table>
	</form>
	</div>
    
	</div>
</body>
</html>

