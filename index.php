<?php
//load Data
include_once("phpOperations/getData.php");
include_once("phpOperations/getWinner.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--meta name="description" content="Quizzy Pop is the "-->
  <meta name="keywords" content="Quizzy Pop,QuizzyPop,quizzypop,UoM Leos, News Letters, Leo Club of University of Moratuwa">
  <meta name=”robots” content=”index,nofollow”/>
  <meta tag=”nositelinkssearchbox”/>
  <meta name="author" content="UoM Leos">
    <title>Quizzy Pop</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/winner.css" rel="stylesheet">
    <link href="assets/snow/snow.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Montserrat for title -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">

 <!-- Confirm msg css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <!--  chrismas effect-->
    <!--div id="snowflakeContainer">
    <p class="snowflake">&#10054;</p>
</div-->

<!--iframe src="assets/snow/audio.mp3" allow="controls autoplay" loop="true" style="display:none" id="iframeAudio" allowullScreen>
</iframe> 
    <audio controls autoplay loop id="playAudio" style="display:none;">
      <source src="assets/snow/audio.ogg" type="audio/ogg">
        <source src="assets/snow/audio.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio-->
        <!--  chrismas effect-->

<div style="background: url('assets/images/preloader.gif') center no-repeat #fefcfe;" id="pageLoad"></div>
<div id="app">
<img src="assets/images/mostoutstanding.png" alt="" class="overlay award" id="animate3d">
<!-- Start Header -->
<header id="mu-hero" class="" role="banner">
    <!-- Start menu  -->
    <nav class="navbar navbar-fixed-top navbar-default mu-navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Logo -->
                <a class="navbar-brand" href="index.php">Quizzy Pop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav mu-menu navbar-right">
                    <li><a href="#mu-hero">Home</a></li>
                    <li><a href="#winner">Last Winner</a></li>
                    <li><a href="#mu-contact">Question</a></li>
                    <li><a href="#answer">Answer Form</a></li>
                    <li><a href="#mu-schedule">Editorial Team</a></li>
                    <li><a href="http://www.uomleos.org/">Official Web</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End menu -->

    <div class="mu-hero-overlay">
        <div class="container">
            <div class="mu-hero-area">
                <!-- Start hero featured area -->
                <div class="mu-hero-featured-area">
                    <div class="mu-hero-featured-content">
                        <img src="assets/images/quizzy_logo.png">
                        <h1>WELCOME TO QUIZZY POP</h1>
                        <h2>Hosted By : Leo Club of University of Moratuwa</h2>

                        <div class="mu-event-counter-area">
                            <div id="">

                                <img src="assets/images/logos.png">
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End hero featured area -->

            </div>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Start main content -->
<main role="main">

    <!-- Start Contact -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">
                        <div class="mu-title-area">
                            <font color="#B90008">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <font size="5">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </font>
                            <font size="6">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            </font>
                            <font size="8">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </font>
                            <font size="6">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </font>
                            <font size="5">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </font>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <h2 class="mu-heading-title">Solve the Question and be the next lucky WINNER and walk away with a 2000/= worth gift voucher from SARASAWI book shop! </h2>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            </font>
                            <br>
                        </div>

                        <div class="mu-title-area">
                            <!-- <h2 class="mu-heading-title">&nbsp;</h2> -->
                            <h2 class="mu-heading-title" id="winner">&nbsp;</h2>

                        </div>

                        <!--Winner Section-->
<div class="mu-title-area"  style="height: 520px;" >
      <div class="row">
        <h1 style="font-family: 'Clicker Script', cursive; font-size: 60px; font-weight: 600;">Congratulations!</h1>
      </div>
      <div class="all">
        <div class="row ">
        <img src="assets/images/winner/winner_throphy.png" class="trophy">
          <img src="phpOperations/winners/winner.jpg" class="user_img">
          <img src="assets/images/winner/winner_starts.png" class="winner_starts">
        </div>
      <div class="row winner-data">
        <h4 style="margin-top: 25px;margin-bottom:0;font-family: Coda;"><?php echo $winner_data[0]['name'];?></h4>
        <p style="margin-top: 0;font-family: Coda;"  id="mu-contact">The <b>Winner</b> of the <b>QuizzyPop</b> month <b><?php echo $winner_data[0]['month'];?></b></p>
      </div>
      </div>
  </div>
<!--#Winner section-->

                        <div class="mu-title-area">
                            <h2 class="mu-heading-title">Quizzy Pop Question for Month <?php echo $data[0]['month'];?></h2>
                            <br>
                            <p><?php echo $data[0]['question'];?></p><br>
                            <pre class="text-center text-muted">Last updated : <?php echo $data[0]['updatedDate'];?></pre>
                        </div>

                        <div class="mu-title-area" id="answer">
                            <h2 class="mu-heading-title">&nbsp;</h2>
                            <h2 class="mu-heading-title">&nbsp;</h2>

                        </div>

                        <div class="mu-title-area">
                            <h2 class="mu-heading-title">Answer Submitting Form</h2>
                        </div>

                        <!-- Start Contact Content -->
                        <div class="mu-contact-content">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="mu-contact-form-area">
                                        
                                        <form id="ajax-contact" method="post" action="phpOperations/submitAnswer.php"
                                              class="mu-contact-form">
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                       placeholder="Enter Quizzy Pop Month (<?php echo $data[0]['month'];?>)" id="month" name="month" 
                                                       required >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Name"
                                                       id="name" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control"
                                                       placeholder="Enter Your Contact Number" id="tel" name="contact"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter Your Email"
                                                       id="email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Enter Your Answer Here..."
                                                          id="message" name="msg" required></textarea>
                                            </div>
                                                                                        <div id="loader"><i class="fa fa-spinner load fa-3x" aria-hidden="true"></i></div>

                                            <input type="submit" id="submit" class="mu-send-msg-btn" value="Submit Answer">

                                        </form>
                                        <!--div id="form-messages" class="text-center"></div-->
                                        <br>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Contact Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- End Contact -->

    <!-- Editorial Lisit Schedule  -->
    <section id="mu-schedule" >
        <div class="container">
            <div class="row">
                <div class="colo-md-12">
                    <div class="mu-schedule-area" style="padding-top:0;">

                        <div class="mu-title-area">
                            <h2 class="mu-title">Our Editorial Team</h2>
                        </div>

                        <div class="mu-schedule-content-area" style="margin-top:0;">


                            <!-- Tab panes -->
                            <div class="tab-content mu-schedule-content">
                                <div role="tabpanel" class="tab-pane fade mu-event-timeline in active" id="first-day">
                                    <ul>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/thilina.jpg" alt="event speaker">
                                                <p class="mu-event-time">Director of Editorial</p>
                                                <h3>Leo Thilina Prasad</h3>
                                                <span><a href="mailto:thilina.prashad25@gmail.com">thilina.prashad25@gmail.com</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/main.jpg" alt="event speaker">
                                                <p class="mu-event-time">Cheif Editor</p>
                                                <h3>Leo Shanika Priyadarshnai</h3>
                                                <span><a href="mailto:s.priyadarshani215@gmail.com">priyadarshani215@gmail.com</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/nifa.jpg" alt="event speaker">
                                                <p class="mu-event-time">Editorial Member</p>
                                                <h3>Leo Nifran Mohomed</h3>
                                                <span><a href="mailto:mnifran16@gmail.com">mnifran16@gmail.com</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/chamodi.jpg" alt="event speaker">
                                                <p class="mu-event-time">Editorial Member</p>
                                                <h3>Leo Chamodi Lokuliyana</h3>
                                                <span><a href="mailto:chamodihima@gmail.com">chamodihima@gmail.com</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/nilu.jpg" alt="event speaker">
                                                <p class="mu-event-time">Editorial Member</p>
                                                <h3>Leo Nilupuli Hansamali</h3>
                                                <span><a href="mailto:nilupulee.hansamali@gmail.com">nilupulee.hansamali@gmail.com</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/hashani.jpg" alt="event speaker">
                                                <p class="mu-event-time">Editorial Member</p>
                                                <h3>Leo Hashani Senanayaka</h3>
                                                <span><a href="mailto:hashanih95@gmail.com">hashanih95@gmail.com</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mu-single-event">
                                                <img src="assets/images/sanath.jpg" alt="event speaker">
                                                <p class="mu-event-time">Editorial Member</p>
                                                <h3>Leo Sanath Ramesh</h3>
                                                <span><a href="mailto:sr19951218@gmail.com ">sr19951218@gmail.com </a></span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Schedule -->
</main>
<!-- End main content -->



<!-- Start footer -->
<footer id="mu-footer" role="contentinfo">
    <div class="container">
        <div class="mu-footer-area">
            <div class="mu-footer-top">
                <div class="mu-social-media">
                    <div class="row">
    <div class="col-md-2 col-md-offset-5"><img src="http://hitwebcounter.com/counter/counter.php?page=6874398&style=0006&nbdigits=6&type=page&initCount=0" title="" Alt=""   border="0" id="counter">
      <br><label for="counter">Web Visits</label></div>
</div>
                    <a href="http://www.uomleos.org/" title="Uomleos Web Site"><i class="fa fa-globe"></i></a>
                    <a href="https://www.facebook.com/UOMLEOS" title="Uomleos FB page"><i
                                class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/uomleos" title="Uomleos Instagram Page"><i
                                class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="http://www.uom-leos.blogspot.com" title="Uomleos Official Blog"><i class="fa fa-rss"
                                                                                                aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/channel/UCi7lECYAPt4POorfM6Hkw5Q"
                       title="Uomleos Youtube Channel"><i class="fa fa-youtube"></i></a>
                    <a href="https://www.linkedin.com/company/13436025/" title="Uomleos Linkedin Page"><i
                                class="fa fa-linkedin"></i></a>
                    <a href="https://twitter.com/uomleos" title="Uomleos Twitter Account"><i class="fa fa-twitter"></i></a>
                    <a href="https://plus.google.com/+UOMLeos" title="Uomleos Google+ Page"><i
                                class="fa fa-google-plus"></i></a>
                    <a href=" https://www.flickr.com/people/uomleos" title="Uomleos Flicker Account"><i
                                class="fa fa-flickr" aria-hidden="true"></i></a>
                    <a href="https://www.scribd.com/uomleos" title="Uomleos Scribed Account"><i class="fa fa-scribd"
                                                                                                aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="mu-footer-bottom">
                <p class="mu-copy-right">&copy; Quizzy Pop 2018 @ <a rel="nofollow" href="http://www.uomleos.org/">UoM
                        Leos</a>. All right reserved.</p>
            </div>
        </div>
    </div>

</footer>
<!-- End footer -->

</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="assets/js/slick.min.js"></script>
<!-- Event Counter -->
<script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
<!-- Ajax contact form  -->
<script type="text/javascript" src="assets/js/app.js"></script>


<!-- Custom js -->
<script type="text/javascript" src="assets/js/custom.js"></script>

<!-- Confirm js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script src="assets/snow/snow.js"></script>


</body>
</html>