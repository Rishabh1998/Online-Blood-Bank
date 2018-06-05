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
           
<?php 
$blood="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$blood = $_REQUEST['bloodgroup'];
	$loc = $_REQUEST['locality'];
}
	/*$servername = "localhost";
	$user = "root";
	$password = "";
	$dbname = "Volunteer";

	$conn = new mysqli($servername, $user, $password, $dbname);
	
	if($conn->connect_error){
		die("Connection Failed");
		
	}*/
	//Blood request Counter.
	
	$pre = file_get_contents("request.txt");
	$count=$pre+1;
	$myfile=fopen("request.txt","w");
	fwrite($myfile,$count);
	fclose($myfile);
	
	//End
	$sql = "SELECT * from volunteers where bloodgroup = '$blood' AND locality = '$loc' AND gender = 'Male' UNION SELECT * from volunteers where bloodgroup = '$blood' AND locality = '$loc' AND gender = 'Female' UNION SELECT * from volunteers where bloodgroup = '$blood' AND locality != '$loc' AND gender = 'Male' UNION SELECT * from volunteers where bloodgroup = '$blood' AND locality != '$loc' AND gender = 'Female'";
	
	$result = $con->query($sql);
	
	//if($result->num_rows > 0)
	//{
	$to = new DateTime('today');
		echo "<div class='table-responsive'>";
		echo " <table class='table table-bordered table-striped'>";
		
			echo"<th>Name</th><th> Email</th><th>Contact</th><th>Blood Group</th><th>Gender</th><th>Locality</th><th>Age</th>";
		while($row = $result->fetch_assoc()){
		$id = $row['id'];
		$from = new DateTime($row["date"]);
			echo "<tr>";
			
			
			echo"<td>" . $row["name"] ."</td>";
			echo"<td>" . $row["email"] ."</td>";
			echo"<td>" . $row["contact"] ."</td>";
			echo"<td>" . $row["bloodgroup"] ."</td>";
			echo"<td>" . $row["gender"] ."</td>";
			echo"<td>" . $row["locality"] ."</td>";
			echo"<td>" . $from->diff($to)->y ."</td>";
			
			echo "</tr>";
			
			
		}
		
		echo"</table></div>";
		
	//}
	//else {
	//	echo "0 results ";
	//}
	
	
	$con->close();
	?>  
            
            <br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy Online BloodBank Portal. All Rights Reserved.</p>
                   <p>This website is developed by Rishabh Aggarwal</p>
               </center>
               </div>
           </footer>

        
    </body>
</html>
