<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
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

<!--Home Content-->	
    <div id="site-content">   
    	<div class="grid"> 
 			<div id="registrationPage" class="row">
            	<div id="fulfillmentTitle" class="c12">
                     <form action="backend/createUser.php" method="POST">
                    
                     <div class="c6">
                     <h3 id="subheadingsRegistration">REGISTRATION</h3>
                        First Name: <input type="text" name="firstName"><br>
                        Last Name:<input type="text" name="lastName"><br>
                        Email: <input type="text" name="email"><br>
                        Password: <input type="password" name="password"><br>
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
                    <div class="c6">    
             		<h3 id="subheadings">Delivering Address</h3>                       
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
    <?php include("includes/footer.php"); ?>
        
</body>
</html>