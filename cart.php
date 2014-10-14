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
	<div id="header">
    	<div id="site-container" class="grid">
        	<header class="row">
            	<a href="home.php" class="c2" id="title" >Mexcellent</a>
                <a href="catalog.php" class="c3" id="menuButton">View our Menu</a>
                <form id="searchbar"  class="c3" method="get" action="http://www.google.com">
                        <input type="text" class="searchinput" name="search" size="19" maxlength="120"><input type="submit" value="search" class="tfbutton">
                </form>
                <a class="c2" id="myAccount" href="client.php">My Account</a>
                <a class="c1" id="shoppingBag" href="cart.php">Bag(3)</a>
            </header>
       	</div>
	</div>

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
                            <th>Quantity</th>		
                            <th>Price</th>
                            <th>Edit</th>
                          </tr>
                          <tr>
                            <td><img src="img/locosTacos.jpg" alt="taco"></td>
                            <td>Locos Tacos</td>
                            <td>2</td>		
                            <td>$2.99</td>
                            <td>Remove</td>
                          </tr>
                          <tr>
                            <td><img src="img/jarritos.jpg" alt="juice"></td>
                            <td>Jarritos</td>		
                            <td>2</td>
                            <td>$4.00</td>
                            <td>Remove</td>
                          </tr>
                          <tr>
                            <td><img src="img/taquitos.jpg" alt="taquitos"></td>
                            <td>Taquitos</td>		
                            <td>1</td>
                            <td>$4.00</td>
                            <td>Remove</td>
                          </tr>
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
                        <p id="totalAmount">$33.34</p>
                        <a href="fulfillment.php" id="buyButton" >CHECKOUT</a>
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
	<div id="footerBg">
    	<div class="grid">
        	<footer class="row">
            	<p class="c2">@Mexcellent 2014</p>
              	<p class="c7">This site is not official and is an assignment for a UCF Digital Media course</p>
                <p class="c3">Designed by Stephanie Garay</p>
            </footer>
        </div>
	</div> 
	</div>   
</body>
</html>