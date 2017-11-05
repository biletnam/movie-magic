<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Online movie ticket reservation">
    <meta name="author" content="Menaka & Pranali">

    <title>Movie Magic - Online Tickets</title>
    <link rel="shortcut icon" href="img/logo2.png" type="img/ico">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/moviemagic.css" rel="stylesheet">
	
	<!--php-->
	<?php session_start();?>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        #invisible {
            display: none;
        }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span><img src="img/logo2-nav.png" height="24px"></span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav" id="left-nav">
                    <li>
                        <a href="lang-hindi.php">HINDI</a>
                    </li>
                    <li>
                        <a href="lang-english.php">ENGLISH</a>
                    </li>
                    <li>
                        <a href="lang-regional.php">REGIONAL</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="faq.php"><span class="fa fa-question-circle" aria-hidden="true"></span>&nbsp;&nbsp;SUPPORT</a>
                    </li>
                    <li>
                        <a href="contact.php"><span class="fa fa-phone" aria-hidden="true"></span>&nbsp;&nbsp;CONTACT</a>
                    </li>
					<?php 
					if(!isset($_SESSION["user_name"])) {
                    
					echo '<li id="visible">
                        <a href="#loginModal" data-toggle="modal" data-target="#loginModal"><span class="fa fa-sign-in" aria-hidden="true"></span>&nbsp;&nbsp;SIGN IN</a>
                    </li>';
					}
					else {
						echo '
				        <li id="visible" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user" aria-hidden="true"></span>&nbsp;&nbsp;YOU&nbsp;&nbsp;<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="profile.php"><span class="fa fa-cog" aria-hidden="true"></span>&nbsp;&nbsp;Profile</a></li>
                                <li><a href="bin/logout.php"><span class="fa fa-sign-out" aria-hidden="true"></span>&nbsp;&nbsp;Sign Out</a></li>
                            </ul>
						</li>
						';
					}
					?>
                                       
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <!-- Login modal -->
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login </h4>
            </div>
            <div class="modal-body">
                 <form class="form" action="bin\login.php" method="post" id="signin" value="login">
                     <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <div class="form-group">
                                <label for="Email">Email address</label>
                                <input type="email" class="form-control" id="Email" aria-describedby="Email" placeholder="Enter email" name="Email" value="menaka.ravi23@gmail.com">
                            </div>
                        </div>
                        <div class="col-xs-8 col-xs-offset-2">
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" placeholder="Password" name="Password" value="menu123">
                            </div>
                        </div>
                     </div>
                    <div class="row"><p style="padding:10px;"></p></div>
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <button type="submit" class="btn btn-danger btn-block" value="login" id="submitForm" name="login">Sign In</button>
                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                    <br>
                </form>
              
                <br>
                <p class="center-align bold text-muted">Still not connected?
                    <a href="signup.php" class="text-danger">Sign up</a> here!
                </p>
            </div>
        </div>
        </div>
    </div>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('bin/display_poster.php?MovieName=Inferno');"></div>
                <div class="carousel-caption">
                    <h2>Book tickets in a few clicks</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('bin/display_poster.php?MovieName=Anna');"></div>
                <div class="carousel-caption">
                    <h2>Get movie ratings</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('bin/display_poster.php?MovieName=Koi Aane Parnavo');"></div>
                <div class="carousel-caption">
                    <h2>Read the latest reviews</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Movies</h2>
            </div>
            <div class="col-xs-12">
                <h5 class="center-align text-uppercase lead">Coming Soon</h5>
            </div>
            <div class="col-md-3 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="img/cs-adhm.jpg" alt="">
            </div>
            <div class="col-md-3 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="img/cs-rockon2.jpg" alt="">
            </div>
            <div class="col-md-3 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="img/cs-strange.png" alt="">
            </div>
            <div class="col-md-3 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="img/cs-fbawtft.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <br><br><br>
        
    </div>
    <!-- /.container -->

    <div class="bottom">
        <!-- Call to Action Section -->
        <div class="pre-footer small">
            <div class="row">
                <div class="col-xs-12">
                    <h5 class="center-align bold" style="color:#555;">Book an experience with MovieMagic!</h5>
                </div>
                <div class="row row-content">
                    <div class="col-xs-12">
                    Life has never been so convenient for a movie buff! Remember the time, when you had to stand in a long queue outside the theatre to book movie tickets? That time is gone now!With the emergence of MovieMagic, India's biggest online ticketing portal, booking movie tickets have become a cake walk. Now, enjoy your favourite movies in theatre with just a click! MovieMagic is Movies on the go - Jahan mood kiya wahan book kiya! Just take out your mobile, launch the app, choose your movie, theatre &amp; show time and book tickets online, right away! So simple. Isn't it! We give you some more amazingly cool reasons why you should book your movie tickets here! 
                    </div>
                </div>
                <div class="row row-content">
                    <div class="col-sm-4 col-xs-12">
                        <h5 class="bold">Bollywood, Hollywood or Regional cinema</h5>
                    <p>Whatever be your choice in movies, MovieMagic is the Go-to destination! With the list of all the upcoming movies in any language - Hindi, English, Marathi, Tamil, Telugu, Kannada, Malayalam or Genre – Action, Comedy, Thriller, Drama, Romance, Animation or Crime, we keep you informed about the movie world! We give you the release dates also, to let you plan your movie outing accordingly!</p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <h5 class="bold">Check out latest movie trailers</h5>
                    <p>They say “If the constitution was a film, the preamble would be the trailer”. Now, go nowhere, come straight to us and check out the all the latest Bollywood, Hollywood, Kollywood or Tollywood movie trailers before booking your tickets. We bring you the theatrical previews of all the showing movies! </p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <h5 class="bold">Read Movie Reviews</h5>
                    <p>If you are the kind of person, who checks reviews before booking movie tickets, we have made it convenient for you as well! You can catch the movie reviews by our own reviewers and the experts on our website.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="row-footer">
            <div class="row">
                <div class="col-sm-4">
                    <hr>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="center-align">
                        <a href="index.php"><img src="img/logo2-nav.png" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <hr>
                </div>
            </div>
    </div>
    
    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-sm-4 col-xs-6">
                    <h5>Movies</h5>
                    <ul class="list-unstyled">
                        <li><a href="lang-hindi.php">Hindi</a></li>
                        <li><a href="lang-english.php">English</a></li>
                        <li><a href="lang-regional.php">Regional</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-sm-6">
                    <h5>MovieMagic</h5>
                    <ul class="list-unstyled">
                        <li><a href="faq.php">Support</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="#loginModal" data-toggle="modal" data-target="#loginModal">Sign In</a></li>
                    </ul>                    
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="nav navbar-nav" style="padding: 40px 10px;">
                        <a class="btn btn-social-icon btn-google-plus" href="http://plus.google.com"><i class="fa fa-google-plus fa-2x"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com"><i class="fa fa-facebook fa-2x"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-2x"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-2x"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube fa-2x"></i></a>
                        <a class="btn btn-social-icon" href="mailto:contactus@moviemagic.com"><i class="fa fa-envelope-o fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <p style="padding:30px;"></p>
                    <p align=center>Copyright © 2016 MovieMagic</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>