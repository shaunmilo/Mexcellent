<?php

include("../includes/config.php");

$myemail = $_REQUEST['email'];
$mypassword = $_REQUEST['password'];

$sql="SELECT * FROM Users WHERE Email='$myemail' AND Password='$mypassword'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

	if($count==1){
		session_unset(); 
		session_start();
		$_SESSION["currentUser"] = $myemail;
		header("Location: ../client.php");
		} else {
		session_unset();
		session_start();
		header("Location: ../registration.php");
	 }

if ($_POST['logout']) {
	session_destroy();
	header("Location: /~sh504336/dig4530c/Mexcellent/client.php");
}

 ?>