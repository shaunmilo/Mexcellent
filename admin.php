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
            	<h3 class="subheadings">Admin</h3>               
            </div>
        	<div class="row">
                <div id="cartTable" class="c12">
                    <table>
                      <tr>
                        <th></th>
                        <th>Item</th>
                        <th>Quantity</th>		
                        <th>Price</th>
                        <th>Address</th>
                        <th>Order Date</th>
                        <th>Edit</th>
                      </tr>
                      <tr>
                        <td><img src="img/tostadas.jpg" alt="food"></td>
                        <td>Tostados</td>
                        <td>4</td>		
                        <td>$31.80</td>
                        <td>4000 Central Florida Blvd, Orlando, FL 32816</td>
                        <td>09/25/14</td>
                        <td class="removeButton">Remove</td>
                      </tr>
                      <tr>
                        <td><img src="img/margarita.jpg" alt="drink"></td>
                        <td>Margarita</td>
                        <td>2</td>		
                        <td>$11.90</td>
                        <td>4000 Central Florida Blvd, Orlando, FL 32816</td>
                        <td>09/27/14</td>
                        <td class="removeButton">Remove</td>
                      </tr>
                      <tr>
                        <td><img src="img/jarritos.jpg" alt="drink"></td>
                        <td>Jarritos</td>
                        <td>2</td>		
                        <td>$7.60</td>
                        <td>4000 Central Florida Blvd, Orlando, FL 32816</td>
                        <td>09/28/14</td>
                        <td class="removeButton">Remove</td>
                      </tr>
                      <tr>
                        <td><img src="img/burrito.jpg" alt="burrito"></td>
                        <td>Burrito</td>		
                        <td>2</td>
                        <td>$17.90</td>
                        <td>4000 Central Florida Blvd, Orlando, FL 32816</td>
                        <td>09/29/14</td>
                        <td class="removeButton">Remove</td>
                      </tr>
                      <tr>
                        <td><img src="img/taquitos.jpg" alt="taquitos"></td>
                        <td>Taquitos</td>		
                        <td>1</td>
                        <td>$8.95</td>
                        <td>4000 Central Florida Blvd, Orlando, FL 32816</td>
                        <td>09/30/14</td>
                        <td class="removeButton">Remove</td>
                      </tr>
                    </table>
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