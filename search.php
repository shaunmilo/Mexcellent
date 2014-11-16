<?php

require("includes/config.php");

session_start();

$result = mysqli_query($con, "SELECT * FROM products WHERE category = 'Beverage'");
$row = mysqli_fetch_array($result);
?>

<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Home- Stephanie Garay</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
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

	<?php include("includes/header.php"); ?>

<!--Content-->	
	<div id="site-content">
    	<!-- <img id="homeBannerBg" src="img/banner.jpg" alt="banner"> -->
        <div id="homeBanner">
            <h1>Mexcellent</h1>
            <h2>Genuine Tex-Mex Cuisine</h2>

            <form class="searchbar" action="search.php" method="post">
            <input type="text" class="searchinput" name="term" size="19" maxlength="120"> <input type="submit" value="search" class="tfbutton">
            </form>
        </div>
     
        <!--About Section-->
        <div class="grid">
            <div class="section">
                <div class="c12">
                	<div class="sectionInfo">
                	<h1>Search Results</h1>
                	<table>
                      <tr>
                        <th>Product</th>		
                        <th>Description</th>
                        <th>Category</th>
                      </tr>
                        <?php

                        $term = mysql_real_escape_string($_REQUEST['term']);    

						$sql = "SELECT * FROM products WHERE description LIKE '%".$term."%' OR productName LIKE '%".$term."%' OR category LIKE '%".$term."%'";
						$query = mysqli_query($con, $sql);

						while ($row = mysqli_fetch_array($query)){
							echo "<tr>";
							echo "<td>".$row['productName']."</td>"; 
							echo "<td>".$row['description']."</td>"; 
							echo "<td>".$row['category']."</td>"; 
							echo "</tr>";
						} 

                        ?>
                       </table>
                    </div>
                </div>
            </div>
        </div> 


<!-- Footer-->        
	<?php include("includes/footer.php"); ?>  
</body>
</html>