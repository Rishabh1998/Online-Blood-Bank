<?php
    require 'connection.php';
    session_start();
    
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
                        <h1><b>Find Donor</b></h1>
                        <form method="post" action="fetch.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact Number" required="true">
                            </div>
                          <!--   <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div> -->
							
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
                                <input type="submit" class="btn btn-primary" value="Place Request">
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
