<?php
// session_start();
if(isset($_SESSION['uname']))
{
  $uname=$_SESSION['uname'];
}
//method to get the memberId using user name from method table 
function getMemberIdByUserName($memberName)
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
			$query = $conn->prepare("SELECT * FROM members WHERE username= ?;");
			$query->bind_param("s", $memberName);
			$query->execute();
			$result = $query->get_result();				
			$row = $result->fetch_assoc();
			//print_r($row);
			$memberID=$row['id'];					
		}
		return $memberID;	

}?>