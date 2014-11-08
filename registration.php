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
            	<div id="fulfillmentTitle" class="c6 s3">
            		<h3 id="subheadings" class="c9">REGISTRATION</h3>
                     <form action="demo_form.asp" class="c9">
                        Name: <input type="text" name="firstname"><br>
                        Email: <input type="text" name="email"><br>
                        Password: <input type="text" name="password"><br>
                        Mobile Number: <input type="text" name="mobilenum"><br>                              
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