<?php
    require 'connection.php';
    session_start();
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $contact=mysqli_real_escape_string($con,$_POST['contact']);
    //$city=mysqli_real_escape_string($con,$_POST['city']);
    $bgroup=$_POST['bloodgroup'];
	$locality=$_POST['locality'];
	$gender=$_POST['gender'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$date = "$year-$month-$day";
	
	
    $duplicate_user_query="select id from volunteers where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $user_registration_query="insert into volunteers(name,email,password,contact,locality,gender,bloodgroup,date) values ('$name','$email','$password','$contact','$locality','$gender','$bgroup','$date')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        echo "User successfully registered";
		
		$user_authentication_query="select id from volunteers where email='$email'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
	$row=mysqli_fetch_array($user_authentication_result);
    $id = $row['id'];
    
		// Message Body
      
	  $from = "Online BloodBank ";
        
        $headers = "From: " . strip_tags($from) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
        
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
       
       $message = '<html><body>';
	   
		$message .= '<p>Hello' . $name . ',</p>';
		$message .= '<p>Thank You for volunteering in online Blood Portal</p>';
		$message .= '<p> Please ';
		$message .= "<a href='http://www.onlinebloodportak.tk/verification.php?email=".$email."+&id=".$id."'>Click Here</a>to verify your account.</p>";
		$message .= '<h4>Best Regards.</h4>';
		$message .= '</body></html>';
	   
	   
	   
        

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail($email, 'Verification required for Online Blood Portal', $message,$headers);
	  
	  
	  // Message body ends
        ?>
        <meta http-equiv="refresh" content="0;url=verify.php" />
        <?php
    }
    
?>