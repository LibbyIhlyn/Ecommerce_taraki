<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
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
<div class="bg-img" style="background-image: url('./img/giphy.gif');">
            <div class="overlay"></div>
        </div>

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

    <!-- Portfolio -->
    <div id="portfolio" class="section ts-padding bg-grey">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Taraki Services</h2>
                    <p> We can create and deploy what you need based on what you want. Customization is one of Taraki Technologies' expertise. <br/> <a href="contact.php">Contact us</a> for a formal meeting or visit our physical store.</p>
                </div>
                <br/>
                <!-- /Section header -->

                <!-- Work -->
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="./img/work2.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <h3>Troubleshooting and Repair</h3>
                        <span>We can fix your devices for you. From printers to unstable internet connection, we can fix it.</span>
                        <div class="work-link">
                            <a href="contact.php"><i class="fa fa-external-link"></i></a>
                            <a class="lightbox" href="./img/work2.jpg"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                            <h3 class="text-center">Troubleshooting and Repair</h3>
                    </div>
                </div>
                <!-- /Work -->

                <!-- Work -->
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="./img/work3.png" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <h3>Software Development</h3>
                        <span>Taraki Technologies can create any website, any application you want. Specify it and we will do it.</span>
                        <div class="work-link">
                            <a href="contact.php"><i class="fa fa-external-link"></i></a>
                            <a class="lightbox" href="./img/work3.png"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                            <h3 class="text-center">Software Development</h3>
                    </div>
                </div>
                <!-- /Work -->

                <!-- Work -->
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="./img/work4.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <h3>Network Installation</h3>
                        <span>We sure can install and set up a network for you. We also install WiFi and CCTV cameras.</span>
                        <div class="work-link">
                            <a href="contact.php"><i class="fa fa-external-link"></i></a>
                            <a class="lightbox" href="./img/work4.jpg"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                            <h3 class="text-center">Network Installation</h3>
                    </div>
                </div>
                <!-- /Work -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Portfolio -->

  


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
                        <p>Copyright &copy 2018. All Rights Reserved. Taraki Technologies.</p>
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