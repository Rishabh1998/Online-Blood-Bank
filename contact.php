<?php
    session_start();
    
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Online BloodBank Portal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
               <div class="panel panel-info">
				<div class="panel-heading">Need to Contact us?</div>
				<div class="panel-body">
				Need Help with Something? Feel free to contact us or write to us at <b>onlinebloodportal@gmail.com</b>
				
 </div></div>
 

            </div>
			<br><br>
            <footer class="footer">
               <div class="container">
               <center>
			   <a href="about.php"><span class="glyphicon glyphicon-question-sign"></span> About Us </a> | 
			   <a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us </a></li>
                   <p>Copyright &copy Online BloodBank Portal. All Rights Reserved.</p>
                   
               </center>
               </div>
			   
           </footer>
        </div>
    </body>
</html>
