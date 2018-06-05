<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
	 <link rel="shortcut icon" href="img/logo.png" />
        <title>Online BloodBank Portal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
		<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
	 <div>
           <?php
            require 'header.php';
           ?>
		   <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
				   <?php
                           if(isset($_SESSION['email'])){
                           ?>
						   <!-- If logged in -->
						   <h1>Lorem Ipsum</h1>
                       <p>Lorem ipsum dolores </p>
						   <?php
                           }else{
                            ?>
                       <h1>Your Blood Can Save a life.</h1>
                       <p>Be part of a community where you can help save a life.</p>
                       <a href="signup.php" class="btn btn-danger">Volunteer Now</a>
					   <?php
                           }
                           ?>
                   </div>
                   </center>
               </div>
           </div>
	<footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Online BloodBank Portal. All Rights Reserved. </p>
                   <p>This website is developed by Rishabh Aggarwal</p>
               </center>
               </div>
           </footer>
	 </div>
	</body>
</html>