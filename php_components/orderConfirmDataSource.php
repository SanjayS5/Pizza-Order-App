<?php
session_start();
if(isset($_SESSION['uname']))
{
  $uname=$_SESSION['uname'];
}
// method returns last orderId
function getOrderIdFromDB()
{
	//database details
	$dbhost = 'localhost';
	$dbuser = 'myuser';
	$dbpass = 'mypass';
	$db_name =  'pizzadb';
	//establish connection
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
      }
    else
	{
		//find custID
		$query= $conn->prepare("Select id from orders;");
		try{
			$query->execute();
		$cresult = $query->get_result();
		$ordersID=mysqli_num_rows($cresult);
		}catch(Exception $e){ "The total number of rows in this table is $ordersID";
		}
	}	
	return $ordersID;		
}

//get order base from order table
function getOrderBase($orderId){

	//database details
	$dbhost = 'localhost';
	$dbuser = 'myuser';
	$dbpass = 'mypass';
	$db_name =  'pizzadb';
	//establish connection
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
      }
    else
	{
		//echo 'Connected successfully';				
			$query = $conn->prepare("SELECT * FROM orders WHERE id= ?;");
			$query->bind_param("s", $orderId);
			$query->execute();
			$result = $query->get_result();				
			$row = $result->fetch_assoc();
			//print_r($row);
			$base=$row['base'];					
		}
		return $base;	
	}	
		
	

// method returns status of the order from order table
function getOrderStatus($orderId){
	//database details
	$dbhost = 'localhost';
	$dbuser = 'myuser';
	$dbpass = 'mypass';
	$db_name =  'pizzadb';
	//establish connection
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
      }
    else
	{
		//echo 'Connected successfully';				
			$query = $conn->prepare("SELECT * FROM orders WHERE id= ?;");
			$query->bind_param("s", $orderId);
			$query->execute();
			$result = $query->get_result();				
			$row = $result->fetch_assoc();
			//print_r($row);
			$status=$row['status'];					
		}
		return $status;	
	}	
	

// method return cutomer's id from orders table using orderId
function getCustomerIdByOrderId($orderId)
{
	//database details
	$dbhost = 'localhost';
	$dbuser = 'myuser';
	$dbpass = 'mypass';
	$db_name =  'pizzadb';
	//establish connection
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
      }
    else
	{
		//echo 'Connected successfully';				
			$query = $conn->prepare("SELECT * FROM orders WHERE id= ?;");
			$query->bind_param("s", $orderId);
			$query->execute();
			$result = $query->get_result();				
			$row = $result->fetch_assoc();
			//print_r($row);
			$custId=$row['customerId'];
	}	
	return $custId;		
}
// get name using customer id
function getNameByCustId($custId)
{
	//database details
	$dbhost = 'localhost';
	$dbuser = 'myuser';
	$dbpass = 'mypass';
	$db_name =  'pizzadb';
	//establish connection
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
      }
    else
	{
		//echo 'Connected successfully';				
			$query = $conn->prepare("SELECT * FROM customers WHERE id= ?;");
			$query->bind_param("s", $custId);
			$query->execute();
			$result = $query->get_result();				
			$row = $result->fetch_assoc();
			//print_r($row);
			$name=$row['name'];
	}	
	return $name;		
}
// get memberId using customer id
function getMemberIdByCustId($custId)
{
	//database details
	$dbhost = 'localhost';
	$dbuser = 'myuser';
	$dbpass = 'mypass';
	$db_name =  'pizzadb';
	//establish connection
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
      }
    else
	{
		//echo 'Connected successfully';				
			$query = $conn->prepare("SELECT * FROM customers WHERE id= ?;");
			$query->bind_param("s", $custId);
			$query->execute();
			$result = $query->get_result();				
			$row = $result->fetch_assoc();
			//print_r($row);
			$memberId=$row['memberId'];
	}	
	return $memberId;		
}

// get memberId using customer id
function getemailBymemberId($memberId)
{
	//database details
	$dbhost = 'localhost';
	$dbuser = 'myuser';
	$dbpass = 'mypass';
	$db_name =  'pizzadb';
	//establish connection
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
      }
    else
	{
		//echo 'Connected successfully';				
			$query = $conn->prepare("SELECT * FROM members WHERE id= ?;");
			$query->bind_param("s", $memberId);
			$query->execute();
			$result = $query->get_result();				
			$row = $result->fetch_assoc();
			//print_r($row);
			$email=$row['email'];
	}	
	return $email;		
}
function getItemListByOrderId($orderId){
	//database details
	$dbhost = 'localhost';
	$dbuser = 'myuser';
	$dbpass = 'mypass';
	$db_name =  'pizzadb';
	//establish connection
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
      }
    else
	{
		//echo 'Connected successfully';				
			$query = $conn->prepare("SELECT * FROM orders WHERE id= ?;");
			$query->bind_param("s", $orderId);
			$query->execute();
			$result = $query->get_result();				
			$row = $result->fetch_assoc();
			//print_r($row);
			$itemListStr=$row['toppings'];
			if(strlen($itemListStr)!=0){
				//Vegan Mozzarella,+onions,+Mushrooms,+Black olives,
				$itemList= preg_split("/\,\+/",$itemListStr);
				//foreach($itemList as $x){
				//echo "$x<br>";
			//}			
		}
	}	
	return $itemList;		
}
function printOrderList($itemList)
{
		foreach($itemList as $x){
			echo "$x<br>";
		}			
}

?>