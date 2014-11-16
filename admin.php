<?php
session_start();
include("includes/config.php");
$result = mysqli_query($con, "SELECT * FROM products");
$row = mysqli_fetch_array($result);
?>

<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Admin- </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
	<link rel="stylesheet" href="css/gridiculous.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
</head>
<body class="admin">

    
<!--Header-->
    <?php include("includes/header.php"); ?>

<!--Content-->	
	<div id="site-content">            
 		<div id="cartPage" class="grid">
            <div id="cartTitle" class="c12">
            	<h3 class="subheadings">Admin</h3>               
            </div>
        	<div class="row">
                <div id="cartTable" class="c12">

                <h4>Create New Product</h4>
                <form method="post" action="backend/addProduct.php" class="addProduct">

                    Image: <input type="file" name="productImage" id="productImage"> 
                    Product Name: <input type="text" name="productName" />
                    Price: <input type="text" name="productPrice" /> 
                    Category:
                        <select name="productCat">
                            <option>Main Course</option>
                            <option>Appetizer</option>
                            <option>Beverage</option>
                        </select>
                        <br />

                    Product Description: <br /><textarea name="productDesc"></textarea>
                    <input type="submit" value="Add Product" name="submit" />

                </form>

                    <table>
                      <tr>
                        <th></th>
                        <th>Item</th>		
                        <th>Price</th>
                        <th>Category</th>
                        <th>Edit</th>
                      </tr>
                      <?php while($row = mysqli_fetch_array($result)) {
                        echo "
                      <tr>
                        <td><img src='img/".$row['productImage']."' alt='food'></td>
                        <td>".$row['productName']."</td>	
                        <td>".$row['price']."</td>
                        <td>".$row['category']."</td>
                        <td class='removeButton'>Remove</td>
                      </tr>";
                  }

                  ?>
                    </table>
        		</div>
			</div>                 
        </div>                     
      
<!-- Footer-->        
    <?php include("includes/footer.php"); ?>

    </div>   
</body>
</html>