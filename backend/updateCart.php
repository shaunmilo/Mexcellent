<?php
session_start();

unset($_SESSION['image']);
unset($_SESSION['product']);
unset($_SESSION['price']);

header("Location: ../cart.php");

?>