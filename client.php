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
	<div id="header">
    	<div id="site-container" class="grid">
        	<header class="row">
            	<a href="home.php" class="c2" id="title" >Mexcellent</a>
                <a href="catalog.php" class="c3" id="menuButton">View our Menu</a>
                <form id="searchbar"  class="c3" method="get" action="http://www.google.com">
                        <input type="text" class="searchinput" name="search" size="19" maxlength="120"><input type="submit" value="search" class="tfbutton">
                </form>
                <a class="c2" id="myAccount" href="client.php">My Account</a>
                <a class="c1" id="shoppingBag" href="cart.php">Bag(3)</a>
            </header>
       	</div>
	</div>

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
	<div id="footerBgg">
    	<div class="grid">
        	<footer class="row">
            	<p class="c2">@Mexcellent 2014</p>
              	<p class="c7">This site is not official and is an assignment for a UCF Digital Media course</p>
                <p class="c3">Designed by Stephanie Garay</p>
            </footer>
        </div>
	</div>   
    </div>
</body>
</html>