<?php
require 'connection.php';
session_start();
$email = mysqli_real_escape_string($con, $_POST['email']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
    echo "Incorrect email. Redirecting you back to login page...";
    ?>
    <meta http-equiv="refresh" content="2;url=login.php"/>
    <?php
}
$password = md5(md5(mysqli_real_escape_string($con, $_POST['password'])));
if (strlen($password) < 6) {
    echo "Password should have atleast 6 characters. Redirecting you back to login page...";
    ?>
    <meta http-equiv="refresh" content="2;url=login.php"/>
    <?php
}
//possible sql injection; it's better to use prepare and bind method;
$user_authentication_query = "select id,email,name,contact,locality,verify from volunteers where email=? and password=?";
$stmt = mysqli_prepare($con,$user_authentication_query) or die(mysqli_error($con));
// bind parameters
$stmt->bind_param("ss", $email,$password);
// execute query
$stmt->execute();
$user_authentication_result = $stmt->get_result(); // get the mysqli result

$rows_fetched = mysqli_num_rows($result);
if ($rows_fetched == 0) {
    //no user
    //redirecting to same login page
    ?>
    <script>
        window.alert("Wrong username or password");
    </script>
    <meta http-equiv="refresh" content="1;url=login.php"/>
    <?php
    //header('location: login');
    //echo "Wrong email or password.";
} else {
    $row = mysqli_fetch_array($user_authentication_result);
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $row['name'];
    $_SESSION['con'] = $row['contact'];
    $_SESSION['locality'] = $row['locality'];
    $_SESSION['verify'] = $row['verify'];

    $_SESSION['id'] = $row['id'];  //user id
    header('location: index.php');
}

?>