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
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <h1><b>Find Donor</b></h1>
                        <form method="post" action="fetch.php">
                            
                          <!--   <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div> -->
							
                            <div class="form-group">
                                <select class="form-control" name="bloodgroup" required="true">
								<option value="">Blood Group required?</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								</select>

                            </div>
						

                            
							 <div class="form-group">
                                <select class="form-control" name="locality"  required="true">
								<option value="">Blood Required at? </option>
							<option value="Aamwala">Aamwala</option>
<option value="Adhoiwala">Adhoiwala</option>
<option value="Ajabpur Kalan">Ajabpur Kalan</option>
<option value="Ajabpur Khurd">Ajabpur Khurd</option>
<option value="Ajit Prasad Nagar">Ajit Prasad Nagar</option>
<option value="Aman Vihar">Aman Vihar</option>
<option value="Auli Village">Auli Village</option>
<option value="Balawala">Balawala</option>
<option value="Balliwala">Balliwala</option>
<option value="Ballupur">Ballupur</option>
<option value="Banjarawala">Banjarawala</option>
<option value="Bhagwant Pur">Bhagwant Pur</option>
<option value="Bhaniawala">Bhaniawala</option>
<option value="Bhauwala">Bhauwala</option>
<option value="Bhogpur">Bhogpur</option>
<option value="Bilas Pur Kandali">Bilas Pur Kandali</option>
<option value="Brahmanwala">Brahmanwala</option>
<option value="Chakrata Road">Chakrata Road</option>
<option value="Chaman Vihar">Chaman Vihar</option>
<option value="Chandrabani">Chandrabani</option>
<option value="Chironwali">Chironwali</option>
<option value="Chukkuwala">Chukkuwala</option>
<option value="Clement Town">Clement Town</option>
<option value="Dakra">Dakra</option>
<option value="Dalanwala">Dalanwala</option>
<option value="Danda Lakhond">Danda Lakhond</option>
<option value="Deeplok Colony">Deeplok Colony</option>
<option value="Defence Colony">Defence Colony</option>
<option value="Dhamawala Mohalla">Dhamawala Mohalla</option>
<option value="Dharampur">Dharampur</option>
<option value="Dhaulas">Dhaulas</option>
<option value="Dhulkot Mafi">Dhulkot Mafi</option>
<option value="Doiwala">Doiwala</option>
<option value="Gajiyawala">Gajiyawala</option>
<option value="Ganeshpur">Ganeshpur</option>
<option value="Garhi Cantt">Garhi Cantt</option>
<option value="Ghangora">Ghangora</option>
<option value="GMS Road">GMS Road</option>
<option value="GMS Road">GMS Road</option>
<option value="Govind Garh">Govind Garh</option>
<option value="Gujrara Karan Pur">Gujrara Karan Pur</option>
<option value="Haridwar Byepass">Haridwar Byepass</option>
<option value="Herbertpur">Herbertpur</option>
<option value="Horawala">Horawala</option>
<option value="Indira Nagar">Indira Nagar</option>
<option value="Jagatpur">Jagatpur</option>
<option value="Jakhan">Jakhan</option>
<option value="Jauligrant">Jauligrant</option>
<option value="Jogiwala">Jogiwala</option>
<option value="Kailashpuri">Kailashpuri</option>
<option value="Kandoli">Kandoli</option>
<option value="Kanwali">Kanwali</option>
<option value="Kaonli">Kaonli</option>
<option value="Karanpur">Karanpur</option>
<option value="Kargi">Kargi</option>
<option value="Kaulagarh">Kaulagarh</option>
<option value="Kedarpur">Kedarpur</option>
<option value="Kewal Vihar">Kewal Vihar</option>
<option value="Kharakhet">Kharakhet</option>
<option value="Khurbura">Khurbura</option>
<option value="Kidduwala">Kidduwala</option>
<option value="Kishanpur">Kishanpur</option>
<option value="Krishna Nagar">Krishna Nagar</option>
<option value="Kuwan Wala">Kuwan Wala</option>
<option value="Laxman Chowk">Laxman Chowk</option>
<option value="Majra">Majra</option>
<option value="Malsi">Malsi</option>
<option value="Mehuwala">Mehuwala</option>
<option value="Misraspatti">Misraspatti</option>
<option value="Mohkampur">Mohkampur</option>
<option value="Mothrowala">Mothrowala</option>
<option value="Mussoorie">Mussoorie</option>
<option value="Mussoorie Road">Mussoorie Road</option>
<option value="Nanda Ki Chowki">Nanda Ki Chowki</option>
<option value="Naugaon">Naugaon</option>
<option value="Nawada">Nawada</option>
<option value="Nehrugram">Nehrugram</option>
<option value="Niranjanpur">Niranjanpur</option>
<option value="Palampur">Palampur</option>
<option value="Paltan Bazaar">Paltan Bazaar</option>
<option value="Panditwari">Panditwari</option>
<option value="Patel Nagar">Patel Nagar</option>
<option value="Patthri Bagh">Patthri Bagh</option>
<option value="Phulsani">Phulsani</option>
<option value="Pondha">Pondha</option>
<option value="Prem Nagar">Prem Nagar</option>
<option value="Race Course">Race Course</option>
<option value="Raipur">Raipur</option>
<option value="Rajender Nagar">Rajender Nagar</option>
<option value="Rajeshwar Nagar Phase 1">Rajeshwar Nagar Phase 1</option>
<option value="Rajeshwarnagar">Rajeshwarnagar</option>
<option value="Rajpur">Rajpur</option>
<option value="Rajpur Road">Rajpur Road</option>
<option value="Rampur">Rampur</option>
<option value="Ranipokhari">Ranipokhari</option>
<option value="Rishikesh">Rishikesh</option>
<option value="Saharanpur Road">Saharanpur Road</option>
<option value="Sahaspur">Sahaspur</option>
<option value="Sahastradhara">Sahastradhara</option>
<option value="Sahastradhara Road">Sahastradhara Road</option>
<option value="Seema Dwar">Seema Dwar</option>
<option value="Selakui">Selakui</option>
<option value="Shakti Colony">Shakti Colony</option>
<option value="Shakti Enclave">Shakti Enclave</option>
<option value="Shimla Bypass Road">Shimla Bypass Road</option>
<option value="Shimla Road">Shimla Road</option>
<option value="Shriram Puram Colony">Shriram Puram Colony</option>
<option value="Shyampur">Shyampur</option>
<option value="Singhniwala">Singhniwala</option>
<option value="Subhash Nagar">Subhash Nagar</option>
<option value="Subhash Road">Subhash Road</option>
<option value="Sudhowala">Sudhowala</option>
<option value="Teg Bahadur Road">Teg Bahadur Road</option>
<option value="Thakurpur">Thakurpur</option>
<option value="Turner Road">Turner Road</option>
<option value="Vasant Vihar">Vasant Vihar</option>
<option value="Vijay Park">Vijay Park</option>
<option value="Vikas Nagar">Vikas Nagar</option>
<option value="Other">Other</option>
							</select>
							</div>
							
							<h3>
							<center> Your Details</center> 
							</h3>
							
							<div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact Number" required="true">
                            </div>
							
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Place Request">
                            </div>
							<div class="panel panel-info">
							<div class="panel-heading">
							NOTE: You will be given a database of selected donors as well as a request will be shown in the Blood request page.</div>
							</div>
                        </form>
                    </div>
                </div>
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

        </div>
    </body>
</html>
