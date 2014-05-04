<!DOCTYPE html>
<html class="clickberry-extension clickberry-extension-imageshack" >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >

        <title> Google at SFSU </title>

        <script type="text/javascript" src="js/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css"href="css/result-light.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">

        <?php include('config.php') ?>

        <script type="text/javascript">//<![CDATA[
            $(window).load(function() {
            $('#myModal1 .selectpicker').selectpicker();

            //$(document).on('focusin.modal', '[data-toggle=dropdown], [role=menu]', function (e) { e.stopPropagation() });
            });//]]>
        </script>

        <meta content="clickberry-extension-here">

        <script id="clickberry-imageshack-script" src="js/ChromeClickberryInjector.min.js"></script>

    </head>

    <body data-gclp-initialized="true" data-gistbox-initialized="true">

        <?php  // For Google Analytics
        include_once("analyticstracking.php");
        echo $google_analytics; ?>

        <!--== NAVBAR ==-->
        <div class="navbar-wrapper">
            <!-- Wrap the .navbar in .container-fluid to center it within the absolutely positioned parent. -->
            <div class="container-fluid">
                <div class="navbar container">
                    <div class="navbar-inner">
                        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a name="top" class="brand" href="#">
                            <img class="smaller" src="img/WcCkrnT.png" alt="helpouts">
                        </a>

                        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                        <div class="nav-collapse collapse">
                            <ul class="nav pull-left">
                                <li class="">
                                    <a href="#tt">The Tech Talk</a>
                                </li>
                                <li>
                                    <a href="#raffle">The Raffle</a>
                                </li>
                                <li>
                                    <a href="#money">Earn Ca$h For Your Org!</a>
                                </li>
                                <li>
                                    <a href="http://goo.gl/5deUzW">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                    <!-- /.navbar-inner -->
                </div>
                <!-- /.navbar -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.navbar-wrapper -->

        <!-- Carousel -->
        <div id="myCarousel1" class="carousel slide">
            <div class="carousel-inner">
                <div class="item">
                    <img src="img/lVzext " alt="">
                    <div class="container-fluid container">
                        <div class="carousel-caption">
                             <h1>Google's Coming to SFSU!<br></h1>

                            <p class="lead ">Ready for a talk on what it takes to build a successful career in tech? Join us for key insights from current Googlers! Brought to you by SFSU's largest computer club (ACM) and the Marketing Association.</p>
                            <a class="btn btn-large btn-primary " href="http://goo.gl/5deUzW">Sign up today</a>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <img src="img/5FjSxD" alt="">
                    <div class="container-fluid container">
                        <div class="carousel-caption">
                            <h1>Raffle Anyone?<br></h1>

                            <p class="lead ">2 attendees who join in our Helpouts Challenge will win a free lunch and tour of Google for 1-1 mentoring from a current Googler in their field! Plus, 15 others will get their very own Chromecast -- what's not to love?</p>
                            <a class="btn btn-large btn-primary" href="#raffle">Learn more</a>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/0XLdTY" alt="">
                    <div class="container-fluid container">
                        <div class="carousel-caption">
                             <h1>Easy Money<br></h1>

                            <p class="lead">Whether you win the awesome raffle, you'll still win $20 for every raffle entry on behalf of your campus club for the Helpouts Challenge.</p>
                            <a class="btn btn-large btn-primary" href="#money">Find Out How</a>

                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next">›</a>
        </div>
        <!-- /.carousel -->

