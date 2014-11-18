<?php
session_start();

// $_SESSION['cart'] = array();

$_SESSION['product'] = $_POST['productName'];
$_SESSION['price'] = $_POST['price'];
$_SESSION['image'] = $_POST['productImage'];

// $_SESSION['cart']=array();
// array_push($_SESSION['cart'], $_REQUEST['productName']);
// array_push($_SESSION['cart'], $_REQUEST['productImage']);
// array_push($_SESSION['cart'], $_REQUEST['price']);

header("Location: ../catalog.php");

?>