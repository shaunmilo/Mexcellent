	<nav class="clearfix">
    	<a href="home.php"  id="desktopHome" class="title">Mexcellent</a>
    	<div id="header">
            <ul class="clearfix" id="navigation">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="catalog.php"  class="menuButton">Menu</a></li>
                    <li><a href="client.php" class="menuButton">My Account</a></li>
                    <li><a href="cart.php" class="menuButton">Bag(<?php echo count($_SESSION['product']); ?>)</a></li>
            </ul>
			<a href="home.php"  id="pull" class="title">Mexcellent</a>
        </div>
        
	</nav>