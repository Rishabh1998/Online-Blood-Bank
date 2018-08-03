
<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
					   
                       <a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-tint" style="color:white"></span> OnlineBloodBank</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
					   <li><a href="facts.php"><span class="glyphicon glyphicon-book"></span> Blood Facts </a></li>
							<li><a href="finddonor.php"><span class="glyphicon glyphicon-search"></span> Find Donor</a></li>
							<li><a href="requests.php"><span class="glyphicon glyphicon-list-alt"></span> Blood Requests</a></li>
							
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Donate Blood</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>


<?php
if(isset($_SESSION['verify']))
if($_SESSION['verify']=="false"){
?>

<div class="panel-group">
<div class="panel panel-danger">
<div class="panel-heading">You are not verified.Please check your email to verify yourself.</div>
</div>


<?php
    }
?>