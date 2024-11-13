<?php
$conn=mysqli_connect("localhost","root","","brixo");
if (isset($_POST['savebtn'])) {
    $name2=$_POST['name1'];
    $email2=$_POST['email1'];
    $phone2=$_POST['phone1'];        
    $message2=$_POST['message1']; 
$ins="INSERT INTO contact(name,email,phone,message) VALUES('$name2','$email2','$phone2','$message2')";
mysqli_query($conn,$ins);
}
?>       
<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from demo.awaikenthemes.com/html-preview/brixo/CONTACT.PHP by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 05:43:24 GMT -->
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>Brixo - Construction HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;family=Unbounded:wght@200..900&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="css/all.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="css/custom.css" rel="stylesheet" media="screen">
</head>
<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/loader.svg" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="index.html">
                       <h1>Cre8build
</h1> 
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class=""><a class="nav-link" href="index.html">Home</a>
                                   
                                </li>                                
                                <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.html">Gallery</a></li>                    
                               
                                    <ul>                                        
                                        <li class="nav-item"><a class="nav-link" href="service-single.html">Service Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>            
                                    </ul>
                                </li>
                                <li class="nav-item highlighted-menu"><a class="nav-link" href="CONTACT.PHP">Contact Us</a></li>                            
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="CONTACT.PHP" class="btn-default">contact us</a>
                        </div>
                        <!-- Let’s Start Button End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get in Touch We're Here for You</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Connect with us. We're here to help and look forward to hearing from you.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info Box Start -->
                        <div class="contact-info-box">
                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="images/icon-phone.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>contact</h3>
                                    <p>0407 923 777</p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="images/icon-mail.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Email</h3>
                                    <p>Steve@cre8build.com.au</p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="images/icon-location.svg" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Our Address</h3>
                                    <p>Newcastle, New South Wales, Australia</p><br><br>
                                     <h3>Hours</h3>
                                    <p>

                                        Mon

09:00 am – 05:00 pm <br>
                                     Tue

09:00 am – 05:00 pm <br>

Wed

09:00 am – 05:00 pm<br>

Thu

09:00 am – 05:00 pm<br>

Fri

09:00 am – 05:00 pm<br>

Sat

Closed<br>

Sun

Closed</p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>
                

                <div class="col-lg-6">
                    <!-- Page Contact Form Start -->
                    <div class="contact-us-form">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Have any questions</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Fill out the form to connect with us today.</p>
                        </div>

                  <form action="" method="POST">

                    <div>
    <input type="text" name="name1" placeholder="Name" required><br><br>
    <input type="email" name="email1" placeholder="Email" required><br><br>
    <input type="tel" name="phone1" placeholder="Phone" required><br><br>
    <input name="message1" placeholder="Message" required><br><br>
    <button type="submit" name="savebtn">Send</button>
</div>
</form>


                    </div>
                    <!-- Page Contact Form End -->
                </div>
                
            </div>
        </div>
    </div>
    <!--  Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container-flude">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d214209.7921730888!2d151.68970025000002!3d-32.976662999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b733e1371c702e5%3A0x4017d681632a8a0!2sNewcastle%20NSW%2C%20Australia!5e0!3m2!1sen!2s!4v1731340524576!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->

    <!-- Footer Start -->
    <footer class="main-footer">
        <!-- Scrolling Ticker Section Start -->
        <div class="our-scrolling-ticker">
            <!-- Scrolling Ticker Start -->
            <div class="scrolling-ticker-box">
               

              
            </div>
        </div>
        <!-- Scrolling Ticker Section End -->
        
        <div class="container">
            <div class="row align-items-center">                                
                <div class="col-lg-3 col-md-3 col-6">
                  
                </div>

                <div class="col-lg-3 col-md-3 col-6">
                    <!-- Footer Links Start -->
                 
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-3 col-md-3 col-7">
                    <!-- Footer Links Start -->
                    <div class="footer-links footer-contact-info">
                        <h3>resources</h3>
                        <p>0407 923 777</p>
                        <p>Steve@cre8build.com.au</p>
                        <p>Newcastle, New South Wales, Australia</p>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-3 col-md-3 col-5">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                           <h1 style="color: white;">Cre8build
</h1>
                        </div>
                        <!-- Footer Logo End -->             
                    </div>
                    <!-- About Footer End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2024 All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <!-- Footer Privacy Policy Start -->
                        <div class="footer-privacy-policy">
                            <ul>
                                <li><a href="#">privacy policy</a></li>
                                <li><a href="#">term & condition</a></li>
                            </ul>
                        </div>
                        <!-- Footer Privacy Policy End -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
     </footer>
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="js/SplitText.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="js/function.js"></script>
</body>

<!-- Mirrored from demo.awaikenthemes.com/html-preview/brixo/CONTACT.PHP by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 05:43:25 GMT -->
</html>
