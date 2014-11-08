<?php

include("includes/config.php");
$fname= $_REQUEST['firstname'];
$lname= $_REQUEST['lastname'];
$email= $_REQUEST['email'];
$password= $_REQUEST['password'];
$phoneNumber= $_REQUEST['mobilenum'];
$billingAddress= $_REQUEST['billingAddress'];
$billingCity= $_REQUEST['billingCity'];
$billingState= $_REQUEST['billingState'];
$billingZip= $_REQUEST['billingZip'];
$shippingAddress= $_REQUEST['shippingAddres'];
$shippingState= $_REQUEST['shippingState'];
$shippingZip= $_REQUEST['shippingZip'];
$cardNumber= $_REQUEST['cardNumber'];
$expiration= $_REQUEST['expiration'];
$securityCode= $_REQUEST['securityCode'];
$cardFirstname= $_REQUEST['cardFirstName'];
$cardLastname= $_REQUEST['cardLastName'];


$sql = "INSERT INTO Users (First Name, Last Name, Email, Password, Phone Number, Billing Address, Billing City, Billing State, Billing Zip, Shipping Address, Shipping City, Shipping State, Shipping Zip, Card Number, Expiration, Security Code, Card FName, Card LName)
VALUES ('$fname', '$lname', '$email', '$password', '$phoneNumber', '$billingAddress', '$billingCity', '$billingState', '$billingzip', '$shippingAddress', '$shippingState', '$shippingZip', '$cardNumber', '$expiration', '$securityCode', '$cardFirstName', '$cardLastName')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully. <a href='../registration.php'>Click here</a> to go back.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>