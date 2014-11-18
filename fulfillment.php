<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Fulfillment- Stephanie Garay</title>
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


    <div id="site-content">   
    	<div class="grid"> 
 			<div id="shippingPage" class="row">
            	<div id="fulfillmentTitle" class="c6">
            		<h3 id="subheadings">SHIPPING ADDRESS</h3>
                     <form action="demo_form.asp" class="c9">
                        First Name: <input type="text" name="firstname"><br>
                        Last Name: <input type="text" name="lname"><br>
                        Home Number: <input type="text" name="homenum"><br>
                        Mobile Number: <input type="text" name="mobilenum"><br>
                        Address: <input type="text" name="address"><br>
                        City: <input type="text" name="city"><br>
                        State: <input type="text" name="state"><br>
                        Zipcode: <input type="text" name="zipcode"><br>                               
                        <input id="continueButton" type="submit" value="Submit">
                     </form>                  
          		</div> 
             	<div id="fulfillmentTitle" class="c6">
            		<h3 id="subheadings">BILLING INFORMATION</h3>
                     <form action="demo_form.asp" class="c9">
                        Payment Type: <input type="text" name="firstname"><br>
                        Expiration Date: <input type="text" name="lname"><br>
                        CSC: <input type="text" name="homenum"><br>                       
                        First Name (on card): <input type="text" name="firstname"><br>
                        Last Name (on card): <input type="text" name="lname"><br>                               
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