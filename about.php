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
            <h2>Genuine Tex-Mex Cuisine</h2>
        </div>
     
        <!--About Section-->
    <div id="site-content">
        <div class="grid">
            <div class="section">
                <div class="c6">
                	<div class="sectionInfo">
                        <h3 class="subheadings">Mexcellent Company</h3>
                            <div class="descriptions">
                                <p>At Mexcellent, we aim to do a few things but do them exceptionally well. When Mexcellent first opened its doors a few months ago, the goal was simple: to serve high quality, delicious food quickly with an experience that not only exceeded, but redefined the fast food experience.</p>
                                <p>We strive to provide fast delivery and pickup times on top of our simple ordering process. The less time that it takes for our customers to get their food in their hands, the more time they'll have to enjoy it!</p>
                            </div>
                        </div>
                    </div>
                 <!--Members-->
                    <div class="c6 our-team">
                            <div class="sectionInfo">
                                <h3 class="subheadings">Team Members</h3>
                                </div>
                            <div >
                            <div id="members">
                                <img src="img/angie.jpg" alt="members">
                                <img src="img/jennifer.jpg" alt="members">
                                <img src="img/shaun.jpg" alt="members">
                                <img src="img/stephanie.jpg" alt="members">
                            </div>
                            </div>              

                </div>  
                
			<div class="section">
              <!--Delivery Policy-->
                <div class="c6">
                	<div class="sectionInfo">
                        <h3 class="subheadings">Delivery Policy</h3>
                        <p class="descriptions">We will begin preparing your order as soon as it is submitted. Once your food has been prepared, we will deliver it immediately. Our delivery packaging is specially designed to keep hot items hot and cold items cold. Standard expected delivery time is 45 minutes or less.</p>
                    </div>
                </div>
                 <!--Tax Policy-->
                    <div class="c6">
                        <div class="sectionInfo">
                            <h3 class="subheadings">Return Policy</h3>
                            <p class="descriptions">Customer satisfaction is our number one priority. If you are not completely satisfied with your order please do not hesitate to contact us. We will do everything in our power to make it right. We will replace an incorrect order, the replacement will be put ahead of all others orders. And if all else fails, we will give you your money back.</p>
                         </div>
					</div>                  
                
             <div class="section">
              <!--Return Policy-->
                <div class="c6">
                	<div class="sectionInfo">
                        <h3 class="subheadings">Privacy Policy</h3>
                        <p class="descriptions">If you purchase our products, Mexcellent will collect personal information, such as your name, address, billing and credit card information. This information is used to complete the purchase transaction and deliver the products you have requested. 

Information about your computer, such as your IP address, browser type, domain names, access times and referring website addresses, may be automatically collected. This information is used to maintain quality of services and to provide general statistics.
</p>
                    </div>
                </div>
                 <!--Security Statement-->
                    <div class="c6">
                            <div class="sectionInfo">
                                <h3 class="subheadings">Security Statement</h3>
                                <p class="descriptions">We take our customer’s security concerns seriously.  We only collect as much personal information as is needed to provide our services in an efficient and effective manner. 

We strive to ensure that user data is kept secure. We will only release information when legally required to help law enforcement investigations or legal proceedings. Mexcellent does not sell any personal information to third parties.
</p>
                             </div>
            
					</div> 
 <div class="section">
 
              <!--Tax Policy-->
                <div class="c6">
                	<div class="sectionInfo">
                        <h3 class="subheadings">Tax Policy</h3>
                        <p class="descriptions">As per Florida Law, a 6% sales tax will be added to the price of all prepared food items. This sales tax is collected from the purchaser at the time of sale.</p>
                    </div>
                </div>               
                
            	</div>
        	</div> 
                                
	</div>
    </div>
    </div>

        <!--Location-->
        <div id="locationBg"> 
            <h3 class="sectionHeading" id="locationTitle">Location</h3> 
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

<!-- Footer-->        
	<?php include("includes/footer.php"); ?>  
</body>
</html>