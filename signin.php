<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Sign In- Stephanie Garay</title>
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

<!-- Content-->	
    <div id="site-content">   
    	<div class="grid">
 			<div id="checkoutPage">
            <h2 class="subheadings">Log in</h2>
            	<div id="signin" class="c4">
                	<div class="signinSection">
                        <h3>Sign in to your account</h3>
                         <form action="backend/login.php" method="post">
                            Email: <br /><input type="text" name="email"><br>
                            Password: <br /><input type="text" name="password"><br>
                            <input id="buyButton" type="submit" value="Submit">
                         </form> 
                     </div>                 
          		</div> 
            	<div id="guestsignin" class="c4">
                	<div class="signinSection">
                        <h3>Guest Checkout</h3></br>
                        <p>Sign in without creating an account</p>
                        <a href="cart.php" id="buyButton">Continue as Guest</a> 
                    </div>            
          		</div>
                <div id="createAccount" class="c4">
                	<div class="signinSection">
                        <h3>Create an Account</h3></br>
                        <p>Want to save your info? It's easy, just create a new account by clicking the button below.</p>
                        <a href="registration.php" id="buyButton">Create New Account</a>  
                    </div>              	
                </div>                
         	</div>   
        </div>
   </div>      
        
<!-- Footer-->        
    <?php include("includes/footer.php"); ?>
       
</body>
</html>