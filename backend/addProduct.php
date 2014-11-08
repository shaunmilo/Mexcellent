<?php 

include("../includes/config.php"); 

$image = $_REQUEST['productImage'];
$name = $_REQUEST['productName'];
$price = $_REQUEST['productPrice'];
$category = $_REQUEST['productCat'];
$description = $_REQUEST['productDesc'];


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["productImage"]["name"]);

$sql = "INSERT INTO products (productImage, productName, price, category, description)
VALUES ('$image', '$name', '$price', '$category', '$description')";

if (mysqli_query($con, $sql)) {
	move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file);
    echo "New record created successfully. <a href='../admin.php'>Click here</a> to go back.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>