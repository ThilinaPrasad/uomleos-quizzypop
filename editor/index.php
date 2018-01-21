<?php
//load Data
include_once("../phpOperations/getData.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Quizzy Pop | Editor</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="../assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="../assets/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="../assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="../style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Montserrat for title -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

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
                <a class="navbar-brand" href="https://quizzypop.uomleos.org/">Quizzy Pop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav mu-menu navbar-right">
                    <li><a href="#mu-hero">Home</a></li>
                    <li><a href="#mu-contact">Current Question</a></li>
                    <li><a href="#answer">Add New Question</a></li>
                    <li><a href="http://quizzypop.uomleos.org/">Go To Quizzy Pop Web</a></li>

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
                        <img src="../assets/images/quizzy_logo.png">
                        <h1>WELCOME TO Quizzy Pop Editor Panel</h1>
                        <h2>Hosted By : Leo Club of University of Moratuwa</h2>

                        <div class="mu-event-counter-area">
                            <div id="">

                                <img src="../assets/images/logos.png">
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

    </section>
    <!-- Start Contact -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">

                        <div class="mu-title-area">
                            <h2 class="mu-heading-title">Current Showing Question(<?php echo $data[0]['month']?>)</h2>
                            <p><?php echo $data[0]['question']?></p>
                            <br>
                            <pre class="text-center text-muted">Last updated : <?php echo $data[0]['updatedDate'];?></pre>
                        </div>

                        <div class="mu-title-area" id="answer">
                            <h2 class="mu-heading-title">&nbsp;</h2>
                            <h2 class="mu-heading-title">&nbsp;</h2>

                        </div>

                        <div class="mu-title-area">
                            <h2 class="mu-heading-title">Add New Question Form</h2>
                        </div>

                        <!-- Start Contact Content -->
                        <div class="mu-contact-content">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="mu-contact-form-area">
                                        <div id="form-messages"><?php echo $messege?></div>
                                        <form id="ajax-contact" method="post" action="../phpOperations/addQuestion.php"
                                              class="mu-contact-form">
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                       placeholder="Enter Quizzy Pop Month" id="month" name="month"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Enter Question Here...(Max 5000 Words)"
                                                          id="message" name="question" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control"
                                                       placeholder="Enter Editor Password" id="password" name="password"
                                                       required>
                                            </div>
                                            <input type="submit" class="mu-send-msg-btn" value="Post Question" name="submit">

                                        </form>
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

</main>
<!-- End main content -->
<!-- Start footer -->
<footer id="mu-footer" role="contentinfo">
    <div class="container">
        <div class="mu-footer-area">
            <div class="mu-footer-top">
                <div class="mu-social-media">
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
                <p class="mu-copy-right">&copy;Quizzy Pop @ <a rel="nofollow" href="http://www.uomleos.org/">UoM
                        Leos</a>. All right reserved.</p>
            </div>
        </div>
    </div>

</footer>
<!-- End footer -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="../assets/js/slick.min.js"></script>
<!-- Event Counter -->
<script type="text/javascript" src="../assets/js/jquery.countdown.min.js"></script>
<!-- Ajax contact form  -->
<script type="text/javascript" src="../assets/js/app.js"></script>


<!-- Custom js -->
<script type="text/javascript" src="../assets/js/custom.js"></script>


</body>
</html>