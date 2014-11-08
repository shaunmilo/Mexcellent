<?php

include("../includes/config.php");
$fname= $_REQUEST['firstName'];
$lname= $_REQUEST['lastName'];
$email= $_REQUEST['email'];
$password= $_REQUEST['password'];
$phoneNumber= $_REQUEST['mobilenum'];
$billingAddress= $_REQUEST['billingAddress'];
$billingCity= $_REQUEST['billingCity'];
$billingState= $_REQUEST['billingState'];
$billingZip= $_REQUEST['billingZip'];
$shippingAddress= $_REQUEST['shippingAddress'];
$shippingState= $_REQUEST['shippingState'];
$shippingZip= $_REQUEST['shippingZip'];
$cardNumber= $_REQUEST['cardNumber'];
$expiration= $_REQUEST['expiration'];
$securityCode= $_REQUEST['securityCode'];
$cardFirstname= $_REQUEST['cardFirstName'];
$cardLastname= $_REQUEST['cardLastName'];


$sql = "INSERT INTO Users (FirstName, LastName, Email, Password, PhoneNumber, BillingAddress, BillingCity, BillingState, BillingZip, ShippingAddress, ShippingCity, ShippingState, ShippingZip, CardNumber, Expiration, SecurityCode, CardFName, CardLName) VALUES ('', '$fname', '$lname', '$email', '$password', '$phoneNumber', '$billingAddress', '$billingCity', '$billingState', '$billingzip', '$shippingAddress', '$shippingState', '$shippingZip', '$cardNumber', '$expiration', '$securityCode', '$cardFirstName', '$cardLastName')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully. <a href='../registration.php'>Click here</a> to go back.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>