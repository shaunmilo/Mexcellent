<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
	<link rel="stylesheet" href="css/gridiculous.css">
    <link rel="stylesheet" href="css/styles.css">
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
    <?php include("includes/footer.php"); ?>
        
</body>
</html>