<?php
session_start();
require("includes/config.php");
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Mexcellent Client- Stephanie Garay</title>
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

<!--Home Content-->	
    <div id="site-content">    
 			<div id="cartPage">
      <div class="grid">
        <div class="section">
            		<h3 id="subheadings">MY ACCOUNT</h3>               
            		<div id="account">
                <?php

                  if (!$_SESSION['currentUser']) {

                      echo "<h2>You are not signed in</h2>";
                      echo "<p><a href='signin.php' class='button'>Login To Your Account</a></p>";

                    } else {

                      session_start();
                      $myemail = $_SESSION["currentUser"];

                      $sql="SELECT * FROM Users WHERE Email='$myemail'";
                      $result=mysqli_query($con,$sql);
                      $row = mysqli_fetch_array($result);

                      echo "<div id='personalInfo'>
                            <p>First Name:<span>".$row['FirstName']."</span></p>
                            <p>Last Name: <span>".$row['LastName']."</span></p>
                            <p>Email:<span>".$row['Email']."</span></p>
                            <p>PhoneNumber:<span>".$row['PhoneNumber']."</span></p>";
                    }

                 ?>  
                 </div>
                 </div>     	
           		</div>
            </div>
	</div>
    
<!-- Footer-->        
  <?php include("includes/footer.php"); ?>    
  
    </div>
</body>
</html>