<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Burrito- Stephanie Garay</title>
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
    <div id="site-content">   
		<div id="productPage" class="grid">
        	<div class="row">    
            	<div id="productPageImage" class="c6">
                	<a href="catalog.php" class="c12 end">&#8617;BACK TO MENU</a>
       	    		<img src="img/burrito.jpg" alt="burrito">
                </div>
                <div class="c6">
                	<h3 class="subheadings">Burrito</h3>
                    <div id="orderQuestions" class="c12">
                    	Chicken/Beef: <select>
                          <option value="chicken">Chicken</option>
                          <option value="beef">Beef</option>
                        </select><br/><br/>
                    	Qty: <select>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select><br/><br/>
                        <p id="price">$8.95</p><br/>
                        <button type="button" id="buyButton">ADD TO BAG</button><br/><br/>
                       
                        <fieldset class="rating">
                            <legend>Please rate:</legend>
                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                       </fieldset >
                    </div>
                </div>
                <p class="c6" id="productDescription">Lightly grilled wheat flour tortilla stuffed with corn, tomato, lettuce, rice, black beans, and chicken or beef. Side note,in Mexico, meat and refried beans are sometimes the only fillings.</p>   
            </div>
            
                
        <div id="recommmendedProducts">
        	<h3 class="c12">Recommended Products</h3><hr/>
        		<div id="productSection" class="row">
                    <div id="productImages" >
                        <div class="c2">
                            <div class="productThumb">	
                                <img src="img/jarritos.jpg" alt="juice">
                                <a href="jarritosProduct.php"><h3 class="productTitle">Jarritos</h3></a>
                                <p>$1.95</p>
                            </div>
                        </div>
                        <div class="c2">
                            <div class="productThumb">	
                                <img src="img/corona.jpeg" alt="beer">
                                <a href="coronaProduct.php"><h3 class="productTitle" >Corona (Contains Alcohol)</h3></a>
                                <p>$2.45</p>
                            </div> 
                        </div>               
                        <div class="c2">
                            <div class="productThumb">	
                                <img src="img/margarita.jpg" alt="margarita">
                                <a href="margaritaProduct.php"><h3 class="productTitle">Margarita (Contains Alcohol)</h3></a>
                                <p>$5.95</p>
                            </div>
                        </div>
                        <div class="c2">
                            <div class="productThumb">	
                                <img src="img/nachos.jpg" alt="nachos">
                                <a href="nachosProduct.php"><h3 class="productTitle">Cheesy Nachos</h3></a>
                                <p>$8.95</p>
                            </div>
                        </div>
                        <div class="c2">
                            <div class="productThumb">	
                                <img src="img/quesadilla.jpg" alt="quesadilla">
                                <a href="quesadillaProduct.php"><h3 class="productTitle">Quesadilla</h3></a>
                                <p>$8.95</p>
                            </div> 
                        </div>               
                        <div class="c2">
                            <div class="productThumb">	
                                <img src="img/taquitos.jpg" alt="taquitos">
                                <a href="taquitosProduct.php"><h3 class="productTitle">Taquitos</h3></a>
                                <p>$8.95</p>
                            </div> 
                        </div>                               
            		</div>
            	</div>
            </div>                 	
        </div>                       
	</div>
        
<!-- Footer-->        
    <?php include("includes/footer.php"); ?>
      
</body>
</html>