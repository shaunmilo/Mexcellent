<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Fulfillment- Stephanie Garay</title>
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
 			<div id="shippingPage" class="row">
            	<div id="fulfillmentTitle" class="c6">
            		<h3 id="subheadings" class="c9">SHIPPING ADDRESS</h3>
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
             	<div id="fulfillmentTitle" class="c6 end">
            		<h3 id="subheadings" class="c9">BILLING INFORMATION</h3>
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