<!doctype html>
<?php
session_start();
include("includes/config.php");
$result = mysqli_query($con,"SELECT * FROM products WHERE category = 'Beverage'");
?>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Catalog- Stephanie Garay</title>
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
    <?php include("includes/header.php"); ?>

<!--Content-->	
    <div id="site-content">      
		<div id="menuBg">
          <h2 class="sectionHeading bannerHeading">Menu</h2>
        </div>
        <div id="menu" class="grid">
        	<div class="productSection">	
                <div class="row">
                    <div class="c6">
                        <h3 class="subheadings">BEVERAGES</h3>
                        <p class="descriptions">Choose from a diverse selection of beverages that everyone in the family can enjoy. From the fruity Jarritos sodas that's appropriate for children to a more adult Margarita or Corona for the adults. We also have a wide range of flavors to choose from so whichever one you pick, you won't be disappointed. </p> 
                        <div class="productImages" >
                        <?php

                          while($row = mysqli_fetch_array($result)) {

                            echo "<div class='c4'>
                                <div class='productThumb'>  
                                    <a href='#news'><img src="."'img/".$row['productImage']."'"." alt='juice'></a>
                                    <a href='#'><h3 class='productTitle'>".$row['productName']."</h3></a>
                                    <p>".$row['price']."</p><br />
                                    <form method='post' action='backend/addCart.php'>
                                        <input type='hidden' name='productImage' value=".$row['productImage']." />
                                        <input type='hidden' name='productName' value=".$row['productName']." />
                                        <input type='hidden' name='price' value=".$row['price']." />
                                        <button class='button' type='submit'>Add to Order</button>
                                    </form>
                                </div>
                            </div>";
                          }

                          ?>
                        </div>
                    </div>                
                    <div class="c6 end">
                        <h3 class="subheadings">APPETIZERS</h3>
                        <p class="descriptions">Need something to start you off? Choose one of our delectable appetizers that everyone in the family can share and enjoy. Whether it would be a cheesy explosion from our Cheesy Nachos to nibbling on Taquitos before your main course.</p> 
                        <div class="productImages" >
                            <?php
                            $result = mysqli_query($con,"SELECT * FROM products WHERE category = 'Appetizer'");

                              while($row = mysqli_fetch_array($result)) {

                                echo "<div class='c4'>
                                    <div class='productThumb'>  
                                        <a href='#news'><img src="."'img/".$row['productImage']."'"." alt='juice'></a>
                                        <a href='jarritosProduct.php'><h3 class='productTitle'>".$row['productName']."</h3></a>
                                        <p>".$row['price']."</p><br />
                                    <form method='post' action='backend/addCart.php'>
                                        <input type='hidden' name='productImage' value=".$row['productImage']." />
                                        <input type='hidden' name='productName' value=".$row['productName']." />
                                        <input type='hidden' name='price' value=".$row['price']." />
                                        <button class='button' type='submit'>Add to Order</button>
                                    </form>
                                    </div>
                                </div>";
                              }

                              ?>
                        </div>                
                    </div>
                 </div> 
          	</div> 
            <div class="productSection">
                <div class="row">
                    <div class="c6">
                        <h3 class="subheadings" id="mainCourse">MAIN COURSES</h3>
                        <p class="descriptions">We offer various kinds of dishes so everyone can find something they enjoy, from the fiery hot Locos Tacos to the delightfully crunchy Tostados. You can also pick chicken or beef with any of our courses to further customize your meal. </p> 
                        <div class="productImages" >
                            <?php
                            $result = mysqli_query($con,"SELECT * FROM products WHERE category = 'Main Course'");

                              while($row = mysqli_fetch_array($result)) {

                                echo "<div class='c4'>
                                    <div class='productThumb'>  
                                        <a href='#news'><img src="."'img/".$row['productImage']."'"." alt='juice'></a>
                                        <a href='jarritosProduct.php'><h3 class='productTitle'>".$row['productName']."</h3></a>
                                        <p>".$row['price']."</p><br />
                                    <form method='post' action='backend/addCart.php'>
                                        <input type='hidden' name='productImage' value=".$row['productImage']." />
                                        <input type='hidden' name='productName' value=".$row['productName']." />
                                        <input type='hidden' name='price' value=".$row['price']." />
                                        <button class='button' type='submit'>Add to Order</button>
                                    </form>
                                    </div>
                                </div>";
                              }

                              ?>
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