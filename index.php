<?php include ('header.php'); ?>

<body  >
    <?php include('navbar.php'); ?>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper"style="transition: all 0.25s ease 0s; width: 3540px; transform: translate3d(-1180px, 0px, 0px);" >
                <div data-aos="zoom-out" data-aos-duration="800" data-aos-once="true" class="swiper-slide" style="background-image: url(&quot;/assets/img/pic3.jpg&quot;);min-height: 920px;"></div>
                <div data-aos="zoom-out" data-aos-duration="800" data-aos-once="true" class="swiper-slide" style="background-image: url(&quot;/assets/img/SW.jpg&quot;);min-height: 920px;"></div>
                <div data-aos="zoom-out" data-aos-duration="800" data-aos-once="true" class="swiper-slide" style="background-image: url(&quot;/assets/img/VEN.jpg&quot;);min-height: 920px;"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Script -->
    <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("swiper-slide");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>






    <div class="article-list"  style="background-color: black;">
        <div class="container" width="1920" height="1080" >
            <div class="intro">
                <h2 class="text-center" data-aos="zoom-in-down" data-aos-once="true">Latest Movies</h2>
                <p class="text-center" data-aos="zoom-in-down" data-aos-once="true">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
           
            
            
            <div class="row articles" data-aos="slide-up" data-aos-once="true" width="1920" height="1080"  >
                <div class="col-sm-6 col-md-3 item"><a href="#"><img class="img-fluid" src="/assets/img/eot.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-3 item"><a href="#"><img class="img-fluid" src="/assets/img/jw.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-3 item"><a href="#"><img class="img-fluid" src="/assets/img/rock.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-3 item"><a href="#"><img class="img-fluid" src="/assets/img/FF.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-3 item"><a href="#"><img class="img-fluid" src="/assets/img/BAT.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                 <div
                    class="col-sm-6 col-md-3 item"><a href="#"><img class="img-fluid" src="/assets/img/MON.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                  <div
                    class="col-sm-6 col-md-3 item"><a href="#"><img class="img-fluid" src="/assets/img/REV.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-3 item"><a href="#"><img class="img-fluid" src="/assets/img/JL.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-3 item"><a href="#"><img class="img-fluid" src="/assets/img/TUR.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
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
                                                <li><a href="#">Company</a></li>
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
                        <script src="/assets/js/jquery.min.js"></script>
                        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
                        <script src="/assets/js/bs-init.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
                        <script src="/assets/js/Simple-Slider.js"></script>
                        <script src="/assets/js/Swipe-Slider-9.js"></script>

                        
</body>

</html>
