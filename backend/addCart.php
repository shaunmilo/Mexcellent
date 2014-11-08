<?php
session_start();

$_SESSION['product'] = $_REQUEST['productName'];
$_SESSION['price'] = $_REQUEST['price'];
$_SESSION['image'] = $_REQUEST['productImage'];

// array_push($_SESSION['cart'], $_REQUEST['productName']);
// array_push($_SESSION['cart'], $_REQUEST['productImage']);
// array_push($_SESSION['cart'], $_REQUEST['price']);

header("Location: ../catalog.php");

?>