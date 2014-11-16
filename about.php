<?php
session_start();

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
            <h2>Genuine Tex-Mex Cuisine</h2>
        </div>
     
        <!--About Section-->
    <div id="site-content">
        <div class="grid">
            <div class="section">
                <div class="c6">
                	<div class="sectionInfo">
                        <h3 class="subheadings">Mexcellent Company</h3>
                        <p class="descriptions">At Mexcellent restaurant, we aim to do a few things but do them exceptionally well. When Mexcellent first opened its doors in a few months ago, the goal was simple: to serve high quality, delicious food quickly with an experience that not only exceeded, but redefined the fast food experience.</p>
                    </div>
                </div>
                 <!--Members-->
                    <div class="c6 our-team">
                            <div class="sectionInfo">
                                <h3 class="subheadings">Team Members</h3>
                                </div>
                            <div class="c6">
                            <img src="img/angie.jpg" alt="members" width="200" height="80">
                            </div>
                            <div class="c6">
                            <img src="img/jennifer.jpg" alt="members" width="200" height="80">
                            </div>
                             <div class="c6">
                            <img src="img/shaun.jpg" alt="members" width="200" height="80">
                            </div>
           
                            <div class="c6">
                            <img src="img/stephanie.jpg" alt="members" width="200" height="80">
                            </div>              

                </div>  
            </div>
        </div> 
       
              
        <!--Location-->
        <div id="locationBg"> 
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
    </div>

<!-- Footer-->        
	<?php include("includes/footer.php"); ?>  
</body>
</html>