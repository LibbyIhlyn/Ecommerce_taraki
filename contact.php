<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
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


    <!-- Contact -->
    <div id="contact" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section-header -->
                <div class="section-header text-center">
                    <h2 class="title">Get in Touch</h2>
                </div>
                <!-- /Section-header -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-phone"></i>
                        <h3>Contact Us At</h3>
                        <p>0912-345-6789</p>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-envelope"></i>
                        <h3>Send Us Email</h3>
                        <p><a href = "mailto:taraki@gmail.com">taraki@gmail.com</a></p>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-map-marker"></i>
                        <h3>Visit Our Physical Store</h3>
                        <p>000-XXXX Bldg., Pico, La Trinidad</p>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact form 
                <div class="col-md-8 col-md-offset-2">
                    <form class="contact-form">
                        <input type="text" class="input" placeholder="Name">
                        <input type="email" class="input" placeholder="Email">
                        <input type="text" class="input" placeholder="Subject">
                        <textarea class="input" placeholder="Message"></textarea>
                        <button class="main-btn">Send message</button>
                    </form>
                </div>
                 /contact form -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Contact -->


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