<div class="container">
                   <center>
                   <div id="bannerContent">
				   <?php
                           if(isset($_SESSION['email'])){
                           ?>
						   <!-- If logged in -->
						   <h1>Your Blood can Save a life.</h1>
                       <p>Look here for people requesting for blood and contact them. </p>
					   <a href="requests.php" class="btn btn-danger">See Blood requests</a>
						   <?php
                           }else{
                            ?>
                       <h1>Your Blood Can Save a life.</h1>
                       <p>Be part of a community where you can help save a life.</p>
                       <a href="signup.php" class="btn btn-danger">Volunteer Now</a>
					   <?php
                           }
                           ?>
                   </div>
                   </center>
               </div>