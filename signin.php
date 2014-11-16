<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Sign In- Stephanie Garay</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
	<link rel="stylesheet" href="css/gridiculous.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   
<!--Header-->
    <?php include("includes/header.php"); ?>

<!-- Content-->	
    <div id="site-content">   
    	<div class="grid">
 			<div id="checkoutPage">
            	<div id="signin" class="c4">
            		<h3>Sign in to your account</h3>
                     <form action="backend/login.php" method="post">
                        Email: <br /><input type="text" name="email"><br>
                        Password: <br /><input type="text" name="password"><br>
                        <input id="buyButton" type="submit" value="Submit">
                     </form>                  
          		</div> 
            	<div id="guestsignin" class="c4">
            		<h3 >Guest Checkout</h3></br>
                    <p>Sign in without creating an account</p>
                    <a href="fulfillment.php" id="buyButton">Continue as Guest</a>             
          		</div>
                <div id="createAccount" class="c4">
             		<h3 >Create an Account</h3></br>
                    <p>Want to save your info? It's easy, just create a new account by clicking the button below.</p>
                    <a href="registration.php" id="buyButton">Create New Account</a>                	
                </div>                
         	</div>   
        </div>
   </div>      
        
<!-- Footer-->        
    <?php include("includes/footer.php"); ?>
       
</body>
</html>