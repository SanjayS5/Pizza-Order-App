<?php
// connect to dataBase
session_start();
$dbhost = 'localhost';
$dbuser = 'myuser';
$dbpass = 'mypass';
$db_name =  'pizzadb';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
      }
    else
	{
		//echo 'Connected successfully';
		$uname = $_POST['uesname'];	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address=$_POST['address'];
		$pword = $_POST['password'];
		$rpword = $_POST['rpassword'];
		// validating the username  
		$query = $conn->prepare("SELECT * FROM members WHERE username= ?;");
		$query->bind_param("s", $uname);
		$query->execute();
		$result=$query->get_result();
		if(mysqli_num_rows($result) > 0)
		{
			echo "<script type='text/javascript'>alert('already existed user - please re-enter details again');</script>";
			echo"<script>window.location='../php/signUp.php'</script>";
			die();//"Please enter different user name ");
		}
		// validating the email  
		$query = $conn->prepare("SELECT * FROM members WHERE email= ?;");
		$query->bind_param("s", $email);
		$query->execute();
		$result=$query->get_result();
		if(mysqli_num_rows($result) > 0)
		{
			echo "<script type='text/javascript'>alert('already existed email - please re-enter details again');</script>";
			echo"<script>window.location='../php/signUp.php'</script>";
			die();
			//echo "Email Exists";
			//die("Please enter different email ");
		}
		
		if($pword == $rpword)
		{
			// insert to member table
			$query = $conn->prepare("INSERT INTO members (username, email, password) VALUES (?, ?, ?);");
			$query->bind_param("sss", $uname,$email, $pword);  
			try{
				$query->execute();
				//echo "Record is inserted into member table-succefully";
				$result = $query->get_result();	
				
				// find memeberID 	
				$query= $conn->prepare("Select id from members;");
				try{
				$query->execute();
				$cresult = $query->get_result();
				$membercount=mysqli_num_rows($cresult);
				//echo "The total number of rows in this table is $membercount";
				}catch(Exception $e){
					die("Error at : no of records in the table". mysqli_error($conn)); 
				}				
				//insert record into customers.
				$custquery = $conn->prepare("INSERT INTO customers (name, address, memberId) VALUES (?, ?, ?);");
				$custquery->bind_param("sss", $name,$address, $membercount); 
				try{
					$custquery->execute();
					//echo "Record is inserted into customer table-succefully with memberID";					
				}catch(Exception $e){
					die( "Error while insert to customers table". mysqli_error($conn));
				}
				//find custID
				$query= $conn->prepare("Select id from customers;");
				try{
					$query->execute();
				$cresult = $query->get_result();
				$customerscount=mysqli_num_rows($cresult);
				}catch(Exception $e){ "The total number of rows in this table is $customerscount";
				}
				catch(Exception $e){
					die("Error at : no of records in the table". mysqli_error($conn)); 
				}		
				//update member table
				$sql = "UPDATE members SET customerId=$customerscount WHERE id=$membercount"; 
				try{
					mysqli_query($conn, $sql); 
					//echo "Record was updated successfully-the member table with customerId"; 
				} catch(Exception $e){ 
						die( "ERROR: Could not able to execute update the member table with custid. "  
                            . mysqli_error($conn)); 
						}  				
			}catch(Exception $e){ 
				die( "Error with insert to members table". mysqli_error($conn)); 
			}
		}else{

			echo "<script type='text/javascript'>alert('Mismatch of password- please re-enter deatils');</script>";
			echo"<script>window.location='../php/signUp.php'</script>";
			die();
			//die( "Mismatch with password- please enter deatils"); 
			 
		}
		//echo"Welcome to pizza";
			// set session 
			$_SESSION['uname']=$uname;	
			//echo"<script>window.location='../php/login.php'</script>";
			header("location:../php/welcome.php?uname=$uname");
	}
							
	
	?>