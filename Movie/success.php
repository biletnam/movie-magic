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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Success!</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-8">
                <h4>Your tickets have been booked :)</h4>
                <p>Thank you for booking your movie tickets with MovieMagic! Hope you loved your experience with us.
                <br>MovieMagic lets you instantly book tickets for any show within a few easy steps, and all this, anywhere anytime!</p>
                <br>
                <h3 class="text-success">Show your QR code or unique MMID at the theatre Box Office to get your tickets.</h3>
                      
            </div>
        </div>
        <!-- /.row -->
        
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-8 text-center">
                <br>
                <img src="img/qrcode.jpg">
                <h3 class="text-center bold text-danger">MMID: 3FJ95RX</h3>
            </div>
        </div>
        <!-- /.row -->
        
        <div>
        <p style="padding:50px;"></p>
        </div>
        
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-8 alert-success">
                <p><br>Let us know how your experience with MovieMagic was. Go ahead and contact our call centre or send us a <a href="contact.php" class="text-danger">feedback</a>. Your opinion matters the most, and we'd do anything to make this website as good as it gets! ;)</p>
            </div>
        </div>
        <!-- /.row -->
        
        <br>
        
    </div>
    <!-- /.container -->
    
    <div>
        <p style="padding:50px;"></p>
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
    
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/sign_up.js"></script>
    <script src="js/booking.js"></script>

</body>

</html>