<?php
session_start();
if(isset($_SESSION['uname']))
{
  $uname=$_SESSION['uname'];
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