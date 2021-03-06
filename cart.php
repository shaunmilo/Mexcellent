<?php 
session_start();
// error_reporting( error_reporting() & ~E_NOTICE );

?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Cart- Stephanie Garay</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
	<link rel="stylesheet" href="css/gridiculous.css">
    <link rel="stylesheet" href="css/styles.css">  
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-56803382-1', 'auto');
      ga('send', 'pageview');

    </script>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
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
               <!--  <?php 

                // echo "Number of Items in the cart = ".sizeof($_SESSION['cart'])."<br />";

                // while (list ($key, $val) = each ($_SESSION['cart'])) { 
                //     echo "$key -> $val <br>"; 
                //     }

                ?> -->
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
                            <td><form method='post' action='backend/updateCart.php'><input type='submit' value='Remove' /></form></td>
                            </tr>";
                          
                          ?>
                     </table>
        		</div>
        		<div id="pickupCheckout" class="c4">
                    <div id="checkout">
                        <h4>CHECKOUT TOTAL:</h4>
                        <p id="totalAmount"><?php echo $_SESSION["price"]; ?></p>
                        <!-- <a href="signin.php" id="buyButton" >CHECKOUT</a> -->

                        <?php
                         $userSession = $_SESSION['currentUser'];
                         $query = "SELECT * FROM Users WHERE Email ='$userSession'";
                         $result = mysqli_query($con,$query);
                         $row = mysqli_fetch_array($result);
                        ?>

                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="upload" value="1">
                            <input type="hidden" name="business" value="<?php echo $userSession; ?>" />
                            <input type="hidden" name="item_name_1" value="<?php echo $_SESSION['product']; ?>" />
                            <input type="hidden" name="currency_code" value="USD" />
                            <input type="hidden" name="amount_1" value="<?php echo $_SESSION['price']; ?>" />
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
</div>

        
<!-- Footer-->        
    <?php include("includes/footer.php"); ?> 

</body>
</html>