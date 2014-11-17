<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "Admin" && $password == "high^five") {
	header("Location: ../admin.php");
} else if ($username !== "Admin" && $password !== "high^five") {
	echo "Incorrect login. Please go back and try again.";
}

?>