<?php
session_start();
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Client- Stephanie Garay</title>
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
 			<div id="cartPage">
            	<div id="cartTitle" class="c9 s3">
            		<h3 id="subheadings" class="c9">MY ACCOUNT</h3>               
            		<div id="account" class="c9">
           				<h2 class="accountHeading">PERSONAL INFORMATION</h2>
            			<div id="personalInfo">
                            <p>First Name:<span>Stephanie</span></p>
                            <p>Last Name: <span>Garay</span></p>
                            <p>Email:<span>sgaray89@knights.ucf.edu</span></p>
                            <p>Password:<span>******</span></p>
                            <button class="editButton" type="button">EDIT</button> 
                        </div>
            			<h2 class="accountHeading">ADDRESS BOOK</h2>
                        <table style="width:100%">
                          <tr>
                            <th>ADDRESS</th>
                            <th class="centerText">BILLING</th>		
                            <th class="centerText">SHIPPING</th>
                          </tr>
                          <tr>
                            <td>4000 Central Florida Blvd, Orlando, FL 32816</td>
                            <td class="centerText"><input type="checkbox" name="billing" value="billing"></td>		
                            <td class="centerText"><input type="checkbox" name="shipping" value="shipping"></td>
                          </tr> 
                       </table>
               		   <button class="editButton" type="button">EDIT</button>              
            		   <h2 class="accountHeading">WALLET</h2>
                       <table style="width:100%">
                         <tr>
                           <th>TYPE</th>
                           <th>NUMBER</th>
                           <th>NAME</th>		
                           <th class="centerText">DEFAULT</th>
                         </tr>
                         <tr>
                           <td><img id="visa" src="img/visa.png" alt="visa"></td>
                           <td>xxxx xxxx xxxx 1234</td>
                           <td>Stephanie Garay</td>		
                           <td class="centerText"><input type="checkbox" name="default" value="card"></td>
                         </tr> 
                      </table>
               		  <button class="editButton" type="button">EDIT</button><br/>  
               		  <button id="continueButton" type="button">CONTINUE SHOPPING</button>         	
           		</div>
            </div>
		</div>
	</div>
    
<!-- Footer-->        
  <?php include("includes/footer.php"); ?>    
  
    </div>
</body>
</html>