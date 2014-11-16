<?php

require("../includes/config.php");

$id = $_POST['id'];
$product = $_POST['product'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];

$updateQuery="UPDATE products SET productName='$product', description='$description', price='$price', category='$category' WHERE productID='$id'";

$deleteQuery = "DELETE FROM products WHERE productID = '$id'";

if ($_POST['update']) {
	mysqli_query($con, $updateQuery);
    echo "Product updated successfully. <a href='../admin.php'>Click here</a> to go back.";
}

if ($_POST['delete']) {
	mysqli_query($con, $deleteQuery);
	echo "Product has been removed. <a href='../admin.php'>Click here</a> to go back.";
}

?>