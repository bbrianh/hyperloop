<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hyperloop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">
    <link rel="stylesheet" href="./index_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./index_assets/css/animate.css">
    <link rel="stylesheet" href="./index_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./index_assets/css/aos.css">
    <link rel="stylesheet" href="./index_assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="./index_assets/css/fancybox.min.css">
    <link rel="stylesheet" href="./index_assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="./index_assets/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="./index_assets/css/bootstrap-datepicker.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Theme Style -->
    <link rel="stylesheet" href="./index_assets/css/style.css">
  </head>
  <body>
    
    <header class="site-header js-site-header">
      <div class="container-fluid">
        <div class="row align-items-center">
		  <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="main.html">Hyperloop</a></div>
          <div class="col-6 col-lg-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6 mx-auto">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="index.html">Home</a></li>
						<li><a href="reservation.html">Reservation</a></li>
                        <li><a href="">Veiw Booking</a></li>
						<li><a href="about.html">About</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->
	
		
<!-- Modal -->
	<div class="modal fade" id="availabilityModal" role="dialog">
	<div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
			<h4 style="text-align:left">Availabilty</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
				<p>Departure:Macau</p>
				<p>Destination:London</p>
				<p>Departure date: 18/3/2019</p>
				<p>Amount: 1 adult(s), 1 children</p>
				<p>Tickets remaining:36</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-block text-white" data-dismiss="modal" >Confirm</button>
        </div>
      </div>
	  </div>
	  </div>
<!-- Modal-->

    <section class="site-hero overlay" style="background-image: url(./index_assets/images/index_back.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <h1 class="heading">Welcome guest</h1>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->

    <section class="section bg-light pb-0"  >
      <div class="container">
       
        <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

            <form action="#">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin_date" class="font-weight-bold text-black">Departure</label>
                  <div class="field-icon-wrap">
                    <select name="" class="form-control">
					<option disabled selected value> --Select-- </option>
                          <option value="">Macau</option>
                          <option value="">Hong Kong</option>
                          <option value="">London</option>
                          <option value="">ShangHai</option>
						  <option value="">BeiJing</option>
						  <option value="">NewYork</option>
                        </select>
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkout_date" class="font-weight-bold text-black">Destination</label>
                  <div class="field-icon-wrap">
					<select name="" class="form-control">
					<option disabled selected value> --Select-- </option>
                          <option value="">Macau</option>
                          <option value="">Hong Kong</option>
                          <option value="">London</option>
                          <option value="">ShangHai</option>
						  <option value="">BeiJing</option>
						  <option value="">NewYork</option>
                        </select>
                  </div>
                </div>
				
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="adults" class="font-weight-bold text-black">Adults</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="adults" class="form-control">
                          <option selected value="">0</option>
						  <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="children" class="font-weight-bold text-black">Children</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="children" class="form-control">
                          <option selected value="">0</option>
						  <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
				<div>
				
				</div>
				
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block text-white" data-toggle="modal" data-target="#availabilityModal">Check Availabilty</button>	  	  
                </div>
				
				<div class="col-md-6 col-lg-3 align-self-center" style="top:10px;">
					<a href="reservation.html" class="btn btn-primary text-white py-2 mr-3">reserve now</a></span>
				</div>
              </div>
            </form>
          </div>


        </div>
      </div>
	  
	   
      
    </div>
  </div>
    </section>

    <section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
            
            <img src="./index_assets/images/map.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Welcome!</h2>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <span class="mr-3 font-family-serif"><em>or</em></span> <a href="https://vimeo.com/channels/staffpicks/93951774"  data-fancybox class="text-uppercase letter-spacing-1">See video</a></p>
          </div>
          
        </div>
      </div>
    </section>
	
	<section class="py-5 bg-light" id="3">
      <div class="container">
		<h1>Booking information</h1>
		<table class="table">
			<?php 
					//db setting
					$servername = "localhost";
					$username = "root";
					$password = "root";
					$dbname = "hyperloop";
	
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}

					$sql= "select * from BookingTable";
					$response = $conn->query($sql);
						echo "<thead>";
							echo "</tr>";
								echo "<th>Departure</th>";
								echo "<th>Destination</th>";
								echo "<th>Date</th>";
								echo "<th>Phone</th>";
								echo "<th>Email</th>";
								echo "<th>Adult</th>";
								echo "<th>Children</th>";
							echo "</tr>";
						echo "</thead>";
						echo "<tbody>";	
							while($row = $response->fetch_assoc()) {                     
								echo "<tr>";
									echo "<td>$row[departure]</td>";     //field name
									echo "<td>$row[destination]</td>";
									echo "<td>$row[date]</td>";
									echo "<td>$row[phone]</td>";
									echo "<td>$row[email]</td>";
									echo "<td>$row[adult]</td>";
									echo "<td>$row[children]</td>";
								echo "</tr>";
							}
						echo "</tbody>";
			?>

		</table>
      </div>
    </section>
	
	<section class="section bg-image overlay" style="background-image: url('./index_assets/images/hero_4.jpg');">
        <div class="container" >
          <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
              <h2 class="text-white font-weight-bold">The Best Travel Mode. Reserve Now!</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
              <a href="reservation.html" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
            </div>
          </div>
        </div>
      </section>

    <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">The Carts &amp; Suites</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
            <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> Avenida de Horta e Costa,<br> No.7, Macau</span></p>
            <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> (+853) 6322 2440</span></p>
            <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> zaq12wsx32866@gmail.com</span></p>
          </div>
          <div class="col-md-3 mb-5">
            <p>Sign up for our newsletter</p>
            <form action="#" class="footer-newsletter">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email...">
                <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5">
          <p class="col-md-6 text-left">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
            
          <p class="col-md-6 text-right social">
            <a href="#"><span class="fa fa-tripadvisor"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-vimeo"></span></a>
          </p>
        </div>
      </div>
    </footer>
    
    <script src="./index_assets/js/jquery-3.3.1.min.js"></script>
    <script src="./index_assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="./index_assets/js/popper.min.js"></script>
    <script src="./index_assets/js/bootstrap.min.js"></script>
    <script src="./index_assets/js/owl.carousel.min.js"></script>
    <script src="./index_assets/js/jquery.stellar.min.js"></script>
    <script src="./index_assets/js/jquery.fancybox.min.js"></script>
	<script src="./index_assets/js/bootstrap-datepicker.js"></script>
    
    
    <script src="./index_assets/js/aos.js"></script>
    
    <script src="./index_assets/js/jquery.timepicker.min.js"></script> 

    

    <script src="./index_assets/js/main.js"></script>
  </body>
</html>