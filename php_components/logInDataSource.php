<?php
// connect to dataBase
session_start();                                                //to maintain session
$dbhost = 'localhost';
$dbuser = 'myuser';
$dbpass = 'mypass';
$db_name =  'pizzadb';
$flag=0;

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
	if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
      }
    else
	{
		$uname = $_POST['uname'];	
		$pword = $_POST['password'];
		try {
			$query = $conn->prepare("SELECT * FROM members WHERE username= ?;");
			$query->bind_param("s", $uname);
			$query->execute();
			$result = $query->get_result();				
			foreach ($result as $row) {
			if($row['password']== $pword)
			{
				$flag++;
				// set session 
				$_SESSION['uname']=$uname;							//to maintain session
				//$myURL="offers.php?emailLogin=$emailLogin&userName=$userName";					
				header("location:../index.php");//?uname=$uname");				
			}
			else
			{
				echo "<script type='text/javascript'>alert('username or password incorrect!');</script>";
				echo"<script>window.location='../php/login.php'
						</script>";				
			}
			if($flag==0)
			{
				echo "<script type='text/javascript'>alert('Enter correct details');</script>";
				echo"<script>window.location='../php/login.php'
						</script>";	
			}
			}
		}
		catch(Exception $e){
			echo"000: Server down";
		}		
	}
	?>
	