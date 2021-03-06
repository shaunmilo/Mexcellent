<?php
session_start();

include("includes/config.php");
$result = mysqli_query($con, "SELECT * FROM products WHERE category = 'Beverage'");
$row = mysqli_fetch_array($result);
?>

<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Home- Stephanie Garay</title>
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

<!--Mobile Navigation-->

	<?php include("includes/header.php"); ?>

<!--Content-->	
	<div id="site-content">
    	<!-- <img id="homeBannerBg" src="img/banner.jpg" alt="banner"> -->
        <div id="homeBanner">
            <h1>Mexcellent</h1>
            <h2>Genuine Tex-Mex Cuisine</h2>

            <form class="searchbar" action="search.php" method="post">
            <input type="text" class="searchinput" name="term" size="19" maxlength="120"> <input type="submit" value="search" class="tfbutton button">
            </form>
        </div>
     
        <!--About Section-->
        <div class="grid">
            <div class="section">
                <div class="c6">
                	<div class="sectionInfo">
                        <h3 class="subheadings" id="ourStoryTitle">OUR STORY</h3>
                        <p class="descriptions">If it isn't really Mexican food, then what is Tex-Mex? Tex-Mex is a Texas version of Mexican food and it's a commercial cuisine for the most part. Some ingredients used in Tex-Mex dishes are fairly common in Mexican cuisine, but other ingredients not typically used in Mexico are often added. Tex-Mex cuisine is also characterized by its heavy use of shredded cheese, meat, beans, and spices, in addition to Mexican-style tortillas. </p>
                    </div>
                </div>
                    <img id="aboutPic" class="c6 end" src="img/about1.jpg" alt="about"> 
            </div>
        </div> 
                       
        <!--Featured Item--> 
        <div id="featuredBg">
            <h3 class="sectionHeading" id="featuredTitle">FEATURED PRODUCT</h3>
        </div>          
                          
        <div class="grid">
            <div class="section">
                <div class="c1">
                </div>

                <img id="featuredImage" class="c4" src="img/<?php echo $row['productImage']; ?>" alt="about">
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
	</div>

<!-- Footer-->        
	<?php include("includes/footer.php"); ?>  
</body>
</html>