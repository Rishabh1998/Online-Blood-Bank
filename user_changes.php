<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }  
	
    $name="";
	$contact="";
	$locality="";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$name = mysqli_real_escape_string($con,$_POST['name']);
		$contact = mysqli_real_escape_string($con,$_POST['contact']);
		$locality = $_POST['locality'];
	}
    $email=$_SESSION['email'];
    
	
    
    
    if($name!=""){
        $update_password_query="update volunteers set name='$name' where email='$email'";
        $update_password_result=mysqli_query($con,$update_password_query) or die(mysqli_error($con));
        echo "Your name has been updated.";
		$_SESSION['name'] = $name;
		
	}
	if($contact!=""){
        $update_password_query="update volunteers set contact='$contact' where email='$email'";
        $update_password_result=mysqli_query($con,$update_password_query) or die(mysqli_error($con));
        echo "Your contact has been updated.";
		$_SESSION['con'] = $contact;
	}
	if($locality!=""){
        $update_password_query="update volunteers set locality='$locality' where email='$email'";
        $update_password_result=mysqli_query($con,$update_password_query) or die(mysqli_error($con));
        echo "Your locality has been updated.";
		$_SESSION['locality'] = $locality;
	}

        ?>
		<meta http-equiv="refresh" content="0;url=settings.php" />
		
       
        
        
        <?php
        //header('location:settings.php'); 
    
?>