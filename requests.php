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
        </div>
<div class="container">		
<?php 

	$sql = "SELECT * from requests";
	
	$result = $con->query($sql);
	
	//if($result->num_rows > 0)
	//{
		if($result->num_rows > 0){
	 
		
		
		while($row = $result->fetch_assoc()){
		echo "<div class='panel panel-danger'>";
		echo "<div class='panel-heading'>";
		echo "Blood request for " . $row["bloodgroup"]  . " &nbsp blood group </div>";
		echo "<div class='panel-body'>" . $row['name'] ." requires ". $row['bloodgroup']." blood group in ". $row['locality'].". If you can help him please call this number ". $row['contact'].".</div>";
		echo "<div class='panel-footer'>Request made on ". $row['date']." <br> Note: Date Format YYYY-MM-DD</div></div>";
		
		}
		
		}
		
		
	else{
		echo "<center><h4><p>We're sorry! Our Database Currently has no blood donors requests.</p></center></h4>";
		
	}	
	
	
	
	
	$con->close();
	?>  
            </div>
            <br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
			   <a href="about.php"><span class="glyphicon glyphicon-question-sign"></span> About Us </a> | 
			   <a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us </a></li>
                   <p>Copyright &copy Online BloodBank Portal. All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>

        
    </body>
</html>
