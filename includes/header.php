<div id="header">
	<div id="site-container" class="grid">
    	<header class="row" id="navigation">
        	<ul>
                <li><a href="home.php"  id="title" >Mexcellent</a></li>
                <li><a href="about.php"  id="about">About Us</a></li>
                <li><a href="catalog.php"  class="menuButton">View our Menu</a></li>
                <li><a  id="myAccount" href="client.php"class="menuButton" >My Account</a></li>
                <li><a  id="shoppingBag" href="cart.php" class="menuButton">Bag(<?php echo count($_SESSION['product']); ?>)</a></li>
            </ul>
        </header>
    </div>
</div>