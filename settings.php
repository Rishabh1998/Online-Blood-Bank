<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
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
		
		
		
	<script>
	function save(){
		alert("Details have been saved");
	}
	</script>
	
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
			
			<!-- navbar test start -->
			<nav class="navbar navabar-fixed-top navbar-default">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar2">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="#" class="navbar-brand">Settings</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar2">
                       <ul class="nav navbar-nav">
							<li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> General Settings</a></li>
                           <li><a href="password.php"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>
                         
                           
                           
                       </ul>
                   </div>
               </div>
</nav>
			

<!-- navbar test end -->
			
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <h1><b>General Settings</b></h1>
                        <form method="post" action="user_changes.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder=<?php echo $_SESSION['name'] ?> >
                            </div>
                            
                           
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder=<?php echo $_SESSION['con'] ?> >
								
                            </div>
                          <!--   <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div> -->
							
							
							
							
							
							 <div class="form-group">
                                <select class="form-control" name="locality"  >
							
<option value="Aamwala" <?php if($_SESSION['locality']=="Aamwala") echo "selected"; ?> >Aamwala</option>
<option value="Adhoiwala" <?php if($_SESSION['locality']=="Adhoiwala") echo "selected"; ?> >Adhoiwala</option>
<option value="Ajabpur Kalan" <?php if($_SESSION['locality']=="Ajabpur Kalan") echo "selected"; ?> >Ajabpur Kalan</option>
<option value="Ajabpur Khurd" <?php if($_SESSION['locality']=="Ajabpur Khurd") echo "selected"; ?> >Ajabpur Khurd</option>
<option value="Ajit Prasad Nagar" <?php if($_SESSION['locality']=="Ajit Prasad Nagar") echo "selected"; ?> >Ajit Prasad Nagar</option>
<option value="Aman Vihar" <?php if($_SESSION['locality']=="Aman Vihar") echo "selected"; ?> >Aman Vihar</option>
<option value="Auli Village" <?php if($_SESSION['locality']=="Auli Village") echo "selected"; ?> >Auli Village</option>
<option value="Balawala" <?php if($_SESSION['locality']=="Balawala") echo "selected"; ?> >Balawala</option>
<option value="Balliwala" <?php if($_SESSION['locality']=="Balliwala") echo "selected"; ?> >Balliwala</option>
<option value="Ballupur" <?php if($_SESSION['locality']=="Ballupur") echo "selected"; ?> >Ballupur</option>
<option value="Banjarawala" <?php if($_SESSION['locality']=="Banjarawala") echo "selected"; ?> >Banjarawala</option>
<option value="Bhagwant Pur" <?php if($_SESSION['locality']=="Bhagwant Pur") echo "selected"; ?> >Bhagwant Pur</option>
<option value="Bhaniawala" <?php if($_SESSION['locality']=="Bhaniawala") echo "selected"; ?> >Bhaniawala</option>
<option value="Bhauwala" <?php if($_SESSION['locality']=="Bhauwala") echo "selected"; ?> >Bhauwala</option>
<option value="Bhogpur" <?php if($_SESSION['locality']=="Bhogpur") echo "selected"; ?> >Bhogpur</option>
<option value="Bilas Pur Kandali" <?php if($_SESSION['locality']=="Bilas Pur Kandali") echo "selected"; ?> >Bilas Pur Kandali</option>
<option value="Brahmanwala" <?php if($_SESSION['locality']=="Brahmanwala") echo "selected"; ?> >Brahmanwala</option>
<option value="Chakrata Road" <?php if($_SESSION['locality']=="Chakrata Road") echo "selected"; ?> >Chakrata Road</option>
<option value="Chaman Vihar" <?php if($_SESSION['locality']=="Chaman Vihar") echo "selected"; ?> >Chaman Vihar</option>
<option value="Chandrabani" <?php if($_SESSION['locality']=="Chandrabani") echo "selected"; ?> >Chandrabani</option>
<option value="Chironwali" <?php if($_SESSION['locality']=="Chironwali") echo "selected"; ?> >Chironwali</option>
<option value="Chukkuwala" <?php if($_SESSION['locality']=="Chukkuwala") echo "selected"; ?> >Chukkuwala</option>
<option value="Clement Town" <?php if($_SESSION['locality']=="Clement Town") echo "selected"; ?> >Clement Town</option>
<option value="Dakra" <?php if($_SESSION['locality']=="Dakra") echo "selected"; ?> >Dakra</option>
<option value="Dalanwala" <?php if($_SESSION['locality']=="Dalanwala") echo "selected"; ?> >Dalanwala</option>
<option value="Danda Lakhond" <?php if($_SESSION['locality']=="Danda Lakhond") echo "selected"; ?> >Danda Lakhond</option>
<option value="Deeplok Colony" <?php if($_SESSION['locality']=="Deeplok Colony") echo "selected"; ?> >Deeplok Colony</option>
<option value="Defence Colony" <?php if($_SESSION['locality']=="Defence Colony") echo "selected"; ?> >Defence Colony</option>
<option value="Dhamawala Mohalla" <?php if($_SESSION['locality']=="Dhamawala Mohalla") echo "selected"; ?> >Dhamawala Mohalla</option>
<option value="Dharampur" <?php if($_SESSION['locality']=="Dharampur") echo "selected"; ?> >Dharampur</option>
<option value="Dhaulas" <?php if($_SESSION['locality']=="Dhaulas") echo "selected"; ?> >Dhaulas</option>
<option value="Dhulkot Mafi" <?php if($_SESSION['locality']=="Dhulkot Mafi") echo "selected"; ?> >Dhulkot Mafi</option>
<option value="Doiwala" <?php if($_SESSION['locality']=="Doiwala") echo "selected"; ?> >Doiwala</option>
<option value="Gajiyawala" <?php if($_SESSION['locality']=="Gajiyawala") echo "selected"; ?> >Gajiyawala</option>
<option value="Ganeshpur" <?php if($_SESSION['locality']=="Ganeshpur") echo "selected"; ?> >Ganeshpur</option>
<option value="Garhi Cantt" <?php if($_SESSION['locality']=="Garhi Cantt") echo "selected"; ?> >Garhi Cantt</option>
<option value="Ghangora" <?php if($_SESSION['locality']=="Ghangora") echo "selected"; ?> >Ghangora</option>
<option value="GMS Road" <?php if($_SESSION['locality']=="GMS Road") echo "selected"; ?> >GMS Road</option>
<option value="GMS Road" <?php if($_SESSION['locality']=="GMS Road") echo "selected"; ?> >GMS Road</option>
<option value="Govind Garh" <?php if($_SESSION['locality']=="Govind Garh") echo "selected"; ?> >Govind Garh</option>
<option value="Gujrara Karan Pur" <?php if($_SESSION['locality']=="Gujrara Karan Pur") echo "selected"; ?> >Gujrara Karan Pur</option>
<option value="Haridwar Byepass" <?php if($_SESSION['locality']=="Haridwar Byepass") echo "selected"; ?> >Haridwar Byepass</option>
<option value="Herbertpur" <?php if($_SESSION['locality']=="Herbertpur") echo "selected"; ?> >Herbertpur</option>
<option value="Horawala" <?php if($_SESSION['locality']=="Horawala") echo "selected"; ?> >Horawala</option>
<option value="Indira Nagar" <?php if($_SESSION['locality']=="Indira Nagar") echo "selected"; ?> >Indira Nagar</option>
<option value="Jagatpur" <?php if($_SESSION['locality']=="Jagatpur") echo "selected"; ?> >Jagatpur</option>
<option value="Jakhan" <?php if($_SESSION['locality']=="Jakhan") echo "selected"; ?> >Jakhan</option>
<option value="Jauligrant" <?php if($_SESSION['locality']=="Jauligrant") echo "selected"; ?> >Jauligrant</option>
<option value="Jogiwala" <?php if($_SESSION['locality']=="Jogiwala") echo "selected"; ?> >Jogiwala</option>
<option value="Kailashpuri" <?php if($_SESSION['locality']=="Kailashpuri") echo "selected"; ?> >Kailashpuri</option>
<option value="Kandoli" <?php if($_SESSION['locality']=="Kandoli") echo "selected"; ?> >Kandoli</option>
<option value="Kanwali" <?php if($_SESSION['locality']=="Kanwali") echo "selected"; ?> >Kanwali</option>
<option value="Kaonli" <?php if($_SESSION['locality']=="Kaonli") echo "selected"; ?> >Kaonli</option>
<option value="Karanpur" <?php if($_SESSION['locality']=="Karanpur") echo "selected"; ?> >Karanpur</option>
<option value="Kargi" <?php if($_SESSION['locality']=="Kargi") echo "selected"; ?> >Kargi</option>
<option value="Kaulagarh" <?php if($_SESSION['locality']=="Kaulagarh") echo "selected"; ?> >Kaulagarh</option>
<option value="Kedarpur" <?php if($_SESSION['locality']=="Kedarpur") echo "selected"; ?> >Kedarpur</option>
<option value="Kewal Vihar" <?php if($_SESSION['locality']=="Kewal Vihar") echo "selected"; ?> >Kewal Vihar</option>
<option value="Kharakhet" <?php if($_SESSION['locality']=="Kharakhet") echo "selected"; ?> >Kharakhet</option>
<option value="Khurbura" <?php if($_SESSION['locality']=="Khurbura") echo "selected"; ?> >Khurbura</option>
<option value="Kidduwala" <?php if($_SESSION['locality']=="Kidduwala") echo "selected"; ?> >Kidduwala</option>
<option value="Kishanpur" <?php if($_SESSION['locality']=="Kishanpur") echo "selected"; ?> >Kishanpur</option>
<option value="Krishna Nagar" <?php if($_SESSION['locality']=="Krishna Nagar") echo "selected"; ?> >Krishna Nagar</option>
<option value="Kuwan Wala" <?php if($_SESSION['locality']=="Kuwan Wala") echo "selected"; ?> >Kuwan Wala</option>
<option value="Laxman Chowk" <?php if($_SESSION['locality']=="Laxman Chowk") echo "selected"; ?> >Laxman Chowk</option>
<option value="Majra" <?php if($_SESSION['locality']=="Majra") echo "selected"; ?> >Majra</option>
<option value="Malsi" <?php if($_SESSION['locality']=="Malsi") echo "selected"; ?> >Malsi</option>
<option value="Mehuwala" <?php if($_SESSION['locality']=="Mehuwala") echo "selected"; ?> >Mehuwala</option>
<option value="Misraspatti" <?php if($_SESSION['locality']=="Misraspatti") echo "selected"; ?> >Misraspatti</option>
<option value="Mohkampur" <?php if($_SESSION['locality']=="Mohkampur") echo "selected"; ?> >Mohkampur</option>
<option value="Mothrowala" <?php if($_SESSION['locality']=="Mothrowala") echo "selected"; ?> >Mothrowala</option>
<option value="Mussoorie" <?php if($_SESSION['locality']=="Mussoorie") echo "selected"; ?> >Mussoorie</option>
<option value="Mussoorie Road" <?php if($_SESSION['locality']=="Mussoorie Road") echo "selected"; ?> >Mussoorie Road</option>
<option value="Nanda Ki Chowki" <?php if($_SESSION['locality']=="Nanda Ki Chowki") echo "selected"; ?> >Nanda Ki Chowki</option>
<option value="Naugaon" <?php if($_SESSION['locality']=="Naugaon") echo "selected"; ?> >Naugaon</option>
<option value="Nawada" <?php if($_SESSION['locality']=="Nawada") echo "selected"; ?> >Nawada</option>
<option value="Nehrugram" <?php if($_SESSION['locality']=="Nehrugram") echo "selected"; ?> >Nehrugram</option>
<option value="Niranjanpur" <?php if($_SESSION['locality']=="Niranjanpur") echo "selected"; ?> >Niranjanpur</option>
<option value="Palampur" <?php if($_SESSION['locality']=="Palampur") echo "selected"; ?> >Palampur</option>
<option value="Paltan Bazaar" <?php if($_SESSION['locality']=="Paltan Bazaar") echo "selected"; ?> >Paltan Bazaar</option>
<option value="Panditwari" <?php if($_SESSION['locality']=="Panditwari") echo "selected"; ?> >Panditwari</option>
<option value="Patel Nagar" <?php if($_SESSION['locality']=="Patel Nagar") echo "selected"; ?> >Patel Nagar</option>
<option value="Patthri Bagh" <?php if($_SESSION['locality']=="Patthri Bagh") echo "selected"; ?> >Patthri Bagh</option>
<option value="Phulsani" <?php if($_SESSION['locality']=="Phulsani") echo "selected"; ?> >Phulsani</option>
<option value="Pondha" <?php if($_SESSION['locality']=="Pondha") echo "selected"; ?> >Pondha</option>
<option value="Prem Nagar" <?php if($_SESSION['locality']=="Prem Nagar") echo "selected"; ?> >Prem Nagar</option>
<option value="Race Course" <?php if($_SESSION['locality']=="Race Course") echo "selected"; ?> >Race Course</option>
<option value="Raipur" <?php if($_SESSION['locality']=="Raipur") echo "selected"; ?> >Raipur</option>
<option value="Rajender Nagar" <?php if($_SESSION['locality']=="Rajender Nagar") echo "selected"; ?> >Rajender Nagar</option>
<option value="Rajeshwar Nagar Phase 1" <?php if($_SESSION['locality']=="Rajeshwar Nagar Phase 1") echo "selected"; ?> >Rajeshwar Nagar Phase 1</option>
<option value="Rajeshwarnagar" <?php if($_SESSION['locality']=="Rajeshwarnagar") echo "selected"; ?> >Rajeshwarnagar</option>
<option value="Rajpur" <?php if($_SESSION['locality']=="Rajpur") echo "selected"; ?> >Rajpur</option>
<option value="Rajpur Road" <?php if($_SESSION['locality']=="Rajpur Road") echo "selected"; ?> >Rajpur Road</option>
<option value="Rampur" <?php if($_SESSION['locality']=="Rampur") echo "selected"; ?> >Rampur</option>
<option value="Ranipokhari" <?php if($_SESSION['locality']=="Ranipokhari") echo "selected"; ?> >Ranipokhari</option>
<option value="Rishikesh" <?php if($_SESSION['locality']=="Rishikesh") echo "selected"; ?> >Rishikesh</option>
<option value="Saharanpur Road" <?php if($_SESSION['locality']=="Saharanpur Road") echo "selected"; ?> >Saharanpur Road</option>
<option value="Sahaspur" <?php if($_SESSION['locality']=="Sahaspur") echo "selected"; ?> >Sahaspur</option>
<option value="Sahastradhara" <?php if($_SESSION['locality']=="Sahastradhara") echo "selected"; ?> >Sahastradhara</option>
<option value="Sahastradhara Road" <?php if($_SESSION['locality']=="Sahastradhara Road") echo "selected"; ?> >Sahastradhara Road</option>
<option value="Seema Dwar" <?php if($_SESSION['locality']=="Seema Dwar") echo "selected"; ?> >Seema Dwar</option>
<option value="Selakui" <?php if($_SESSION['locality']=="Selakui") echo "selected"; ?> >Selakui</option>
<option value="Shakti Colony" <?php if($_SESSION['locality']=="Shakti Colony") echo "selected"; ?> >Shakti Colony</option>
<option value="Shakti Enclave" <?php if($_SESSION['locality']=="Shakti Enclave") echo "selected"; ?> >Shakti Enclave</option>
<option value="Shimla Bypass Road" <?php if($_SESSION['locality']=="Shimla Bypass Road") echo "selected"; ?> >Shimla Bypass Road</option>
<option value="Shimla Road" <?php if($_SESSION['locality']=="Shimla Road") echo "selected"; ?> >Shimla Road</option>
<option value="Shriram Puram Colony" <?php if($_SESSION['locality']=="Shriram Puram Colony") echo "selected"; ?> >Shriram Puram Colony</option>
<option value="Shyampur" <?php if($_SESSION['locality']=="Shyampur") echo "selected"; ?> >Shyampur</option>
<option value="Singhniwala" <?php if($_SESSION['locality']=="Singhniwala") echo "selected"; ?> >Singhniwala</option>
<option value="Subhash Nagar" <?php if($_SESSION['locality']=="Subhash Nagar") echo "selected"; ?> >Subhash Nagar</option>
<option value="Subhash Road" <?php if($_SESSION['locality']=="Subhash Road") echo "selected"; ?> >Subhash Road</option>
<option value="Sudhowala" <?php if($_SESSION['locality']=="Sudhowala") echo "selected"; ?> >Sudhowala</option>
<option value="Teg Bahadur Road" <?php if($_SESSION['locality']=="Teg Bahadur Road") echo "selected"; ?> >Teg Bahadur Road</option>
<option value="Thakurpur" <?php if($_SESSION['locality']=="Thakurpur") echo "selected"; ?> >Thakurpur</option>
<option value="Turner Road" <?php if($_SESSION['locality']=="Turner Road") echo "selected"; ?> >Turner Road</option>
<option value="Vasant Vihar" <?php if($_SESSION['locality']=="Vasant Vihar") echo "selected"; ?> >Vasant Vihar</option>
<option value="Vijay Park" <?php if($_SESSION['locality']=="Vijay Park") echo "selected"; ?> >Vijay Park</option>
<option value="Vikas Nagar" <?php if($_SESSION['locality']=="Vikas Nagar") echo "selected"; ?> >Vikas Nagar</option>
<option value="Other" <?php if($_SESSION['locality']=="Other") echo "selected"; ?> >Vikas Nagar</option>


							</select>
							</div>
                            <div class="form-group">
                                <input type="submit" onclick ="save()" class="btn btn-primary" value="Save Changes">
                            </div>
                        </form>
                    </div>
                </div>
            <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
			   <a href="about.php"><span class="glyphicon glyphicon-question-sign"></span> About Us </a> | 
			   <a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us </a></li>
                   <p>Copyright &copy Online BloodBank Portal. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
