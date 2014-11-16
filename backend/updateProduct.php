<?php

require("../includes/config.php");

$id = $_POST['id'];
$product = $_POST['product'];
$price = $_POST['price'];
$category = $_POST['category'];

$updateQuery="UPDATE products SET productName='$product', price='$price', category='$category' WHERE productID='$id'";

$deleteQuery = "DELETE FROM products WHERE productID = '$id'";

$update = mysqli_query($con, $updateQuery);
$delete = mysqli_query($con, $deleteQuery);

if ($update && $_POST['update']) {
    echo "Product updated successfully. <a href='admin.php'>Click here</a> to go back.";
} else if (!$update) {
    echo "Error updating product: " . mysqli_error($con);
}

if ($delete && $_POST['delete']) {
	echo "Product has been removed. <a href='admin.php'>Click here</a> to go back.";
} else if (!$delete) {
    echo "Error removing product: " . mysqli_error($con);
}

?>