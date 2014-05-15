<?php
    // Northwester University's Tech Talk Website

    // Event Detail Variables
    $raffle_date_range = '5/22 - 6/14';
    // $winner_drawing_date = 'May 24, 2014'; // on the Raffle Contest Rules Pop Up
    $request_list_of_winners_time_frame = 'May 26 but before June 13'; // on the Raffle Contest Rules Pop Up
    $event_date_and_location = 'Thursday, <span class="ho-main-clr">May 22nd at 6:00pm,</span> the location is TBD';
    $date_day = 'Thursday';
    $date_short = '5/22';
    $end_date = 'June 14, 2014 ';
    $raffle_date_range = '5/22 - 6/14';


    // School Variables
    $school_short = 'NU';
    $school_full = 'Northwestern University';
    $techtalk_school_email = 'techtalkNU@gmail.com';
    $sign_up_form_link = ''; // EDIT
    $sponsoring_orgs = 'the NSH club';
    $school_img = 'http://upload.wikimedia.org/wikipedia/commons/a/a8/Northwestern_Arch.jpg';
    // $tab_title = 'Google at NU'; // This is literally the name that goes in the chrome tab at the top
    $example_img = 'http://i.imgur.com/bjgRdf0.png';


    // Ambassador Variables
    $ambassador_name = 'Christie Wood'; // example: Alex Cory
    $ambassador_linkedin = 'http://www.linkedin.com/pub/christine-christie-wood/3a/115/379'; // example: http://www.linkedin.com/in/alexlcory
    $ambassador_img = 'http://goo.gl/RKLjVw';  // example: img/andrew.jpg  OR  copy the image URL of their LinkedIn Profile
    $ambassador_summary = "Christine is NU's Google Ambassador! She's pursuing a major in Environmental Sciences with a minor in Business Institutions and she's also your everyday go-to guy for everything Google on campus. Give her a high-five /
                fist - bump / chest - thump when you see him.";
    $coupon_code = 'CHRISTIE65M'; // PLEASE NOTE:  NO BRACKETS USED eg: {ALEX71D}  (don't use them, they're embedded in code)


    // Prize Variables
    $prize1_content = "2 winners will get VIP access to Google's Chicago office for lunch! Get free schwag, a tour of the campus, and a chat over lunch with a Googler from your field of interest about starting your career in tech.";
    $prize2_content = "";


    // --------------------------------------------------------------------------------------------------------------------
        include 'header.php';
        // include 'rankings/org.class.php';

    ?>

    <!--=== Main Content ===-->
    <!-- Wrap the rest of the page in another container-fluid to center all the content. -->
    <div class="container-fluid">
        <div class="container-fluid marketing container">



    <!--         <h1 class="large-sz"><span class="ho-main-clr">$<?php // echo $totalEarned; ?></span> Earned for SFSU orgs!</h1> <h1 class=""><span class="ho-main-clr"><?php // echo $totalSignups; ?></span> Signups and counting.</h1>

     -->
    <!--         <hr class="featurette-divider">
            <br> -->

    <!-- Profiles Section --------------------------------------------------------------------------------------------------------- -->

            <div class="row-fluid">
                <!--=== Morgan's Section ===-->
                <div class="span4">
                    <a href="http://goo.gl/qmzTTW"><img class="img-circle" alt="morgane suel" src="img/hkBxFZ"></a>
                    <h2>Morgane Suel<br></h2>
                    <p>As our local trusty Google Helpouts Category Specialist, Morgane's helping SFSU put on this awesome talk and raffle. Say "Hi, and thank you!" for all her hard work when you see her, and don't be afraid to bug her with questions! Alma Mater: McGill University, Montreal</p>
                    <p>
                        <a class="btn" href="http://goo.gl/qmzTTW">View details »</a>
                    </p>
                </div >
                <!--=== Daniel's Section ===-->
                <div class = "span4" >
                     <a href="http://goo.gl/E9XRBs"><img class="img-circle" alt="daniel arnold" src="img/NPbdH9"></a>
                    <h2> Daniel Arnold<br/></h2>
                    <p>Daniel's our featured speaker, natch, with great ideas on what it takes to work in a high-powered tech company today. He's also a Google Helpouts Category Manager! Stay tuned to hear his wisdom live and living color. Alma Mater: Northwestern University, Chicago</p>
                    <p>
                        <a class="btn" href="http://goo.gl/E9XRBs"> View details »</a>
                    </p>
                </div>
                <!--=== Ambassador's Section ===-->
                <div class="span4">
                    <a href="<?php echo $ambassador_linkedin; ?>"><img class="img-circle" alt="<?php echo $ambassador_name; ?>" src="<?php echo $ambassador_img; ?>"></a>
                    <h2><?php echo $ambassador_name; ?><br/></h2>
                    <p><?php echo $ambassador_summary; ?></p>
                    <p>
                        <a class="btn" href="<?php echo $ambassador_linkedin; ?>">View details »</a>
                    </p>
                </div>
                <!-- /.span4 -->
            </div>
            <!-- /.row -->

            <!-- START THE FEATURETTES -->
            <a id="tt" name="tt" href="#"></a><!-- For Navbar Link -->
            <br/>
            <br/>
            <hr class="featurette-divider">

            <!-- The Tech Talk Section  -->
            <div class="featurette">
                <img class="featurette-image pull-right" alt="NEEDS TO BE FIlled OUT" src="img/tI3TD0">
                <h2 class="featurette-heading">Want a career in tech?<span class="muted"> We'll show you how.</span></h2>
                <blockquote>
                    <p>Learn what it takes to enter today's job market in tech -- whatever your background or field.</p>
                </blockquote>
                <h3 class="">Start Your Career in Tech</h3>
                <h4 class=""><?php echo $event_date_and_location; ?></h4>
                <h4 class="">Sponsored by<img class="google-logo-size" src="img/new-google-logo-knockoff-colored.png" alt="new-google-logo-knockoff-colored.png"></h4>
                <p class="lead">Hear Daniel Arnold share his thoughts on innovating in today's tech landscape, what it's like to work with a startup model at Google, and his experiences on the Helpouts team at Google. You'll also hear from a recruiter on what it takes to enter today's job market in tech -- whatever your background or field. Learn about how Helpouts can give you an edge on everything from studying for finals, job interviews, to learning how to code. Don't miss out on this engaging talk and get your head start on launching your career in tech!</p>
            </div>

            <a name="raffle" href="#"></a>
            <br>
            <hr class="featurette-divider">
            <br>


    <!-- The Raffle Section -------------------------------------------------------------------------------------------------------------- -->

            <div class="featurette">
                <img class="featurette-image pull-left" alt="NEEDS ALT" src="img/XAS0IA">
                <!-- <h2 class="featurette-heading">You can still join the raffle! <span class="muted">Through May 17</span></h2> -->
                <h2 class="featurette-heading">Ready to win some great prizes? <span class="muted">Take the Helpouts Challenge.</span></h2>
                <blockquote class="block-align-r">
                    <p class="block-quotage">Sign your friends and family up for Helpouts and you'll have the chance to win VIP access to Google's Chicago office or a Chromecast!</p>
                </blockquote>

                <!-- <h3>About the Talk</h3> -->
     <!--            <p class="lead">On <span class="ho-main-clr" style="color: red;">Friday, May 2</span>, SFSU students joined the ACM Club and Marketing Association for a "Start Your Career in Tech" talk sponsored by Google. Daniel Arnold shared his thoughts on innovating in today's tech landscape and what it's like to work with a startup model for Helpouts at Google. <a href="#myModal3" class="ho-main-clr" role="button" data-toggle="modal">Click here to the view images!</a></p> -->

                <!-- Modal   (this is what pops up over the screen with the raffle rules) -->
                <div id="myModal3" class="modal2 hide" tabindex="-1" role="dialog">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body2">
                        <embed type="application/x-shockwave-flash" src="https://photos.gstatic.com/media/slideshow.swf" width="800" height="533" flashvars="host=picasaweb.google.com&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F109839075645620193995%2Falbumid%2F6009013933229421329%3Falt%3Drss%26kind%3Dphoto%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" data-dismiss="moda2l" aria-hidden="true">Close</button>
                        <!-- <button class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>

                <!--== The Helpouts Challenge ==-->
                <h3 class="h-left-align">Join us for the Helpouts Challenge</h3>
                <p class="lead pad-l-md">Your challenge: try Helpouts! Helpouts is a great live video chat platform where you can learn live from an expert. Get help from a professional as you study for finals, learn how to give a great interview, or even how to make your LinkedIn profile stand out from the crowd. Enter your submissions into the raffle for your chance to win one of the cool prizes below.</p>
                <h4 class="txt-lil-larger">What: <strong class=" ho-main-clr">The Helpouts Challenge</strong></h4>
                <h4 class="txt-lil-larger">When: <strong class=" ho-main-clr"><?php echo $raffle_date_range; ?></strong></h4>
                <br>

                <!-- Prizes -->
                <h3 class="">Prizes</h3>
                <ul class="lead">
                    <li>
                        <p class=""><?php echo $prize1_content; ?></p>
                    </li>
                    <li>
                        <p>10 additional winners will also get a <a class="ho-main-clr" href="http://goo.gl/xaaR7o">Chromecast</a>, a $35 value!</p>
                    </li>
                </ul>
                <br/>

                <!--== How To Enter Raffle ==-->
                <h3>How to enter the raffle</h3>
                <p class="lead"><strong>Just follow these steps:</strong></p><div><img class="float-right main-br" src="<?php echo $example_img; ?>"><h4 class="ho-main-clr">Example Submission</h4></div>
                <ol class="lead">
                    <li>
                        <p>Sign up for Helpouts at <a href="http://collegehelpouts.com" class="ho-main-clr">collegehelpouts.com</a></p>
                    </li>
                    <li>
                        <p>Participate in a Helpout session by <?php echo $end_date; ?> <br/>and prove it by taking a screenshot and sending it <br/>to us at <a class="ho-main-clr" href="mailto:<?php echo $techtalk_school_email; ?>"><?php echo $techtalk_school_email; ?></a>.</p>
                        <ol class="alph" type="a">
                            <li><p>Your Helpout can be free or paid.If you pay for the Helpout, use this coupon code to get $25 off: <span class="ho-main-clr">{</span><?php echo $coupon_code; ?><span class="ho-main-clr">}</span> </p></li>
                            <li><p>Your Helpout needs to be at least 5 minutes long.</p></li>
                        </ol>
                    </li>
                    <li>
                        <p>Each screenshot you send us will submit your name once to the raffle.You can submit up to 10 screenshots of individual Helpout sessions.<span style="color: red;">*</span></p>
                    </li>
                    <li>
                        <p>The Helpouts team will randomly pick 17 winners for the prizes above from all submissions on <?php echo $end_date; ?>, and <?php echo $sponsoring_org; ?> will post the winners here on the site!</p>
                    </li>
                </ol>

                <p class="lead">By participating in the raffle, you agree to the <a href="#myModal1" class="ho-main-clr" role="button" data-toggle="modal"> Raffle Contest Rules</a>.</p>
                <p><span class="lead ho-main-clr">*</span>Each submission can also earn your chosen school club a donation -- <a href="#money" class="ho-main-clr">learn how</a>!</p>
                <a href="http://www.youtube.com/embed/ZmfDVHhTVt8" class="lead ho-main-clr">Click here to learn more about Helpouts</a>
                <br/>
                <br/>

                <!--== What's a Helpout ==-->
                <h3>What 's a Helpout and how do I <span class="ho-main-clr">"</span>take one?<span class="ho-main-clr">"</span></h3>

                <p class="lead">Helpouts is a new service by Google that lets you video chat live with an expert for one-on-one help. All of their experts are vetted and promise to deliver a great experience through a 100% <a class="ho-main-clr" href="http://goo.gl/7dRsRo">money back guarantee</a>. Here's how you can get started:</p>
                <ol class="lead">
                    <li><p>To sign up, visit <a href="http://goo.gl/geWvBy" class="ho-main-clr">collegehelpouts.com</a>.</p></li>
                    <li><p>Browse categories to find a Helpout that looks like a fit for you.</p></li>
                    <li><p>Pick and schedule your session with one of our experts. Learn how to build an app, take a session with a calc tutor, or get advice on how to land your dream job -- you name it!</p></li>
                </ol>
                <br/>

                <!--=== Cool, But I have to Pay? ===-->
                <h3>Cool, but I have to pay?</h3>
                <p class="lead">Many Helpouts are free, but some are paid. We recommend searching for the category of Helpout that you're looking for to compare prices and providers; then, if your preferred Helpout has a fee, you can use the <a href="http://goo.gl/jw6JWx" class="ho-main-clr">promo</a> code <span class="ho-main-clr">{<?php echo $coupon_code; ?>}</span> to get $25 off!</p>


                <!--=== Rules ===-->
                <!-- Button to trigger modal -->
                <div>
                    <h4 class="txt-lil-larger">
                        <!-- Button To Check Rules -->
                        <a href="#myModal1" class="ho-main-clr" role="button" data-toggle="modal">Click Here for the Raffle Contest Rules!</a>
                    </h4>
                </div>

                <!-- Modal -->
                <div id="myModal1" class="modal hide" tabindex="-1" role="dialog">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3>Raffle Contest Rules Testing</h3>
                    </div>
                    <div class="modal-body">
                        <?php include 'raffle_rules.php'; ?>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
                        <!-- <button class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>

                <hr class="featurette-divider"><a name="money" id="money" href=""></a>

                <!-- Earn Ca$h For Your Org Section -->
                <div class="container special featurette">
                    <img class="featurette-image pull-right" alt="features" src="<?php echo $school_img; ?>">
                    <h2 class="featurette-heading">Earn ca$h money for your org. <span class="muted">Yup, for each and every signup.</span></h2>
                    <blockquote>
                        <p>For each person you sign up for Helpouts, Google will donate to your chosen org. The org with the most signups will also get a bonus donation!</p>
                    </blockquote>
                    <h3>Earn $20 per Helpouts signup for your org</h3>
                    <h4 class="">Here's how: </h4>
                    <ol type="">
                        <li>
                            <p class="lead">When you submit your screenshots for the raffle (<a href="#myModal1" class="ho-main-clr" role="button" data-toggle="modal">see rules</a >), don’t forget to mention which club you belong to.  For each screenshot you submit on behalf of your club, Helpouts will donate $20 to that club. </p>
                        </li>
                        <li>
                            <p class="lead"><strong class="ho-main-clr"> Bonus: </strong>Add your student club’s name in the email subject line and we’ll make a $20 donation to them for every submission we receive! Learn more <a href="#money" class="ho-main-clr">here</a>!</p>
                        </li>
                    </ol>
                </div>


    <!-- The Leaderboards Section (it's disabled already) ------------------------------------------------------------------------------------------- -->

    <!--         <a name="leaderboards" href="#leaderboards"></a>
            <br>
            <hr class="featurette-divider">
            <br> -->

            <!--=== Chart Section ===-->
            <!-- <div class="row-fluid">
                <h1>See Your Organizations Rankings!</h1><br><br> -->
                <!-- Left Side -->
    <!--             <div class="span4 cool-border" style="text-align: left;">
                    <canvas id="cs_doughnut_chart" height="225"  width="300" ></canvas>
                </div>
     -->            <!-- Right Side -->
    <!--             <div class="span4 pull-left left-orgs">
                    <div class="cont-algn-l">
                        <h4 class="org1-name"><i class="fa fa-circle"></i> Org 1's Name!</h4>

                        <h4 class="org2-name"><i class="fa fa-circle"></i> Org 2's Name!</h4>

                        <h4 class="org3-name"><i class="fa fa-circle"></i> Org 3's Name!</h4>

                        <h4 class="org4-name"><i class="fa fa-circle"></i> Org 4's Name!</h4>

                        <h4 class="org5-name"><i class="fa fa-circle"></i> Org 5's Name!</h4>
                    </div>
                </div>
            </div>
     -->
            <hr class="featurette-divider"></div>
            <!-- /END THE FEATURETTES -->

    <?php include 'footer.php'; ?>