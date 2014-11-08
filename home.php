<?php

mysql_connect("sulley.cah.ucf.edu", "st369963", "Goknights1") or die(mysql_error());
mysql_select_db("st369963") or die(mysql_error());
$result = mysql_query("SELECT * FROM products WHERE category = 'Beverage'");
$row = mysql_fetch_array($result);

?>

<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Home- Stephanie Garay</title>
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
    
    
    
<!--Mobile Navigation-->



<!--Content-->	
	<div id="site-content">
    	<img id="homeBannerBg" src="img/banner.jpg" alt="banner">
		<div id="homeBanner" class="grid">
        	<h1>Mexcellent</h1>
    		<h2>Genuine Tex-Mex Cuisine</h2>
		</div>
               
        <!--About Section-->
        <div class="grid">
            <div class="section">
                <div class="c6">
                	<div class="sectionInfo">
                        <h3 class="subheadings">OUR STORY</h3>
                        <p class="descriptions">If it isn't really Mexican food, then what is Tex-Mex? Tex-Mex is a Texas version of Mexican food and it's a commercial cuisine for the most part. Some ingredients used in Tex-Mex dishes are fairly common in Mexican cuisine, but other ingredients not typically used in Mexico are often added. Tex-Mex cuisine is also characterized by its heavy use of shredded cheese, meat, beans, and spices, in addition to Mexican-style tortillas. </p>
                    </div>
                </div>
                    <img class="c6 end" src="img/about1.jpg" alt="about"> 
            </div>
        </div> 
                       
        <!--Featured Item--> 
        <div id="featuredBg">
            <img src="img/featured.jpg" alt="featured"> 
            <h3 class="sectionHeading">FEATURED PRODUCT</h3>
        </div>          
                          
        <div class="grid">
            <div class="section">
                <div class="c1">
                </div>
                <img class="c4" src="img/<?php echo $row['productImage']; ?>" alt="about"> 
                <div class="c6 end">
                	<div class="sectionInfo">
                        <h3 class="subheadings"><?php echo $row['productName']; ?></h3>
                        <p class="descriptions"><?php echo $row['description']; ?></p>
                        <p class="price"><?php echo $row['price']; ?></p>
                    </div>
                </div> 
                <div class="c1">
                </div> 
            </div>
        </div> 
              
        <!--Location-->
        <div id="locationBg"> 
            <h3 class="sectionHeading">LOCATION</h3> 
            <div id="location" class="grid">
                <img class="c6" id="homeImages" src="img/ucfMap.jpg" alt="map"> 
                <div id="locationInfo" class="c6 end">
                    <h3 class="locationHeading">ADDRESS</h3>
                    <p> 4000 Central Florida Blvd, Orlando, FL 32816</p>
                    <h3 class="locationHeading">PHONE NUMBER</h3>
                    <p>(407) 823-2000</p>
                    <p>Need help in finding our location? No problem, just give us a call and we'll be more than happy to assist you.</p> 
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
</body>
</html>