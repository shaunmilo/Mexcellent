<div id="header">
	<div id="site-container" class="grid">
    	<header class="row">
        	<a href="home.php" class="c2" id="title" >Mexcellent</a>
            <a href="about.php" class="c3" id="menuButton">About Us</a>
            <a href="catalog.php" class="c3" id="menuButton">View our Menu</a>
            <a class="c2" id="myAccount" href="client.php">My Account</a>
            <a class="c1" id="shoppingBag" href="cart.php">Bag(<?php echo count($_SESSION['product']); ?>)</a>
        </header>
    </div>
</div>