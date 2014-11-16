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
		?>
		<meta http-equiv="refresh" content="0;url=<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]"; ?>/Mexcellent/client.php">
	<?php 
		} else {
		session_unset();
		session_start();
		$_SESSION["message"] = 'Please create an account!';
		?>
		<meta http-equiv="refresh" content="0;url=<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]"; ?>/Mexcellent/registration.php">
	<?php } ?>