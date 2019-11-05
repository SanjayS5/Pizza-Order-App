<?php
// this is need as long as it goes in the page
session_start();
if(isset($_SESSION['uname'])){ // if session is set then distroy the session	
	// display the content
	unset($_SESSION);
	session_destroy();
	session_write_close();
	header("location:../index.php");// change to index.php
	//exit; // or use die;	
}
//else{
	// check need to address it during testing 
//}

