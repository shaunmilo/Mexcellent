<?php 
session_start();
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Cart- Stephanie Garay</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
	<link rel="stylesheet" href="css/gridiculous.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<!--Header-->
    <?php include("includes/header.php"); ?>

<!--Content-->	
    <div id="site-content">         
 		<div id="cartPage" class="grid">
            <div id="cartTitle" class="c12">
            	<h3 class="subheadings">SHOPPING CART</h3>               
            </div>
        	<div class="row">
        		<div id="cartTable" class="c8">
        			<table>
                          <tr>
                            <th></th>
                            <th>Item</th>		
                            <th>Price</th>
                            <th>Edit</th>
                          </tr>
                          <?php
                            echo "<tr>
                            <td><img src='img/".$_SESSION["image"]."' alt=''></td>
                            <td>".$_SESSION["product"]."</td>        
                            <td>".$_SESSION["price"]."</td>
                            <td>Remove</td>
                          </tr>";
                          ?>
                     </table>
        		</div>
        		<div id="pickupCheckout" class="c4">
        			<div id="pickup">
            			<p>Pickup Time & Date</p>
                        <select id="time">
                          <option value="morning">11:00AM-3:00PM</option>
                          <option value="evening">3:00PM-5:00</option>
                          <option value="afternoon">5:00PM-8:00PM</option>
                        </select><br/><br/>
                        <input type="date" name="date">
                    </div> 
                    <div id="checkout">
                        <h4>CHECKOUT TOTAL:</h4>
                        <p id="totalAmount"><?php echo $_SESSION["price"]; ?></p>
                        <!-- <a href="signin.php" id="buyButton" >CHECKOUT</a> -->

                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="email@email.com">
                            <input type="hidden" name="item_name" value="Item Name1">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="amount" value="0.00">
                            <input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
                        </form>

                    </div> 
        		</div>        
        	</div>
        	<div id="recommmendedProducts">
        		<h3 class="c12">Recently Viewed</h3><hr/>
       			<div id="productSection" class="row">
            		<div id="productImages" >
             			<div class="c2">
                        	<div class="productThumb">	
                                <img src="img/nachos.jpg" alt="nachos">
                                <a href="nachosProduct.php"><h3 class="productTitle">Cheesy Nachos</h3></a>
                                <p>$8.95</p>
                            </div>
                		</div>
                        <div class="c2">
                        	<div class="productThumb">	
                                <img src="img/quesadilla.jpg" alt="nachos">
                                <a href="quesadillaProduct.php"><h3 class="productTitle">Quesadilla</h3></a>
                                <p>$8.95</p>
                            </div>
                        </div>                
                        <div class="c2">
                        	<div class="productThumb">	
                                <img src="img/taquitos.jpg" alt="nachos">
                                <a href="taquitosProduct.php"><h3 class="productTitle">Taquitos</h3></a>
                                <p>$8.95</p>
                            </div>
                        </div>
                        <div class="c2">	
                        	<div class="productThumb">
                                <img src="img/locosTacos.jpg" alt="taco">
                                <a href="locostacosProduct.php"><h3 class="productTitle">Locos Tacos</h3></a>
                                <p>$7.95</p>
                            </div>
                        </div>
                        <div class="c2">	
                        	<div class="productThumb">
                                <img src="img/burrito.jpg" alt="burrito">
                                <a href="burritoProduct.php"><h3 class="productTitle">Burrito</h3></a>
                                <p>$8.95</p>
                            </div>
                        </div>                
                        <div class="c2">	
                        	<div class="productThumb">
                                <img src="img/tostadas.jpg" alt="tostadas">
                                <a href="tostadosProduct.php"><h3 class="productTitle">Tostados</h3></a>
                                <p>$7.95</p>
                            </div>
                        </div>                               
            		</div>
            	</div>
           </div>                             
	</div>

        
<!-- Footer-->        
    <?php include("includes/footer.php"); ?> 
     
	</div>   
</body>
</html>