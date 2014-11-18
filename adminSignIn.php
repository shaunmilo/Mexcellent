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
            	<div id="signin" class="c12">
            		<h3>Admin Login</h3>
                     <form action="backend/adminLogin.php" method="post">
                        Username: <br /><input type="text" name="username"><br>
                        Password: <br /><input type="password" name="password"><br>
                        <input id="buyButton" type="submit" value="Submit">
                     </form>                  
          		</div>                
         	</div>   
        </div>
   </div>      
        
<!-- Footer-->        
    <?php include("includes/footer.php"); ?>
       
</body>
</html>