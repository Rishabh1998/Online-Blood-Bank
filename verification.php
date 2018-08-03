<?php
session_start();
    require 'connection.php';
$email = "";
$id = "";

if($_SERVER["REQUEST_METHOD"]=="GET"){
	$email = $_GET['email'];
	$id = $_GET['id'];
	$verification="update volunteers set verify='true' where email='$email' AND id = '$id'";
    $ver_result=mysqli_query($con,$verification) or die(mysqli_error($con));
	

$user_authentication_query="select name,contact,locality,verify from volunteers where email='$email'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
	$row=mysqli_fetch_array($user_authentication_result);
	$_SESSION['verify']=$row['verify'];
	$_SESSION['email']=$email;
	$_SESSION['id']=$id;
	$_SESSION['name']=$row['name'];
		$_SESSION['con']=$row['contact'];
		$_SESSION['locality']=$row['locality'];
	
}	
?>

	<meta http-equiv="refresh" content="0;url=index.php" />