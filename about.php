<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Taraki Technologies</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('./img/giphy.gif');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        <!-- Nav -->
        <nav id="nav" class="navbar nav-transparent">
            <div class="container">

        <!-- Login/Register and Account/Logout Buttons -->
        <?php
          if(isset($_SESSION['username'])){
            echo '<a href="logout.php"><button class="main-btn float-right">Logout</button></a>';
            echo '<a href="account.php"><button class="main-btn float-right">Account</button></a>';
          }
          else{
            echo '<a href="login.php"><button class="main-btn float-right">Login</button></a>';
            echo '<a href="register.php"><button class="main-btn float-right">Register</button></a>';
          }
        ?>
        <!-- /Login/Register and Account/Logout Buttons -->
                               
                <div class="navbar-header">
                 
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a href="index.php">
                            <img class="logo" src="img/logo1.png" alt="logo">
                            <img class="logo-alt" src="img/logo-alt1.png" alt="logo">
                        </a>
                    </div>
                    <!-- /Logo -->

                    <!-- Collapse nav button -->
                    <div class="nav-collapse">
                        <span></span>
                    </div>
                    <!-- /Collapse nav button -->
                </div>

                <!--  Main navigation  -->
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="has-dropdown"><a href="#">Products/Services</a>
                        <ul class="dropdown">
                            <li>
                                <a href="hwproducts.php">Hardware Products</a>
                            </li>
                            <li>
                                <a href="services.php">Services</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="cart.php">My Cart</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <!-- /Main navigation -->

            </div>
        </nav>
        <!-- /Nav -->

    </header>
    <!-- /Header -->

 

    <!-- Why Choose Us -->
    <div id="about" class="section md-padding bg-grey">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- why choose us content -->
                <div class="col-sm-12">
                    <div class="section-header text-center">
                        <h2 class="title">Why Choose Us</h2>
                    </div>
                    <p><b>DISCLAIMER: THIS WEBSITE SHOWS A FICTIONAL AND NON-OPERATING BUSINESS WHICH IS CREATED FOR EDUCATIONAL PURPOSES ONLY! THE PRODUCTS ARE NON-EXISTENT AND SO IS THE COMPANY ITSELF. THE IMAGES USED IN THIS WEBSITE BELONGS TO THOSE WHO RESPECTIVELY OWNS THEM.</b></p>
                    <p>Taraki Technologies offers a wide variety of products and services that are in excellent quality and with an affordable price. Our main goal is to provide help to everyone with any technological need. As one of the leading IT services and solutions companies in Asia, we ought to heighten the levels of our services to provide 100% satisfaction to our customers as possible. Here in Taraki Technologies, we personally believe that every person is connected into a single network, in which we, together can change the world. Be a part of this change. Be TARAKI!</p>
                    <br/>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>HIGH QUALITY Products and Services</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>INEXPENSIVE and Budget Friendly</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>TRAINED and TESTED Professionals</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>100% CUSTOMER SATISFACTION</p>
                    </div>
                </div>
                <!-- /why choose us content -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Why Choose Us -->


    <!-- Numbers -->
    <div id="numbers" class="section ts-padding">

        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('./img/background2.jpg');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- number -->
                <h2 class="white-text text-center">Taraki Accomplishments</h2>
                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-users"></i>
                        <h3 class="white-text"><span class="counter">12,451</span></h3>
                        <span class="white-text">Happy clients</span>
                    </div>
                </div>
                <!-- /number -->

                <!-- number -->
                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-trophy"></i>
                        <h3 class="white-text"><span class="counter">32</span></h3>
                        <span class="white-text">Awards won</span>
                    </div>
                </div>
                <!-- /number -->

                <!-- number -->
                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-coffee"></i>
                        <h3 class="white-text"><span class="counter">86</span>K</h3>
                        <span class="white-text">Cups of Coffee</span>
                    </div>
                </div>
                <!-- /number -->

                <!-- number -->
                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-file"></i>
                        <h3 class="white-text"><span class="counter">4,511</span></h3>
                        <span class="white-text">Projects completed</span>
                    </div>
                </div>
                <!-- /number -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Numbers -->

    <!-- Team -->
    <div id="team" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Our Team</h2>
                </div>
                <!-- /Section header -->

                <!-- team -->
                <div class="col-sm-3">
                    <div class="team">
                        <div class="team-img">
                            <img class="img-responsive" src="./img/team1.jpg" alt="">
                            <div class="overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>Rostum Y. Raras</h3>
                            <span>Hardware Specialist</span>
                        </div>
                    </div>
                </div>
                <!-- /team -->

                <!-- team -->
                <div class="col-sm-3">
                    <div class="team">
                        <div class="team-img">
                            <img class="img-responsive" src="./img/team2.jpg" alt="">
                            <div class="overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>Arthur Lag-ey III</h3>
                            <span>Network Consultant</span>
                        </div>
                    </div>
                </div>
                <!-- /team -->

                <!-- team -->
                <div class="col-sm-3">
                    <div class="team">
                        <div class="team-img">
                            <img class="img-responsive" src="./img/team3.jpg" alt="">
                            <div class="overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>Jonifer Cabaling</h3>
                            <span>Application Developer</span>
                        </div>
                    </div>
                </div>
                <!-- /team -->

                <!-- team -->
                <div class="col-sm-3">
                    <div class="team">
                        <div class="team-img">
                            <img class="img-responsive" src="./img/team4.jpg" alt="">
                            <div class="overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>Libby Ihlyn Demot</h3>
                            <span>Software Engineer</span>
                        </div>
                    </div>
                </div>
                <!-- /team -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Team -->

    
    <!-- Testimonial -->
    <div id="testimonial" class="section ts-padding">

        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('./img/background3.jpg');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Testimonial slider -->
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="white-text text-center">Customers' Testimonials</h2>
                    <div id="testimonial-slider" class="owl-carousel owl-theme">
                        <!-- testimonial -->
                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <img src="./img/perso1.jpg" alt="">
                                <h3 class="white-text">Mr. Founder</h3>
                                <span>Founder, KCP</span>
                            </div>
                            <p class="white-text">I asked them to provide a WiFi connection at KCP, and they did for a low price! Abot ang WiFi kahit sa CR! Best quality, no problems encountered from installation until now, approximately 3 years.</p>
                        </div>
                        <!-- /testimonial -->

                        <!-- testimonial -->
                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <img src="./img/perso2.jpg" alt="">
                                <h3 class="white-text">Binji's Internet Shop</h3>
                                <span>Computer Rental Services</span>
                            </div>
                            <p class="white-text">Superb quality of service! Taraki fixed our busted server and we got no problem ever since. Plus they gave advices and tips on taking care of our devices.</p>
                        </div>
                        <!-- /testimonial -->

                        <!-- testimonial -->
                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <img src="./img/perso3.jpg" alt="">
                                <h3 class="white-text">Karylle Zyrhine</h3>
                                <span>Blogger, Youth Ambassador</span>
                            </div>
                            <p class="white-text">I got what I need and what I want. They are easy to work with, approachable and friendly. Watch out for my awesome website to be launched soon!</p>
                        </div>
                        <!-- /testimonial -->

                    </div>
                </div>
                <!-- /Testimonial slider -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Testimonial -->

    <!-- Footer -->
    <footer id="footer" class="ss-padding bg-dark">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <div class="col-md-12">

                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a href="index.php"><img src="img/logo-alt1.png" alt="logo"></a>
                    </div>
                    <!-- /footer logo -->

                    <!-- footer follow -->
                    <ul class="footer-follow">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                    <!-- /footer follow -->

                    <!-- footer copyright -->
                    <div class="footer-copyright">
                        <p>Copyright &copy; 2018. All Rights Reserved. Taraki Technologies.</p>
                    </div>
                    <!-- /footer copyright -->

                </div>

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </footer>
    <!-- /Footer -->

    <!-- Back to top -->
    <div id="back-to-top"></div>
    <!-- /Back to top -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>