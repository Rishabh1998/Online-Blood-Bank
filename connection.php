<?php
$con=mysqli_connect("localhost","root","","") or die(mysqli_error($con));
//$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$sql = "CREATE DATABASE Volunteer";
if($con->query($sql) === TRUE){
//echo "DATABASE created successfully <br>";
}
else {
//echo "DATABASE error $con->error";
}

$con = new mysqli("localhost","root","","volunteer");

$sql = "CREATE TABLE volunteers(id int(11) NOT NULL,name varchar(255) NOT NULL,email varchar(255) NOT NULL,password varchar(255) NOT NULL,contact varchar(255) NOT NULL,locality varchar(255) NOT NULL,gender varchar(10),bloodgroup varchar(4),date DATE)";


if($con->query($sql) === TRUE){
//echo "Table created successfully";
}
else {
//echo "TABLE error $con->error";
}

?>
