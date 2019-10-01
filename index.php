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
		   <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
	<img src="images/blood.jpg" class="img-responsive">
      
    </div>

    <div class="item">
      <img src="images/452.jpg" class="img-responsive">
    </div>

    <div class="item">
      <img src="images/468.jpg" class="img-responsive">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a></div>
  <div class="panel panel-danger" >
  <div class="intro panel-heading"><center>
  A single pint can save three lives,<br>
 a single gesture can create a million smiles.
 </div></center>
<div class="intro2 panel-body>"><center>
Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components<br>
Online BloodBank provides you a source to request or to donate blood. <br>
The blood you give is a lifeline in an emergency and for people who need long-term treatments.
</div></center>
<div class="panel-footer"><center>
<h3>Save a Life, by gifting them platelets!</h3></center>
</div>
</div>


		<br><br><br>	
		   
	<footer class="footer"> 
               <div class="container">
               <center>
			   <a href="about.php"><span class="glyphicon glyphicon-question-sign"></span> About Us </a> | 
			   <a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us </a></li>
                   <p>Copyright &copy Online BloodBank Portal. All Rights Reserved. </p>
                   
               </center>
               </div>
           </footer>
	 </div>
	</body>
</html>
