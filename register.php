<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
if (isset($_SESSION["username"])) {header ("location:index.php");}
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

        <!--Nav-->
        <nav id="nav" class="navbar nav-transparent">
            <div class="container">

                <!-- Login and Register Buttons -->
                <a href="login.php"><button class="main-btn float-right">Login</button></a>                
                <!-- /Login and Register Buttons -->
                
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
                <ul class="main-nav nav navbar-nav navbar-left">
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


    <!--Login Form-->
    <div id="login" class="section ts-padding">
         
      <!-- Container-->
        <div class="container">

          <!-- Row -->
          <div class="row">

            <!-- Section-header -->
            <div class="section-header text-center">
              <h2 class="title">Register</h2>
            </div>
            <!--/Section-header-->    

            <!-- register form -->
            <div class="col-md-8 col-md-offset-2">
              <form method="POST" action="insert.php" class="contact-form">
                <input type="text" class="input" placeholder="First Name" name="fname" maxlength="20" required>
                <input type="text" class="input" placeholder="Last Name" name="lname" maxlength="20" required>
                <input type="text" class="input" placeholder="Contact Number" name="contact" maxlength="12" required>
                <input type="text" class="input" placeholder="Address" name="address" maxlength="100" required>
                <input type="text" class="input" placeholder="ZIP Code" name="zipcode" maxlength="4" required>
                <input type="email" class="input" placeholder="Email Address" name="email" required>
                <input type="password" class="input" name="pwd" placeholder="Password" minlength="5" maxlength="10" required>
                <input type="password" class="input" name="pwd2" placeholder="Confirm Password" minlength="5" maxlength="10" required>
                <br> <br>
                <button class="main-btn" type="submit"> Register </button>
                <button class="main-btn" type="reset"> Reset </button>
              </form>
            </div> 
            <!--/register form-->

          <!-- /Row -->      
          </div>

        <!-- /Container -->
        </div>

    <!--/Login Form-->
    </div>

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
