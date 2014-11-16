<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
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

<!--Home Content-->	
    <div id="site-content">   
    	<div class="grid"> 
 			<div id="registrationPage" class="row">
            	<div id="fulfillmentTitle" class="c12">
                     <form action="backend/createUser.php" method="POST">
                    
                     <div class="fl">
                     <h3 id="subheadingsRegistration" class="c5">REGISTRATION</h3>
                        First Name: <input type="text" name="firstName"><br>
                        Last Name:<input type="text" name="lastName"><br>
                        Email: <input type="text" name="email"><br>
                        Password: <input type="text" name="password"><br>
                        Phone Number: <input type="text" name="mobilenum"><br> 
                        Card First Name: <input type="text" name="cardFirstName"><br>
                        Card Last Name:<input type="text" name="cardLastName"><br>
                        Card Number: <input type="text" name="cardNumber"><br>
                        Expiration Date: <input type="text" name="expiration"><br>
                        CSC: <input type="text" name="securityCode"><br>
                        Address: <input type="text" name="billingAddress"><br>
                        City: <input type="text" name="billingCity"><br>
                        State: <input type="text" name="billingState"><br>
                        Zipcode: <input type="text" name="billingZip"><br> 
                    </div>    
                    <div class="fr">    
             		<h3 id="subheadings" class="c5">Delivering Address</h3>                       
                        Address: <input type="text" name="shippingAddress"><br>
                        City: <input type="text" name="shippingCity"><br>
                        State: <input type="text" name="shippingState"><br>
                        Zipcode: <input type="text" name="shippingZip"><br>                    
                        </div>                                                             
                        <input id="continueButton" type="submit" value="Submit">
                     </form>  
                                   
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