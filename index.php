<?php 

include('header.php'); 

$sql = "SELECT * FROM movies";
$result = mysqli_query($conn,$sql) or die ("Conn failed: $sql");

?>
</head>
<link rel="stylesheet" href="assets/bootstrap/css/slideshow.css">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<body>
    <?php include('navbar.php'); ?>

    <div id="fw_al_001" class="carousel slide ps_slide_y ps_indicators_y swipe_y ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2500">

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#fw_al_001" data-slide-to="0" class="active"></li>
			<li data-target="#fw_al_001" data-slide-to="1"></li>
			<li data-target="#fw_al_001" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox">

			<!-- First Slide -->
			<div class="carousel-item active">

				<!-- Slide Background -->
				<img src="assets/img/eot.jpg" alt="fw_al_001_01">

				<!-- Slide Text Layer -->
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp">WELCOME</h3>
					<h1 data-animation="animated fadeInUp">MOVIE STUDIO</h1>
					<p data-animation="animated fadeInUp">Find a Movie to Watch</p>
					<a href="icon ion-ios-search-strong" data-animation="animated fadeInUp">Search</a>
				</div>
			</div>
			<!-- End of Slide -->

			<!-- Second Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/SW.jpg" alt="fw_al_001_02">

				<!-- Slide Text Layer -->
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp">Check Out</h3>
					<h1 data-animation="animated fadeInUp">What's Latest Movies</h1>
					<p data-animation="animated fadeInUp">create an account</p>
					<a href="signup.php" data-animation="animated fadeInUp">Sign Up</a>
				</div>
			</div>
			<!-- End of Slide -->

			<!-- Third Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/rock.jpg" alt="fw_al_001_03">

				<!-- Slide Text Layer -->
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp">Watch</h3>
					<h1 data-animation="animated fadeInUp">Movie Trailers</h1>
					<p data-animation="animated fadeInUp">Review and Rate</p>
					<a href="login.php" data-animation="animated fadeInUp">Log In</a>
				</div>
			</div>
			<!-- End of Slide -->

		</div><!-- End of Wrapper For Slides -->

	</div> 
<!-- ___________________________________________________________ END OF SLIDER__________________________________________________________________________________________________________-->



    <div class="article-list"  style="background-color: black;">
        <div class="container1"  >
            <div class="intro">
                <h2 class="text-center" data-aos="zoom-in-down" data-aos-once="true">Latest Movies</h2>
                <p class="text-center" data-aos="zoom-in-down" data-aos-once="true">Find your next favourite movie </p>
            </div>
           
            
            
            <div class="row articles" data-aos="slide-up" data-aos-once="true" width="1920" height="1080"  >
              
                   <?php
                   if (mysqli_num_rows($result)>0){
                       while($row = mysqli_fetch_array($result)) {
                           echo "
                           <div class='col-sm-6 col-md-3 item'><a href='movie-single.php?ID={$row['movieid']}'><img class='mnk-image' src='assets/img/{$row['img']}'></a>
                           <h3 class='name' style='text-align:center'>{$row['title']}</h3>
                          </div>
                        ";
                       }
                   }
                   
                   ?>
        </div>
    </div>
</div>
                        <div data-aos="zoom-in-up" data-aos-once="true"></div>
                        <div class="photo-gallery"></div>
                        <div data-aos="zoom-in" data-aos-once="true" class="footer-dark">
                            <footer>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-3 item">
                                            <h3>Services</h3>
                                            <ul>
                                                <li><a href="#">Web design</a></li>
                                                <li><a href="#">Development</a></li>
                                                <li><a href="#">Hosting</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-3 item">
                                            <h3>About</h3>
                                            <ul>
                                                <li><a href="https://www.facebook.com/Kevin.Linro">Company</a></li>
                                                <li><a href="#">Team</a></li>
                                                <li><a href="#">Careers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 item text">
                                            <h3>Company Name</h3>
                                            <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                                        </div>
                                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                                    </div>
                                    <p class="copyright">Kevin Linro © 2014</p>
                                </div>
                            </footer>
                        </div>
                        <script src="assets/js/jquery.min.js"></script>
                        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                        <script src="assets/js/bs-init.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
                        <script src="assets/js/Simple-Slider.js"></script>
                        <script src="assets/js/Swipe-Slider-7.js"></script>
                        

                        
</body>

</html>
