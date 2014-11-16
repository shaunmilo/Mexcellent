<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Sign In- Stephanie Garay</title>
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