<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.png" />
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
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>SIGN UP</b></h1>
                        <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact Number" required="true">
								
                            </div>
                          <!--   <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div> -->
							<label>Enter Your Date of Birth</label>
							
							<div class="col-xs-4">
							</div>
							<div class="form-group">
							
							<div class="col-md-4">
                                <input type="number" class="form-control" name="day" placeholder="Day" required="true">
								</div>
								<div class="col-md-4">
								<select class="form-control" name="month" required="true">
								<option value="1">January</option>
								<option value="2">February</option>
								<option value="3">March</option>
								<option value="4">April</option>
								<option value="5">May</option>
								<option value="6">June</option>
								<option value="7">July</option>
								<option value="8">August</option>
								<option value="9">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
								</select>
								</div>
								<div class="col-md-4">
								<input type="number" class="form-control" name="year" placeholder="Year" required="true">
								
                            </div><br>
							<div class="col-xs-4">
							</div><br><div class="form-group">
							</div>
							</div>
                            <div class="form-group">
                                <select class="form-control" name="bloodgroup" required="true">
								<option value="O+">O+</option>
								<option value="O-">O-</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								</select>

                            </div>
							<div class="form-group">
                                <select class="form-control" name="gender" required="true">
								<option value="Female">Female</option>
								<option value="Male">Male</option>
								
								</select>

                            </div>
							 <div class="form-group">
                                <select class="form-control" name="locality"  required="true">
							<option value="Chakrata">Chakrata</option>
							<option value="Vikasnagar">Vikasnagar</option>
							<option value="Sahaspur">Sahaspur</option>
							<option value="Dharampur"> Dharampur</option>
							<option value="Raipur"> Raipur</option>
							<option value="Rajpur Road">Rajpur Road</option>
							<option value="Dehradun Cantt">Dehradun Cantt</option>
							<option value="Mussoorie">Mussoorie</option>
							<option value="Doiwala">Doiwala</option>
							<option value="Rishikesh">Rishikesh</option>
							</select>
							</div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy Online BloodBank Portal. All Rights Reserved.</p>
                   <p>This website is developed by Rishabh Aggarwal</p>
               </center>
               </div>
           </footer>

        </div>
    </body>
</html>
