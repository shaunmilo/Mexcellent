<?php
session_start();

// $_SESSION['cart'] = array();
// $_SESSION['cart'][] = $_REQUEST['productName'];
// $_SESSION['cart'][] = $_REQUEST['price'];
// $_SESSION['cart'][] = $_REQUEST['productImage'];

$_SESSION['product'] = $_REQUEST['productName'];
$_SESSION['price'] = $_REQUEST['price'];
$_SESSION['image'] = $_REQUEST['productImage'];

// $_SESSION['cart']=array();
// array_push($_SESSION['cart'], $_REQUEST['productName']);
// array_push($_SESSION['cart'], $_REQUEST['productImage']);
// array_push($_SESSION['cart'], $_REQUEST['price']);

header("Location: ../catalog.php");

?>