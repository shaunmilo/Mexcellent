<?php
session_start();

$_SESSION['product'] = $_POST['productName'];
$_SESSION['price'] = $_POST['price'];
$_SESSION['image'] = $_POST['productImage'];

$product = $_SESSION['product'];
$price = $_SESSION['price'];
$image = $_SESSION['image'];

$_SESSION['cart']=array(); // Declaring session array

array_push($_SESSION['cart'], $product, $price, $image);

header("Location: ../catalog.php");

?>