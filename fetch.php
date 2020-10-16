<?php
require 'connection.php';
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/logo.png"/>
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
    $blood = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $blood = $_REQUEST['bloodgroup'];
        $loc = $_REQUEST['locality'];
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $contact = $_REQUEST['contact'];
        $rdate = new DateTime('today');
        $result = $rdate->format('Y-m-d H:i:s');

        $request_submit = "insert into requests(name,email,contact,locality,bloodgroup,date) values ('$name','$email','$contact','$loc','$blood','$result')";
        //die($user_registration_query);
        $user_registration_result = mysqli_query($con, $request_submit) or die(mysqli_error($con));

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
    $count = $pre + 1;
    $myfile = fopen("request.txt", "w");
    fwrite($myfile, $count);
    fclose($myfile);

    //End
    $sql = "SELECT * from volunteers where verify = 'true' AND bloodgroup = '$blood' AND locality = '$loc' AND gender = 'Male' UNION SELECT * from volunteers where verify = 'true' AND bloodgroup = '$blood' AND locality = '$loc' AND gender = 'Female' UNION SELECT * from volunteers where verify = 'true' AND bloodgroup = '$blood' AND locality != '$loc' AND gender = 'Male' UNION SELECT * from volunteers where verify = 'true' AND bloodgroup = '$blood' AND locality != '$loc' AND gender = 'Female'";

    $result = $con->query($sql);

    //if($result->num_rows > 0)
    //{
    if ($result->num_rows > 0) {
        $to = new DateTime('today');
        echo "<div class='table-responsive'>";
        echo " <table class='table table-bordered table-striped'>";

        echo "<th>Name</th><th> Email</th><th>Contact</th><th>Blood Group</th><th>Gender</th><th>Locality</th><th>Age</th>";


        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $from = new DateTime($row["date"]);
            echo "<tr>";


            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["contact"] . "</td>";
            echo "<td>" . $row["bloodgroup"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . $row["locality"] . "</td>";
            echo "<td>" . $from->diff($to)->y . "</td>";

            echo "</tr>";
        }
        echo "</table></div>";
    } else {
        echo "<center><h4><p>We're sorry! Our Database Currently has no volunteers for the specified blood type.</p>";
        echo "<p>Sorry for the inconvenience caused.</p></center></h4>";
    }


    $con->close();
    ?>

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
