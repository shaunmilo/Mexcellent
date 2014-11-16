<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Cheesy Nachos- Stephanie Garay</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
	<link rel="stylesheet" href="css/gridiculous.css">
    <link rel="stylesheet" href="css/styles.css">   
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
       	    		<img src="img/nachos.jpg" alt="nachos">
                </div>
                <div class="c6">
                	<h3 class="subheadings">Cheesy Nachos</h3>
                    <div id="orderQuestions" class="c12">
                    	Extra Cheese? <select>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
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
                <p class="c6" id="productDescription">Crispy tortilla chips layered with cheese and topped with green pepper, onions, tomato, and ground beef is sure to have you mesmerized. This appetizer is the perfect way to start your entre with friends or family.</p>   
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
                                <img src="img/locosTacos.jpg" alt="taco">
                                <a href="locostacosProduct.php"><h3 class="productTitle">Locos Tacos</h3></a>
                                <p>$7.95</p>
                            </div>
                        </div>
                        <div class="c2">
                            <div class="productThumb">	
                                <img src="img/burrito.jpg" alt="burrito">
                                <a href="burritoProduct.php"><h3 class="productTitle">Burrito</h3></a>
                                <p>$8.95</p>
                            </div> 
                        </div>               
                        <div class="c2">
                            <div class="productThumb">	
                                <img src="img/tostadas.jpg" alt="tostadas">
                                <a href="tostadosProduct.php"><h3 class="productTitle">Tostados</h3></a>
                                <p>$7.95</p>
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