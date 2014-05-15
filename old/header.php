<!DOCTYPE html>
<html class="clickberry-extension clickberry-extension-imageshack" >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >

<!-- EDIT BELOW ----------------------------------------------------------------------------------------------------------------- -->
<!-- ----------- This edits what shows up in the Tab of the page ( at the top of the screen ) -->

        <!-- EDIT POINT  -->
        <title> Google at UofC </title>

<!-- EDIT ABOVE ------------------------------------------------------------------------------------------------------------------ -->
        <!-- Le Scripts -->
        <script type="text/javascript" src="js/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="./js/Chart.js"></script>

        <!-- Le Styles -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css"href="css/result-light.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">

        <!-- Le Configuration -->
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

        <?php  // For Google Analytics  ( but it doesn't work currently )
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
                        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed within .navbar-collapse.collapse. -->
                        <div class="nav-collapse collapse">
                            <ul class="nav pull-left">
                                <li class="">
                                    <a href="#tt">The Tech Talk</a>
                                </li>

                                <li>
                                    <!-- EDIT POINT -->
                                    <a href="#raffle">The Raffle</a>
                                </li>
                                <li>
                                    <!-- EDIT POINT -->
                                    <a href="#money">Earn Ca$h For Your Org!</a>
                                </li>
                                <li>
                                    <!-- EDIT POINT    ( just replace this link with the link to the new form ) -->
                                    <a href="<?php echo $sign_up_form_link; ?>"><span class="">Sign Up!</span></a>
                                </li>
<!--                                 <li>
                                    <a href="#leaderboards">Leaderboards</a>
                                </li> -->
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

        <!--== Carousel ==-->
        <div id="myCarousel1" class="carousel slide">
            <div class="carousel-inner">
                <div class="item">
                    <img src="img/lVzext " alt="">
                    <div class="container-fluid container">
                        <div class="carousel-caption">
                            <h1>Google's Coming to the <?php echo $school_full; ?></h1>
                            <p class="lead ">Ready for a talk on what it takes to build a successful career in tech? Join us for key insights from current Googlers!</p>
                            <!-- <a class="btn btn-large btn-success" href="mailto:<?php // echo $techtalk_school_email; ?>">Email Us Submissions!</a> -->
                            <a class="btn btn-large btn-success" href="<?php echo $sign_up_form_link; ?>">Sign Up Today!</a>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <img src="img/5FjSxD" alt="">
                    <div class="container-fluid container">
                        <div class="carousel-caption">
                            <h1>Raffle Anyone?<br></h1>
                            <p class="lead ">2 attendees who join our Helpouts Challenge will win a free lunch and tour of Google for 1-1 mentoring from a current Googler in their field! Plus, 10 others will get their very own Chromecast -- what's not to love?</p>
                            <a class="btn btn-large btn-success" href="#raffle">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/0XLdTY" alt="">
                    <div class="container-fluid container">
                        <div class="carousel-caption">
                            <h1>Easy Money<br></h1>
                            <p class="lead">Whether you win the raffle, you'll still win $20 for every raffle entry on behalf of your campus club for the Helpouts Challenge.</p>
                            <a class="btn btn-large btn-success" href="#money">Find Out How</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next">›</a>
        </div>
        <!-- /.carousel -->

