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
            	<div id="signin" >
            		<h3>Sign in to your account</h3>
                     <form action="demo_form.asp">
                        Email: <input type="text" name="email"><br>
                        Password: <input type="text" name="password"><br>
                        <input id="buyButton" type="submit" value="Submit">
                     </form>                  
          		</div> 
            	<div id="guestsignin" >
            		<h3 >Guest Checkout</h3></br>
                    <p>Sign in without creating an account</p>
                    <a href="fulfillment.php" id="buyButton">Continue as Guest</a>             
          		</div>
                <div id="createAccount">
             		<h3 >Create an Account</h3></br>
                    <p>Want to save your info? It's easy, just create a new account by clicking the button below.</p>
                    <a href="registration.php" id="buyButton">Create New Account</a>                	
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