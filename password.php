<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
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
			
			<!-- navbar test start -->
			<nav class="navbar navabar-fixed-top navbar-default">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar2">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="#" class="navbar-brand">Settings</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar2">
                       <ul class="nav navbar-nav">
							<li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> General Settings</a></li>
                           <li><a href="password.php"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>
                         
                           
                           
                       </ul>
                   </div>
               </div>
</nav>
			

<!-- navbar test end -->
			
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <h1>Change Password</h1>
                        <form method="post" action="setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Re-type new password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Change">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
			   <a href="about.php"><span class="glyphicon glyphicon-question-sign"></span> About Us </a> | 
			   <a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us </a></li>
                   <p>Copyright &copy Online BloodBank Portal. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
